<?php
/**
 * Created by PhpStorm.
 * User: tanyem
 * Date: 07.04.16
 * Time: 23:42
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name' , 'email'] , 'required'],
            ['email', 'email']
        ];
    }
}