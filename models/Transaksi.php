<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property int $id_booking
 * @property string $harga
 * @property int $jumlah
 * @property string $metode_pembayaran
 * @property string $tanggal_transaksi
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_booking', 'harga', 'jumlah', 'metode_pembayaran', 'tanggal_transaksi'], 'required'],
            [['id_booking', 'jumlah'], 'integer'],
            [['tanggal_transaksi'], 'safe'],
            [['harga', 'metode_pembayaran'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_booking' => 'Id Booking',
            'harga' => 'Harga',
            'jumlah' => 'Jumlah',
            'metode_pembayaran' => 'Metode Pembayaran',
            'tanggal_transaksi' => 'Tanggal Transaksi',
        ];
    }

    public function getTransaksiCount(){
        return static::find()->count();
    }
}
