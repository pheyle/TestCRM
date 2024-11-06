<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%offers}}`.
 */
class m241106_054520_create_offers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%offers}}', [
            'id'            => $this->primaryKey(),
            'title'         => $this->string(255)->notNull()->comment('Название оффера'),
            'email'         => $this->string(100)->notNull()->unique()->comment('Email представителя'),
            'phone'         => $this->text()->null()->comment('Телефон представителя'),
            'created_at' => $this->integer()->notNull()->comment('Дата добавления'),
            'updated_at' => $this->integer()->notNull()->comment('Дата изменения'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%offers}}');
    }
}
