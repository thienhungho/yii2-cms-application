<?php

namespace thienhungho\ProductManagement\migrations;

use yii\db\Schema;

class m181111_100101_product_type_meta extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product_type_meta}}', [
            'id'           => $this->primaryKey(),
            'product_type' => $this->string(255)->notNull(),
            'name'         => $this->string(255)->notNull(),
            'input_type'   => $this->string(255)->notNull()->defaultValue('text'),
            'created_at'   => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'updated_at'   => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'created_by'   => $this->integer(19),
            'updated_by'   => $this->integer(19),
            'FOREIGN KEY ([[product_type]]) REFERENCES {{%product_type}} ([[name]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%product_type_meta}}');
    }
}
