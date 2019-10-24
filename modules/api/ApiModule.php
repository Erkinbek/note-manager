<?php

	namespace app\modules\api;

	use Yii;
	use yii\base\Module;
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

		/**
		 * {@inheritdoc}
		 */
		public function init()
		{
			parent::init();

			$this->layout = false;

			Yii::$app->response->format = Response::FORMAT_JSON;
			Yii::$app->user->enableSession = false;

			Yii::configure($this, require __DIR__ . '/config.php');
      Yii::$app->user->enableSession = false;
    }
	}
