<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%notes}}`.
	 */
	class m190927_101316_create_notes_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%notes}}', [
				'id' => $this->primaryKey(),
				'user_id' => $this->integer()->notNull(),
				'body' => $this->text(),
				'created' => $this->integer()
			]);

			$this->addForeignKey(
				'fk-notes-user-id',
				'notes',
				'user_id',
				'users',
				'id',
				'CASCADE'
			);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%notes}}');
		}
	}
