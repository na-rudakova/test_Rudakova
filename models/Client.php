<?php

class Client extends \yii\db\ActiveRecord
{
    // ...

    public function getUsers()
    {
        return $this->hasMany(User::class, ['client_id' => 'id']);
    }

    public function editUserBinding($userId)
    {
       // ...
    }

    // ...
}