<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `app\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_tamu', 'id_kamar', 'status'], 'integer'],
            [['check_in', 'check_out', 'tanggal_pesan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Booking::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_tamu' => $this->id_tamu,
            'id_kamar' => $this->id_kamar,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'tanggal_pesan' => $this->tanggal_pesan,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
