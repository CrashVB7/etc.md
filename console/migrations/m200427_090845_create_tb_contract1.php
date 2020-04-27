<?php

use yii\db\Migration;

/**
 * Class m200427_090845_create_tb_contract1
 */
class m200427_090845_create_tb_contract1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contract1}}',[
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'name' => $this->string(32)->notNull(),
            'surname' => $this->string()->notNull(),
            'idnp' => $this->integer()->unique(),
            'celular' => $this->string()->notNull(),
            'contract_type' => $this->string(),
            'manufacturer' => $this->string(),
            'model_name' => $this->string(),
            'model_part_number' => $this->string(),
            'imei_SN' => $this->integer(),
            'price' => $this->integer(),
            'percent' => $this->float(),
            'total_contr' =>$this->float(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contract1}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200427_090845_create_tb_contract1 cannot be reverted.\n";

        return false;
    }
    */
}
