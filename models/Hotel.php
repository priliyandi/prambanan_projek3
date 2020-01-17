<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id_hotel
 * @property int $id_fasilitas
 * @property string $nama
 * @property string $gambar
 * @property string $lokasi
 * @property string $email
 * @property string $telepon
 * @property string $ket
 */
class Hotel extends \yii\db\ActiveRecord
{
    public $url;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fasilitas', 'nama', 'lokasi', 'email', 'telepon', 'ket'], 'required'],
            [['id_fasilitas'], 'integer'],
            [['lokasi'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['email', 'telepon'], 'string', 'max' => 255],
            [['ket'], 'string', 'max' => 225],
            [['url'], 'file']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hotel' => 'Id Hotel',
            'id_fasilitas' => 'Id Fasilitas',
            'nama' => 'Nama',
            'gambar' => 'Gambar',
            'lokasi' => 'Lokasi',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'ket' => 'Ket',
        ];
    }
}
