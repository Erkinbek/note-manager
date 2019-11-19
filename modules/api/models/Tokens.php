<?php

	namespace app\modules\api\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "Tokens".
	 * @package app\modules\api\models
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property string $token
	 * @property int $created
	 * @property int $endDate
	 * @property string $ip
	 * @property string $device
	 *
	 * @property Users $user
	 */

	class Tokens extends ActiveRecord
	{

		public static function tableName()
		{
			return 'tokens';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id', 'created', 'endDate'], 'integer'],
				[['token', 'ip', 'device'], 'string', 'max' => 255],
				[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
			];
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getUser()
		{
			return $this->hasOne(Users::className(), ['id' => 'user_id']);
		}
	}