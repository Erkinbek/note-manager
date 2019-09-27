<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%todo_list}}`.
 */
class m190927_092646_create_todo_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%todo_list}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%todo_list}}');
    }
}
