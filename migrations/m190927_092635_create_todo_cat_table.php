<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%todo_cat}}`.
 */
class m190927_092635_create_todo_cat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%todo_cat}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%todo_cat}}');
    }
}
