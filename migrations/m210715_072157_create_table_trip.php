<?php

use yii\db\Migration;

/**
 * Class m210715_072157_create_table_trip
 */
class m210715_072157_create_table_trip extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->createTable('trip', [
    		'id'=>$this->primaryKey()->unsigned(),
			'user_id'=>$this->integer()->unsigned()->notNull(),
			'from'=>$this->integer()->unsigned()->notNull(),
			'to'=>$this->integer()->unsigned()->notNull(),
			'date'=>$this->dateTime()->notNull(),
			'number_seats'=>$this->integer(4)->notNull(),
			'duration'=>$this->decimal(10,2)->notNull(),
			'currency_id'=>$this->integer()->unsigned()->notNull(),
			'status'=>$this->integer(4)->notNull()->defaultValue(1),
			'created'=>$this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
			'updated'=>$this->timestamp()->notNull()
		]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    	$this->dropTable('trip');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210715_072157_create_table_trip cannot be reverted.\n";

        return false;
    }
    */
}
