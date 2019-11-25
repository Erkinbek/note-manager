<?php

namespace app\modules\api\controllers;

use app\modules\api\models\Notes;
use yii\base\Controller;
use yii\helpers\Json;

class NotesController extends Controller
{
	public $data;

	public function beforeAction($action)
	{
		$this->data = JSON::decode(file_get_contents('php://input'));
		return parent::beforeAction($action);
	}

	public function actionIndex() : array
	{
		return Notes::find()->where(['user_id' => $this->data['user']])->orderBy('id DESC')->asArray()->all();
	}

	public function actionCreate() : bool
	{
		$model = new Notes();
		$model->user_id = $this->data['user'];
		$model->body = $this->data['body'];
		$model->created = time();
		return $model->save();
	}

	public function actionView() : array
	{
		$id = (int) $this->data['id'];
		return Notes::find()->where(['id' => $id, 'user_id' => $this->data['user']])->asArray()->one();
	}

	public function actionUpdate() : bool
	{
		$id = (int) $this->data['id'];
		$model = Notes::find()->where(['user_id' => $this->data['user'], 'id' => $id])->one();
		$model->user_id = $this->data['user'];
		$model->body = $this->data['body'];
		$model->created = time();
		return $model->save();
	}

	public function actionDelete() : bool
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$note = Notes::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($note == null) return false;
		return $note->delete();
	}
}