<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tentang".
 *
 * @property int $kode
 * @property string|null $isi
 */
class Tentang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tentang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'integer'],
            [['isi'], 'string', 'max' => 1000],
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
            'isi' => 'Isi',
        ];
    }
}
