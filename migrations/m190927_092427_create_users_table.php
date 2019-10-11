<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%users}}`.
	 */
	class m190927_092427_create_users_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%users}}', [
				'id' => $this->primaryKey(),
				'email' => $this->string()->notNull()->unique(),
				'pass' => $this->string()->notNull(),
				'phone' => $this->string()->unique(),
				'address' => $this->text(),
				'fio' => $this->text(),
				'registration_date' => $this->integer(),
				'last_login' => $this->integer(),
				'status' => $this->integer()->defaultValue(0),
				'token' => $this->string(15),
        'access_token' => $this->string(15),
			]);
		}

		/**
		 * {@inheritdoc}
		 */
		public function safeDown()
		{
			$this->dropTable('{{%users}}');
		}
	}
