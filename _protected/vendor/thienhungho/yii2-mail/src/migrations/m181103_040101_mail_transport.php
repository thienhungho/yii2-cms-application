<?php

namespace thienhungho\Mail\migrations;
class m181103_040101_mail_transport extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%mail_transport}}', [
            'id'         => $this->primaryKey(),
            'name'       => $this->string(255)->notNull(),
            'host'       => $this->string(255)->notNull(),
            'username'   => $this->string(255)->notNull(),
            'password'   => $this->string(255)->notNull(),
            'port'       => $this->string(255)->notNull()->defaultValue('465'),
            'encryption' => $this->string(255)->notNull()->defaultValue('TLS'),
            'signature'  => $this->text(),
            'created_at' => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'updated_at' => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'created_by' => $this->integer(19),
            'updated_by' => $this->integer(19),
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%mail_transport}}');
    }
}
