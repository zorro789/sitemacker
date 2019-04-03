<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prices".
 *
 * @property integer $id
 * @property string $title
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
 * @property string $content11
 * @property string $content12
 * @property string $content13
 * @property string $content14
 * @property string $content15
 * @property string $content16
 * @property string $content17
 * @property string $content18
 * @property string $content19
 * @property string $content20
 */
class Prices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content1', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7', 'content8', 'content9', 'content10', 'content11', 'content12', 'content13', 'content14', 'content15', 'content16', 'content17', 'content18', 'content19', 'content20'], 'required'],
            [['title', 'content1', 'content2', 'content3', 'content4', 'content5', 'content6', 'content7', 'content8', 'content9', 'content10', 'content11', 'content12', 'content13', 'content14', 'content15', 'content16', 'content17', 'content18', 'content19', 'content20'], 'string'],
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
            'content11' => 'Content11',
            'content12' => 'Content12',
            'content13' => 'Content13',
            'content14' => 'Content14',
            'content15' => 'Content15',
            'content16' => 'Content16',
            'content17' => 'Content17',
            'content18' => 'Content18',
            'content19' => 'Content19',
            'content20' => 'Content20',
        ];
    }
}
