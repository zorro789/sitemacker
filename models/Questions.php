<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property string $title
 * @property string $photo
 * @property string $content1
 * @property string $content2
 * @property string $content3
 * @property string $content4
 * @property string $content5
 * @property string $content6
 * @property string $content7
 * @property string $content8
 * @property string $content9
 * @property string $content10
 * @property integer $status
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'photo', 'content1', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7', 'content8', 'content9', 'content10'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'photo' => 'Photo',
            'content1' => 'Content1',
            'content2' => 'Content2',
            'content3' => 'Content3',
            'content4' => 'Content4',
            'content5' => 'Content5',
            'content6' => 'Content6',
            'content7' => 'Content7',
            'content8' => 'Content8',
            'content9' => 'Content9',
            'content10' => 'Content10',
            'status' => 'Status',
        ];
    }
}
