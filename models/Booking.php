<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $id
 * @property int $id_tamu
 * @property int $id_kamar
 * @property string $check_in
 * @property string $check_out
 * @property string $tanggal_pesan
 * @property int $status
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_tamu', 'id_kamar', 'check_in', 'check_out', 'tanggal_pesan', 'status'], 'required'],
            [['id', 'id_tamu', 'id_kamar', 'status'], 'integer'],
            [['check_in', 'check_out', 'tanggal_pesan'], 'safe'],
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
            'id_tamu' => 'Id Tamu',
            'id_kamar' => 'Id Kamar',
            'check_in' => 'Check In',
            'check_out' => 'Check Out',
            'tanggal_pesan' => 'Tanggal Pesan',
            'status' => 'Status',
        ];
    }

     public static function getNama()
    {
        $data = [];
        foreach (static::find()->all() as $booking) {
            $data[] = [$booking->id_tamu];
        }
        return $data;
    }

    public function getBookingCount(){
        return static::find()->count();
    }
}
