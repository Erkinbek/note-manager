<?php

	namespace app\modules\api;

	use Yii;
	use yii\base\Module;

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
			$this->layout = false;
			parent::init();
			Yii::configure($this, require __DIR__ . '/config.php');
      Yii::$app->user->enableSession = false;
    }
	}
