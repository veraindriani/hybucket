<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ruang".
 *
 * @property int $kode
 * @property string|null $nama
 * @property string|null $desc
 * @property string|null $img
 */
class Ruang extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'integer'],
            [['nama'], 'string', 'max' => 30],
            [['desc'], 'string', 'max' => 100],
            [['img'], 'string', 'max' => 50],
            [['kode'], 'unique'],
            ['image', 'file', 'extensions' => ['png','jpg','gif'], 'maxSize' => 1024*1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama' => 'Nama',
            'desc' => 'Desc',
            'img' => 'Img',
        ];
    }
}
