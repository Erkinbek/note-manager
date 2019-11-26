<?php

	namespace app\modules\api\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "birthdays".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property int $created
	 * @property string $name
	 * @property string $comment
	 *
	 * @property Users $user
	 */
	class Birthdays extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'birthdays';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id', 'created', 'name', 'comment'], 'required'],
				[['user_id', 'created', 'month', 'day'], 'integer'],
				[['name', 'comment'], 'string', 'max' => 255],
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
