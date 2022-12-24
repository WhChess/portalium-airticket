<?php

namespace diginova\airticket\migrations;

use yii\db\Migration;

class m211115_00001_city extends Migration
{
    public function up()
    {

        $this->createTable('city', [
            'id_city' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('city');
    }
}