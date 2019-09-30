<?php

	namespace app\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "events".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property string $title
	 * @property string $body
	 * @property int $created
	 * @property int $status
	 *
	 * @property Users $user
	 */
	class Events extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'events';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id', 'created', 'status'], 'integer'],
				[['body'], 'string'],
				[['title'], 'string', 'max' => 255],
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
				'title' => 'Title',
				'body' => 'Body',
				'created' => 'Created',
				'status' => 'Status',
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
