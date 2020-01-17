<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kamar".
 *
 * @property int $id_kamar
 * @property int $id_fasilitas
 * @property string $no_kamar
 * @property string $gambar
 * @property int $status
 */
class Kamar extends \yii\db\ActiveRecord
{
    const DIPESAN = 10;
    const BELUM_DIPESAN = 20;
    public $url;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fasilitas', 'no_kamar',  'status'], 'required'],
            [['id_fasilitas', 'status'], 'integer'],
            [['no_kamar'], 'string', 'max' => 225],
            [['url'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kamar' => 'Id Kamar',
            'id_fasilitas' => 'Id Fasilitas',
            'no_kamar' => 'No Kamar',
            'gambar' => 'Gambar',
            'status' => 'Status',
        ];
    }

    public function getKamarCount(){
        return static::find()->count();
    }

     public function getStatus()
    {
        if ($this->status == self::DIPESAN) {
            return 'Dipesan';
        } elseif ($this->status == self::BELUM_DIPESAN) {
            return 'Belum Dipesan';
        }
    }
}
