<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sentences}}`.
 */
class m200301_103738_create_sentences_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sentences}}', [
            'id' => $this->primaryKey(),
            'value' => $this->text(),
            'result' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sentences}}');
    }
}
