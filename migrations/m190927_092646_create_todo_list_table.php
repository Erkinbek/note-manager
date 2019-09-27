<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%todo_list}}`.
	 */
	class m190927_092646_create_todo_list_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%todo_list}}', [
				// Id, user_id, body, created, cat_id
				'id' => $this->primaryKey(),
				'user_id' => $this->integer(),
				'body' => $this->text(),
				'created' => $this->integer(),
				'cat_id' => $this->integer(),
			]);

			$this->addForeignKey(
				'fk-todo_list-user-id',
				'todo_list',
				'user_id',
				'users',
				'id'
			);

			$this->addForeignKey(
				'fk-todo_cat-todo_id',
				'todo_list',
				'cat_id',
				'todo_cat',
				'id'
			);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%todo_list}}');
		}
	}
