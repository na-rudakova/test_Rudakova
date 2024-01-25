<?php

class User extends \yii\db\ActiveRecord
{
    // ...

    public function rules()
    {
        return [
            // ...
            [['email'], 'unique'],
            // ...
        ];
    }

    public function getUserType()
    {
        if ($this->client_id !== null) {
            return 'Individual'; 
        } elseif ($this->group_id !== null) {
            return 'Group'; 
        } else {
            return 'Unknown';
        }
    }

    // ...
}