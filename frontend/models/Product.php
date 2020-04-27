<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $manufacturer
 * @property string $model_name
 * @property string $model_part_number
 * @property string $category
 * @property int $price
 * @property string|null $description
 * @property string|null $img
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manufacturer', 'model_name', 'model_part_number', 'category', 'price'], 'required'],
            [['manufacturer', 'price'], 'integer'],
            [['description', 'img'], 'string'],
            [['model_name', 'model_part_number', 'category'], 'string', 'max' => 255],
            [['manufacturer'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manufacturer' => 'Manufacturer',
            'model_name' => 'Model Name',
            'model_part_number' => 'Model Part Number',
            'category' => 'Category',
            'price' => 'Price',
            'description' => 'Description',
            'img' => 'Img',
        ];
    }
}
