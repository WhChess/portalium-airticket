<?php

namespace diginova\airticket\migrations;

use yii\db\Migration;

class m211115_00003_flight extends Migration
{
    public function up()
    {

        $this->createTable('flight', [
            'id_flight' => $this->primaryKey(),
            'date_start' => $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            'date_end' => $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            'id_airport_from' => $this->integer()->notNull(),
            'id_airport_to' => $this->integer()->notNull(),
            'flight_no' => $this->string()->notNull(),
            'door_no' => $this->string()->notNull(),
        ]);
        $this->addForeignKey(
            'fk-airport_flight_id_airport_from',
            'flight',
            'id_airport_from',
            'airport',
            'id_airport',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-airport_flight_id_airport_to',
            'flight',
            'id_airport_to',
            'airport',
            'id_airport',
            'CASCADE',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('flight');
    }
}