<?php

namespace app\models;

use Yii;
use yii\base\Model;

class MessageForm extends Model
{
    public $dateTime;
    public $name;
    public $message;

    public function rules()
    {
        return [
            [['name', 'message'], 'required']
        ];
    }
}
