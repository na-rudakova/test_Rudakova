<?php

use yii\db\Migration;

class m210101_000000_add_client_id_to_users extends Migration
{
    public function up()
    {
        $this->addColumn('users', 'client_id', $this->integer());

       // ...
    }

    public function down()
    {
        $this->dropColumn('users', 'client_id');
    }
}