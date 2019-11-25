<?php

namespace app\modules\api\controllers;

use app\modules\api\models\Costs;
use yii\helpers\Json;
use yii\rest\Controller;

class CostsController extends Controller
{
	public $data;

	public function beforeAction($action)
	{
		$this->data = JSON::decode(file_get_contents('php://input'));
		return parent::beforeAction($action);
	}

	public function actionIndex() : array
	{
		return Costs::find()->where(['user_id' => $this->data['user']])->asArray()->orderBy('id DESC')->all();
	}

	public function actionCreate() : bool
	{
		$model = new Costs();
		$model->user_id = $this->data['user'];
		$model->cost_time = time();
		$model->amount = $this->data['amount'];
		$model->pay_type = $this->data['pay_type']; // Naqd pul, plastik, bank (наличные/пластик/через банк деньги)
		$model->comment = $this->data['comment'];
		$model->cost_type = $this->data['cost_type']; // income || outcome
		return $model->save();
	}

	public function actionView()
	{
		$id = (int) $this->data['id'];
		return Costs::find()->where(['id' => $id, 'user_id' => $this->data['user']])->asArray()->one();
	}

	public function actionUpdate() : bool
	{
		$id = (int)$this->data['id'];
		$model = Costs::find()->where(['id' => $id, 'user_id' => $this->data['user']])->one();
		$model->cost_time = time();
		$model->amount = $this->data['amount'];
		$model->pay_type = $this->data['pay_type']; // Naqd pul, plastik, bank (наличные/пластик/через банк деньги)
		$model->comment = $this->data['comment'];
		$model->cost_type = $this->data['cost_type']; // income || outcome
		return $model->save();
	}

	public function actionDelete() : bool
	{
		$id = (int) $this->data['id'];
		$user = (int) $this->data['user'];
		$cost = Costs::find()->where(['user_id'=> $user, 'id' => $id])->one();
		if ($cost == null) return false;
		return $cost->delete();
	}
}