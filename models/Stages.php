<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stages".
 *
 * @property integer $id
 * @property string $content
 * @property integer $group
 * @property integer $status
 */
class Stages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['group', 'status'], 'integer'],
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
            'group' => 'Group',
            'status' => 'Status',
        ];
    }
}
