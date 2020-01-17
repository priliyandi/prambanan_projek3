<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $password
 * @property int $no_hp
 * @property string $alamat
 * @property string $email
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'no_hp', 'alamat', 'email'], 'required'],
            [['no_hp'], 'integer'],
            [['username', 'password', 'alamat', 'email'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'password' => 'Password',
            'no_hp' => 'No Hp',
            'alamat' => 'Alamat',
            'email' => 'Email',
        ];
    }
}
