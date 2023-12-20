<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contoh".
 *
 * @property int $id
 * @property string|null $isi
 */
class Contoh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contoh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['isi'], 'string', 'max' => 10],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isi' => 'Isi',
        ];
    }
}
