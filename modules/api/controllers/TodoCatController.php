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
    return TodoCat::find()->all();
  }

  public function actionCreate()
  {
    $model = new TodoCat();
    foreach ($this->data as $key => $value) {
      $model->{$key} = $value;
    }
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
}