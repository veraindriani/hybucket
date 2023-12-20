<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $nama
 */
class Team extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama'], 'required'],
            [['id'], 'integer'],
            [['nama'], 'string', 'max' => 50],
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
            'nama' => 'Nama',
            'img' => 'Img',
        ];
    }
}
