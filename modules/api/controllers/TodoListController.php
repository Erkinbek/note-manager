<?php


namespace app\modules\api\controllers;


use app\modules\api\models\TodoList;
use Yii;
use yii\base\Controller;
use yii\helpers\Json;

class TodoListController extends Controller
{
	public $data;

	public function beforeAction($action)
	{
		$this->data = JSON::decode(file_get_contents('php://input'));
		return parent::beforeAction($action);
	}

	public function actionIndex() : string
	{
		return TodoList::find()->where(['user_id' => $this->data['user']])->orderBy('id DESC')->all();
	}

	public function actionCreate()
	{
		$model = new TodoList();
		$model->user_id = $this->data['user'];
		$model->body = $this->data['body'];
		$model->created = time();
		$model->cat_id = $this->data['cat_id'];
		if ($model->save()) {
			return true;
		} else {
			$errors = [];
			foreach ($model->errors as $error) {
				$errors[] = $error[0];
			}
			return $errors;
		}
	}

	public function actionView() : array
	{
		$id = (int) $this->data['id'];
		return TodoList::find()->where(['id' => $id])->asArray()->one();
	}

	public function actionUpdate() : bool
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$todo = TodoList::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($todo == null) return false;
		$todo->body = $this->data['body'];
		$todo->cat_id = $this->data['cat_id'];
		return $todo->save();
	}

	public function actionDelete()
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$todo = TodoList::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($todo == null) return false;
		return $todo->delete();
	}

}