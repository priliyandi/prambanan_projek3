<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fasilitas".
 *
 * @property int $id_fasilitas
 * @property string $nama
 * @property string $gambar
 */
class Fasilitas extends \yii\db\ActiveRecord
{
    public $url;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fasilitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama' ], 'required'],
            [['nama',  'url'], 'string', 'max' => 255],
            [['url'], 'file']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fasilitas' => 'Id Fasilitas',
            'nama' => 'Nama',
            'gambar' => 'Gambar',
        ];
    }

    public function getFasilitasCount(){
        return static::find()->count();
    }
}
