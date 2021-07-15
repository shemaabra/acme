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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210715_072157_create_table_trip cannot be reverted.\n";

        return false;
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
