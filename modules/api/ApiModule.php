<?php

	namespace app\modules\api;

	use app\modules\api\models\Users;
	use Yii;
	use yii\base\Module;
	use yii\helpers\Json;
	use yii\web\Response;

	/**
	 * api module definition class
	 */
	class ApiModule extends Module
	{
		/**
		 * {@inheritdoc}
		 */
		public $controllerNamespace = 'app\modules\api\controllers';
		public $data;

		/**
		 * {@inheritdoc}
		 */
		public function init() : void
		{
			parent::init();
			$this->layout = false;
			Yii::$app->response->format = Response::FORMAT_JSON;
			Yii::$app->user->enableSession = false;
			Yii::configure($this, require __DIR__ . '/config.php');
      Yii::$app->user->enableSession = false;
      if (!$this->isAuthorized() && !$this->isLogin()) {
      	exit("You are not authorised!");
      }
    }

    public function isAuthorized() : bool
    {
	    $this->data = JSON::decode(file_get_contents('php://input'));
    	$model = new Users();
    	return $model->isAuthorized($this->data);
    }

    public function isLogin() : bool
    {
    	return (isset($this->data['email']) && isset($this->data['pass']));
    }
	}
