<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kunjungan;

/**
 * KunjunganSearch represents the model behind the search form of `app\models\Kunjungan`.
 */
class KunjunganSearch extends Kunjungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kunjungan'], 'integer'],
            [['no_regis', 'pasien_kunjungan', 'dokter_kunjungan', 'poli_kunjungan', 'carabayar', 'status_kunjungan'], 'safe'],
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
        $query = Kunjungan::find();

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
            'id_kunjungan' => $this->id_kunjungan,
        ]);

        $query->andFilterWhere(['like', 'no_regis', $this->no_regis])
            ->andFilterWhere(['like', 'pasien_kunjungan', $this->pasien_kunjungan])
            ->andFilterWhere(['like', 'dokter_kunjungan', $this->dokter_kunjungan])
            ->andFilterWhere(['like', 'poli_kunjungan', $this->poli_kunjungan])
            ->andFilterWhere(['like', 'carabayar', $this->carabayar])
            ->andFilterWhere(['like', 'status_kunjungan', $this->status_kunjungan]);

        return $dataProvider;
    }
}
