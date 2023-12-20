<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $kode
 * @property string|null $nama
 * @property string|null $jenjang
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['desc'], 'string', 'max' => 1000],
            [['kode'], 'unique'],
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
            'desc' => 'desc',
        ];
    }
}
