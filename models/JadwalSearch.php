<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jadwal;

/**
 * JadwalSearch represents the model behind the search form of `app\models\Jadwal`.
 */
class JadwalSearch extends Jadwal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jadwal', 'id_dokter', 'id_poliklinik'], 'integer'],
            [['hari', 'jam_mulai', 'jam_selesai', 'status_jadwal'], 'safe'],
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
        $query = Jadwal::find();

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
            'id_jadwal' => $this->id_jadwal,
            'id_dokter' => $this->id_dokter,
            'id_poliklinik' => $this->id_poliklinik,
        ]);

        $query->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'jam_mulai', $this->jam_mulai])
            ->andFilterWhere(['like', 'jam_selesai', $this->jam_selesai])
            ->andFilterWhere(['like', 'status_jadwal', $this->status_jadwal]);

        return $dataProvider;
    }
}
