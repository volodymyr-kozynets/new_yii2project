<?php

namespace backend\models;
use yii\web\UploadedFile;

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
    public $file_image;
    public $del_img;
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
            [['code', 'name', 'description', 'price', 'item_photo'], 'required'],
            [['code', 'name', 'description', 'item_photo'], 'string'],
            [['price'], 'number'],
            [['file_image'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 0],
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
            'item_photo' => 'Item Photo',
        ];
    }
    
    public function upload($id)
    {
        if ($this->validate() && isset($this->file_image)) {
            foreach ($this->file_image as $file) {
                $file->saveAs('uploads/' . $id . '/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        };
    }
}
