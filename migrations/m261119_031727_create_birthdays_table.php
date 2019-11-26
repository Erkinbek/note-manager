<?php

	use yii\db\Migration;

	/**
	 * Class m261119_031727_create_birthdays_table
	 */
	class m261119_031727_create_birthdays_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%birthdays}}', [
				'id' => $this->primaryKey(),
				'user_id' => $this->integer()->notNull(),
				'created' => $this->integer()->notNull(),
				'name' => $this->string()->notNull(),
				'comment' => $this->string()->notNull(),
			]);

			$this->addForeignKey(
				'fk-birthdays-user-id',
				'birthdays',
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
			$this->dropTable('{{%birthdays}}');
		}
	}
