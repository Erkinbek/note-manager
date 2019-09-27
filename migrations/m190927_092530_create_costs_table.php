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
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%costs}}');
    }
}
