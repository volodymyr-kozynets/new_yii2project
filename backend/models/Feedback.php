<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property string $feedback_time
 * @property string $feedback_name
 * @property string $feedback_description
 * @property string $feedback_photo
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['feedback_time'], 'safe'],
            [['feedback_name', 'feedback_description', 'feedback_photo'], 'required'],
            [['feedback_description'], 'string'],
            [['feedback_name', 'feedback_photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'feedback_time' => 'Feedback Time',
            'feedback_name' => 'Feedback Name',
            'feedback_description' => 'Feedback Description',
            'feedback_photo' => 'Feedback Photo',
        ];
    }
}
