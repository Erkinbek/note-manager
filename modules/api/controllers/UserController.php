<?php

	namespace app\modules\api\controllers;

	use app\modules\api\models\Tokens;
	use Yii;
	use yii\base\Controller;
	use yii\helpers\Json;
	use yii\web\Response;
	use app\modules\api\models\Users;

	class UserController extends Controller
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
		}

		public function actionRegister() : bool
		{
			$model = new Users();
			foreach ($this->data as $key => $value) {
				$model->{$key} = $value;
			}
			$model->registration_date = time();
			$model->generateToken();
			$model->setPassword($model->pass);
			if ($model->save()) {
				$model->sendConfirmMail($model->token, $model->email, $model->fio);
			} else {
				$errors = [];
				foreach ($model->errors as $error) {
					$errors[] = $error[0];
				}
				return Json::encode($errors);
			}
			return true;
		}

		public function actionActivate() : bool
		{
			$email = Yii::$app->getRequest()->getQueryParam('email');
			$token = Yii::$app->getRequest()->getQueryParam('token');
			$user = Users::find()->where(['email' => $email, 'token' => $token, 'status' => 0])->one();
			if ($user) {
				$user->status = 1;
				$user->save();
				return true;
			} else {
				return false;
			}
		}

		public function actionLogin() : array
		{
			$result = [
				'error' => 'The username or password is incorrect'
			];
			$email = $this->data['email'];
			$pass = $this->data['pass'];
			$user = Users::find()->select(['id', 'pass'])->where(['email' => $email, 'status' => 1])->one();
			if (!$user) return $result;
			$r = Yii::$app->security->validatePassword($this->data['pass'], $user->pass);
			if (!$r) return $result;
			return [
				'token' => $this->generateToken($user->id),
				'user' => $user->id
			];
 		}

 		private function generateToken($user_id) : string
	  {
	  	$model = new Tokens();
	  	$model->user_id = $user_id;
	  	$model->token = Yii::$app->security->generateRandomString();
	  	$model->created = time();
	  	$model->endDate = 0;
	  	$model->device = $_SERVER['HTTP_USER_AGENT'];
	  	$model->ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	  	$model->save();
		  return $model->token;
	  }
	}