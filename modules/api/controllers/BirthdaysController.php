<?php

namespace app\modules\api\controllers;

use app\modules\api\models\Birthdays;
use yii\helpers\Json;
use yii\rest\Controller;

class BirthdaysController extends Controller
{
	public $data;

	public function beforeAction($action)
	{
		$this->data = JSON::decode(file_get_contents('php://input'));
		return parent::beforeAction($action);
	}

	public function actionIndex() : array
	{
		return Birthdays::find()->where(['user_id' => $this->data['user']])->orderBy('id DESC')->asArray()->all();
	}

	public function actionCreate()
	{
		$model = new Birthdays();
		$model->user_id = $this->data['user'];
		$model->created = time();
		$model->name = $this->data['name'];
		$model->comment = $this->data['comment'];
		$model->month = $this->data['month'];
		$model->day = $this->data['day'];
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

	public function actionUpdate()
	{
		$id = (int) $this->data['id'];
		$model = Birthdays::find()->where(['id' => $id, 'user_id' => $this->data['user']])->one();
		$model->created = time();
		$model->name = $this->data['name'];
		$model->comment = $this->data['comment'];
		$model->month = $this->data['month'];
		$model->day = $this->data['day'];
		return $model->save();
	}

	public function actionView() : array
	{
		$id = (int)$this->data['id'];
		return Birthdays::find()->where(['id' => $id, 'user_id' => $this->data['user']])->asArray()->one();
	}

	public function actionDelete() : bool
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$birthday = Birthdays::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($birthday == null) return false;
		return $birthday->delete();
	}
}