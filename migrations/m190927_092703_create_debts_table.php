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
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%debts}}');
    }
}
