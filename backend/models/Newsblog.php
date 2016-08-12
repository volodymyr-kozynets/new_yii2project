<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "newsblog".
 *
 * @property integer $id
 * @property string $title
 * @property string $txt
 */
class Newsblog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsblog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt'], 'string'],
            [['title'], 'string', 'max' => 1000],
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
            'txt' => 'Txt',
        ];
    }
}
