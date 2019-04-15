<?php

namespace app\models;

use Yii;
use yii\base\Model;
//use yii\web\UploadedFile;


class RequestsForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $your_message;
    
    public function rules()
    {
        return [
             [['name', 'your_message'], 'string'],
            [['name', 'email', 'your_message'], 'required'],
            [['email'], 'email'],
            [['phone'], 'string', 'max' => 100],
        ];
    }

     public function saveRequests()
    {
        $requests = new Requests;
        $requests->name = $this->name;
        $requests->phone = $this->phone;
        $requests->email = $this->email;
        $requests->your_message = $this->your_message;
      
        return $requests->save();

    }
    
    
}