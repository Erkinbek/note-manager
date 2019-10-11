<?php

  namespace app\modules\api\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "notes".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property string $body
	 * @property int $created
	 *
	 * @property Users $user
	 */
	class Notes extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'notes';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id'], 'required'],
				[['user_id', 'created'], 'integer'],
				[['body'], 'string'],
				[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
			];
		}

		/**
		 * {@inheritdoc}
		 */
		public function attributeLabels()
		{
			return [
				'id' => 'ID',
				'user_id' => 'User ID',
				'body' => 'Body',
				'created' => 'Created',
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
