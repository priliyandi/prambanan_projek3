<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tamu".
 *
 * @property int $no_ktp
 * @property string $nama
 * @property int $no_hp
 * @property string $alamat
 * @property string $email
 * @property string $username
 * @property string $password
 */
class Tamu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tamu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_hp', 'alamat', 'email', 'username', 'password'], 'required'],
            [['no_hp'], 'integer'],
            [['nama', 'alamat', 'email'], 'string', 'max' => 225],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_ktp' => 'No Ktp',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public static function getNama()
    {
        $data = [];
        foreach (static::find()->all() as $tamu) {
            $data[] = [$tamu->nama];
        }
        return $data;
    }

    public function getTamuCount(){
        return static::find()->count();
    }
}
