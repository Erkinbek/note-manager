<?php

namespace app\modules\api\controllers;

use app\modules\api\models\Events;
use yii\base\Controller;
use yii\helpers\Json;

class EventsController extends Controller
{
	public $data;

	public function beforeAction($action)
	{
		$this->data = JSON::decode(file_get_contents('php://input'));
		return parent::beforeAction($action);
	}

	public function actionIndex() : array
	{
		return Events::find()->where(['user_id' => $this->data['user']])->orderBy(['id DESC'])->asArray()->all();
	}

	public function actionCreate() : bool
	{
		$model = new Events();
		$model->user_id = $this->data['user'];
		$model->title = $this->data['title'];
		$model->body = $this->data['body'];
		$model->created = time();
		$model->status = 0; // if status is 0 events is cooming
		return $model->save();
	}

	public function actionUpdate() : bool
	{
		$id = (int) $this->data['id'];
		$model = Events::find()->where(['user_id' => $this->data['user'], 'id' => $id])->one();
		$model->title = $this->data['title'];
		$model->body = $this->data['body'];
		$model->created = time();
		$model->status = $this->data['status']; // if status is 0 events is cooming
		return $model->save();
	}

	public function actionView() : array
	{
		$user_id = (int) $this->data['user'];
		$id = (int) $this->data['id'];
		return Events::find()->where(['user_id' => $user_id, 'id' => $id])->asArray()->orderBy('id DESC')->all();
	}

	public function actionDelete() : bool
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$event = Events::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($event == null) return false;
		return $event->delete();
	}
}