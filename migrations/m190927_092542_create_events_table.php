<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%events}}`.
	 */
	class m190927_092542_create_events_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%events}}', [
				// Id, user_id, title, body, created, status
				'id' => $this->primaryKey(),
				'user_id' => $this->integer(),
				'title' => $this->string(),
				'body' => $this->text(),
				'created' => $this->integer(),
				'status' => $this->integer()->defaultValue(0)
			]);

			$this->addForeignKey(
				'fk-events-user-id',
				'events',
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
			$this->dropTable('{{%events}}');
		}
	}
