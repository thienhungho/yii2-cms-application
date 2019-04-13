<?php

namespace thienhungho\ProductManagement\migrations;

use yii\db\Schema;

class m181111_100101_product_unit_equivalent extends \yii\db\Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product_unit_equivalent}}', [
            'id'                   => $this->primaryKey(),
            'product_unit_1'       => $this->integer(19),
            'product_unit_1_value' => $this->integer(19)->defaultValue(0),
            'product_unit_2'       => $this->integer(19),
            'product_unit_2_value' => $this->integer(19)->defaultValue(0),
            'created_at'           => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'updated_at'           => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'created_by'           => $this->integer(19),
            'updated_by'           => $this->integer(19),
            'FOREIGN KEY ([[product_unit_2]]) REFERENCES {{%product_unit}} ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%product_unit_equivalent}}');
    }
}
