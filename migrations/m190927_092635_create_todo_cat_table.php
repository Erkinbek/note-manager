<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%todo_cat}}`.
	 */
	class m190927_092635_create_todo_cat_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%todo_cat}}', [
				// Id, user_id, title, comment, created
				'id' => $this->primaryKey(),
				'user_id' => $this->integer(),
				'title' => $this->string(),
				'comment' => $this->text(),
				'created' => $this->integer()
			]);

			$this->addForeignKey(
				'fk-todo_cat-user-id',
				'todo_cat',
				'user_id',
				'users',
				'id'
			);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%todo_cat}}');
		}
	}
