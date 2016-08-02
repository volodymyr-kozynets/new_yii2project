<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property double $price
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'description', 'price'], 'required'],
            [['code', 'name', 'description'], 'string'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'description' => 'Description',
            'price' => 'Price',
        ];
    }
}
