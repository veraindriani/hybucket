<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property string|null $harga
 * @property string|null $img
 */
class Produk extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['harga'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['img'], 'string', 'max' => 50],
            ['image', 'file', 'extensions' => ['png','jpg','gif'], 'maxSize' => 1024*1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'harga' => 'Harga',
            'img' => 'Img',
        ];
    }
}
