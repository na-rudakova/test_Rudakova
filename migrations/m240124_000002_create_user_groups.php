<?php

use yii\db\Migration;

class m210101_000002_create_user_groups extends Migration
{
    public function up()
    {
        $this->createTable('user_groups', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        // ...
    }

    public function down()
    {
        $this->dropTable('user_groups');
    }
}