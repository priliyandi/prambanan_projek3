<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_karyawan
 * @property string $nama
 * @property string $no_hp
 * @property string $email
 * @property string $alamat
 * @property string $jabatan
 * @property string $username
 * @property string $password
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_hp', 'email', 'alamat', 'jabatan', 'username', 'password'], 'required'],
            [['nama', 'email', 'alamat', 'jabatan', 'username'], 'string', 'max' => 225],
            [['no_hp'], 'string', 'max' => 12],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'jabatan' => 'Jabatan',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
