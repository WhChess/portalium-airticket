<?php

namespace diginova\airport\migrations;

use yii\db\Migration;

class m211115_00002_airport extends Migration
{
    public function up()
    {

        $this->createTable('airport', [
            'id_airport' => $this->primaryKey(),
            'id_city' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
        ]);
        $this->addForeignKey(
            'fk-airticket_airport_id_city',
            'airport',
            'id_city',
            'city',
            'id_city',
            'CASCADE',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('airport');
    }
}