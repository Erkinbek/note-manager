<?php

	namespace app\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "debts".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property string $person_name
	 * @property string $comment
	 * @property int $amount
	 * @property int $type
	 * @property int $created
	 * @property int $status
	 *
	 * @property Users $user
	 */
	class Debts extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'debts';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id', 'amount', 'type', 'created', 'status'], 'integer'],
				[['person_name', 'comment'], 'string', 'max' => 255],
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
				'person_name' => 'Person Name',
				'comment' => 'Comment',
				'amount' => 'Amount',
				'type' => 'Type',
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
