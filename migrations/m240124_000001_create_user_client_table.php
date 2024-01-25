<?php

use yii\db\Migration;

class m210101_000001_create_user_client_table extends Migration
{
    public function up()
    {
        $this->createTable('user_client', [
            'user_id' => $this->integer(),
            'client_id' => $this->integer(),
        ]);

        // ...
    }

    public function down()
    {
        $this->dropTable('user_client');
    }
}