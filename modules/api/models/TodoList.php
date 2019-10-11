<?php

  namespace app\modules\api\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "todo_list".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property string $body
	 * @property int $created
	 * @property int $cat_id
	 *
	 * @property TodoCat $cat
	 * @property Users $user
	 */
	class TodoList extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'todo_list';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id', 'created', 'cat_id'], 'integer'],
				[['body'], 'string'],
				[['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => TodoCat::className(), 'targetAttribute' => ['cat_id' => 'id']],
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
				'cat_id' => 'Cat ID',
			];
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getCat()
		{
			return $this->hasOne(TodoCat::className(), ['id' => 'cat_id']);
		}

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getUser()
		{
			return $this->hasOne(Users::className(), ['id' => 'user_id']);
		}
	}
