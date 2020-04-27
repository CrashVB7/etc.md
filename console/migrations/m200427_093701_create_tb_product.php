<?php

use yii\db\Migration;

/**
 * Class m200427_093701_create_tb_product
 */
class m200427_093701_create_tb_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}',[
            'id' => $this->primaryKey(),
            'manufacturer' => $this->integer()->unique()->notNull(),
            'model_name' => $this->string()->notNull(),
            'model_part_number' => $this->string()->notNull(),
            'category' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'description' => $this->text(),
            'img' => $this->text(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200427_093701_create_tb_product cannot be reverted.\n";

        return false;
    }
    */
}
