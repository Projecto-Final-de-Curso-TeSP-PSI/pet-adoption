<?php

use yii\db\Migration;

/**
 * Class m201122_204540_AddColumn_Animal_id_in_PhotosTable
 */
class m201122_204540_AddColumn_Animal_id_in_PhotosTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->addColumn('photos', 'animal_id', $this->integer()->notNull());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201122_204540_AddColumn_Animal_id_in_PhotosTable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201122_204540_AddColumn_Animal_id_in_PhotosTable cannot be reverted.\n";

        return false;
    }
    */
}
