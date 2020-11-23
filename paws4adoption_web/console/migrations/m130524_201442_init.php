<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        /*$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);*/

       /* $this->addColumn('{{%users}}', 'username', $this->string()->notNull()->unique());
        $this->addColumn('{{%users}}', 'auth_key', $this->string(32)->notNull());
        $this->addColumn('{{%users}}', 'password_hash', $this->string()->notNull());
        $this->addColumn('{{%users}}', 'password_reset_token', $this->string()->unique());
        $this->addColumn('{{%users}}', 'status', $this->smallInteger()->notNull()->defaultValue(10));
        $this->addColumn('{{%users}}', 'created_at', $this->integer()->notNull());
        $this->addColumn('{{%users}}', 'updated_at', $this->integer()->notNull());*/
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
