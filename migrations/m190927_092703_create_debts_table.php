<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%debts}}`.
	 */
	class m190927_092703_create_debts_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%debts}}', [
				// Id, user_id, person_name, comment, amount, type, created, status
				'id' => $this->primaryKey(),
				'user_id' => $this->integer(),
				'person_name' => $this->string(),
				'comment' => $this->string(),
				'amount' => $this->integer(),
				'type' => $this->integer(),
				'created' => $this->integer(),
				'status' => $this->integer(),
			]);

			$this->addForeignKey(
				'fk-debts-user-id',
				'debts',
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
			$this->dropTable('{{%debts}}');
		}
	}
