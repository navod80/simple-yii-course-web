<?php
namespace app\models;

use yii\db\ActiveRecord;

class Course extends ActiveRecord {

    private $username;
    private $password;

    public function rules(){
        return[
            [['username', 'password'], 'required']
        ];
    }
}
