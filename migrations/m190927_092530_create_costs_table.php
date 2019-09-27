<?php

	use yii\db\Migration;

	/**
	 * Handles the creation of table `{{%costs}}`.
	 */
	class m190927_092530_create_costs_table extends Migration
	{
		/**
		 * {@inheritdoc}
		 */
		public function safeUp()
		{
			$this->createTable('{{%costs}}', [
				'id' => $this->primaryKey(),
				'user_id' => $this->integer()->notNull(),
				'cost_time' => $this->integer(),
				'amount' => $this->float(),
				'pay_type' => $this->integer()->defaultValue(0),
				'comment' => $this->text(),
				'cost_type' => $this->integer()
			]);

			$this->addForeignKey(
				'fk-costs-user-id',
				'costs',
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
			$this->dropTable('{{%costs}}');
		}
	}
