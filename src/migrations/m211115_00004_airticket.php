<?php

namespace diginova\airticket\migrations;

use yii\db\Migration;

class m211115_00004_airticket extends Migration
{
    public function up()
    {

        $this->createTable('airticket', [
            'id_airticket' => $this->primaryKey(),
            'id_flight' => $this->integer()->notNull(),
            'date_create' => $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            'date_update' => $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            'price' => $this->string()->notNull(),
        ]);
        $this->addForeignKey(
            'fk-airticket_airticket_id_flight',
            'airticket',
            'id_flight',
            'flight',
            'id_flight',
            'CASCADE',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('airticket');
    }
}