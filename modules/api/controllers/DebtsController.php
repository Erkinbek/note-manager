<?php

namespace app\modules\api\controllers;

use app\modules\api\models\Debts;
use yii\base\Controller;
use yii\helpers\Json;

class DebtsController extends Controller
{
	public $data;

	public function beforeAction($action)
	{
		$this->data = JSON::decode(file_get_contents('php://input'));
		return parent::beforeAction($action);
	}

	public function actionIndex() : array
	{
		$user_id = (int) $this->data['user'];
		return Debts::find()->where(['user_id' => $user_id])->asArray()->orderBy('id DESC')->all();
	}

	public function actionCreate() : bool
	{
		$model = new Debts();
		$model->user_id = $this->data['user'];
		$model->person_name = $this->data['person']; // 2nd person
		$model->comment = $this->data['comment']; // comment for debt
		$model->amount = $this->data['amount']; // Amount of debt
		$model->type = $this->data['type']; // who gave the debt (you or 2nd person)
		$model->created = time();
		$model->status = 0; // if status is 1 debt is repaid
		return $model->save();
	}

	public function actionView() : array
	{
		$user_id = (int) $this->data['user'];
		$id = (int) $this->data['id'];
		return Debts::find()->where(['user_id' => $user_id, 'id' => $id])->asArray()->orderBy('id DESC')->all();
	}

	public function actionUpdate() : bool
	{
		$model = Debts::find()->where(['user_id' => $this->data['user'], 'id' => $this->data['id']])->one();
		$model->person_name = $this->data['person']; // 2nd person
		$model->comment = $this->data['comment']; // comment for debt
		$model->amount = $this->data['amount']; // Amount of debt
		$model->type = $this->data['type']; // who gave the debt
		$model->created = time();
		$model->status = 0; // if status is 1 debt is repaid
		return $model->save();
	}

	public function actionDelete() : bool
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$debt = Debts::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($debt == null) return false;
		return $debt->delete();
	}
}