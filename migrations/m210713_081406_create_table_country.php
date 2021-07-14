<?php

use yii\db\Migration;

/**
 * Class m210713_081406_create_table_country
 */
class m210713_081406_create_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->createTable('country', [
			'id'=>$this->primaryKey()->unsigned(),
			'code'=>$this->string(2)->unique(),
			'name'=>$this->string(80),
			'phonecode'=>$this->integer(5),
			'lat'=>$this->string(45)->notNull(),
			'lng'=>$this->string(45)->notNull()
		]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    	$this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210713_081406_create_table_country cannot be reverted.\n";

        return false;
    }
    */
}
