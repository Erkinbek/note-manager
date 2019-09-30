<?php

	namespace app\models;

	use yii\db\ActiveRecord;

	/**
	 * This is the model class for table "todo_cat".
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property string $title
	 * @property string $comment
	 * @property int $created
	 *
	 * @property Users $user
	 * @property TodoList[] $todoLists
	 */
	class TodoCat extends ActiveRecord
	{
		/**
		 * {@inheritdoc}
		 */
		public static function tableName()
		{
			return 'todo_cat';
		}

		/**
		 * {@inheritdoc}
		 */
		public function rules()
		{
			return [
				[['user_id', 'created'], 'integer'],
				[['comment'], 'string'],
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
				'comment' => 'Comment',
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

		/**
		 * @return \yii\db\ActiveQuery
		 */
		public function getTodoLists()
		{
			return $this->hasMany(TodoList::className(), ['cat_id' => 'id']);
		}
	}
