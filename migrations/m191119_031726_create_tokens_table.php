<?php

	use yii\db\Migration;

	/**
	 * Class m191119_031726_tokens_table
	 */
	class m191119_031726_create_tokens_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%tokens}}', [
				'id' => $this->primaryKey(),
				'user_id' => $this->integer()->notNull(),
				'token' => $this->text()->notNull(),
				'created' => $this->integer()->notNull(),
				'endDate' => $this->integer()->notNull(),
				'ip' => $this->string()->notNull(),
				'device' => $this->string()->notNull(),
			]);

			$this->addForeignKey(
				'fk-tokens-user-id',
				'tokens',
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
			$this->dropTable('{{%tokens}}');
		}

		/*
		// Use up()/down() to run migration code without a transaction.
		public function up()
		{

		}

		public function down()
		{
				echo "m191119_031726_tokens cannot be reverted.\n";

				return false;
		}
		*/
	}
