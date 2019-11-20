<?php


namespace app\modules\api\controllers;

use app\modules\api\models\TodoCat;
use Yii;
use yii\base\Controller;
use yii\helpers\Json;
use yii\web\Response;

class TodoCatController extends Controller
{
  public $data;

  public function beforeAction($action)
  {
    Yii::$app->response->format = Response::FORMAT_JSON;

    $this->data = JSON::decode(file_get_contents('php://input'));
    return parent::beforeAction($action);
  }

  public function actionIndex()
  {
    return TodoCat::find()->where(['user_id' => $this->data['user']])->orderBy('id DESC')->all();
  }

	/**
	 * @return bool|string
	 *
	 * // Example of json
			{
				"token": "N6WR5900QWhX6ZovVy5mp301zBTSv9Qp",
				"user": 1,
				"title" : "test1",
				"comment" : "For testing #1"
			}
	 */

  public function actionCreate()
  {
    $model = new TodoCat();
    $model->user_id = $this->data['user'];
    $model->title = $this->data['title'];
    $model->comment = $this->data['comment'];
    $model->created = time();
    if ($model->save()) {
      return true;
    } else {
      $errors = [];
      foreach ($model->errors as $error) {
        $errors[] = $error[0];
      }
      return Json::encode($errors);
    }
  }

	/**
	 *
	 Example of json
		{
			"token": "N6WR5900QWhX6ZovVy5mp301zBTSv9Qp",
			"user": 1,
			"id" : 2
		}
	 */

  public function actionView()
  {
  	$id = (int) $this->data['id'];
	  $data = TodoCat::find()->where(['id' => $id])->orderBy('id DESC')->asArray()->all();
	  return $data;
  }

	/**
	 * @return bool
	 * Example json
		 {
			 "token": "N6WR5900QWhX6ZovVy5mp301zBTSv9Qp",
			 "user": 1,
			 "id" : 1,
			 "title" : "tested #1",
			 "comment" : "For testing #1"
		 }
	 */

  public function actionUpdate()
  {
	  $id = (int) $this->data['id'];
	  $user = (int) $this->data['user'];
  	$category = TodoCat::find()->where(['user_id'=> $user, 'id' => $id])->one();
  	if ($category == null) return false;
  	$category->comment = $this->data['comment'];
  	$category->title = $this->data['title'];
  	return $category->save();
  }

	/**
	 *
	 * @return bool
	 *  Example json
		 {
			 "token": "N6WR5900QWhX6ZovVy5mp301zBTSv9Qp",
			 "user": 1,
			 "id" : 3
		 }
	 * @throws \Throwable
	 * @throws \yii\db\StaleObjectException
	 */

  public function actionDelete() : bool
  {
	  $id = (int) $this->data['id'];
	  $user = (int) $this->data['user'];
	  $category = TodoCat::find()->where(['user_id'=> $user, 'id' => $id])->one();
	  if ($category == null) return false;
	  return $category->delete();
  }
}