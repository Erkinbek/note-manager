<?php

	namespace app\modules\api\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "costs".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property int $cost_time
	 * @property double $amount
	 * @property int $pay_type
	 * @property string $comment
	 * @property int $cost_type
	 *
	 * @property Users $user
	 */
	class Costs extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'costs';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id'], 'required'],
				[['user_id', 'cost_time', 'pay_type', 'cost_type'], 'integer'],
				[['amount'], 'number'],
				[['comment'], 'string'],
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
				'cost_time' => 'Cost Time',
				'amount' => 'Amount',
				'pay_type' => 'Pay Type',
				'comment' => 'Comment',
				'cost_type' => 'Cost Type',
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
