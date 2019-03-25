<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requests".
 *
 * @property integer $id
 * @property string $content
 * @property string $email
 * @property string $tel
 */
class Requests extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'content', 'email', 'tel'], 'required'],
            [['id'], 'integer'],
            [['content', 'email', 'tel'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'email' => 'Email',
            'tel' => 'Tel',
        ];
    }
}
