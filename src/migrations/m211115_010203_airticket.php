<?php

use yii\db\Migration;

class m211115_010203_airticket extends Migration
{
    public function up()
    {

        $this->createTable('airticket', [
            'ticket_key' => $this->primaryKey(),
            'airport' => $this->string()->notNull(),
            'date' => $this->datetime()->notNull()->defaultExpression("CURRENT_TIMESTAMP"),
            'price' => $this->string()->notNull(),
            'to_where' => $this->string()->notNull(),
            'from_where' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('airticket');
    }
}