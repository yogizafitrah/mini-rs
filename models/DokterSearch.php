<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dokter;

/**
 * DokterSearch represents the model behind the search form of `app\models\Dokter`.
 */
class DokterSearch extends Dokter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dokter'], 'integer'],
            [['no_dokter', 'nama_dokter', 'jk_dokter', 'tanggal_lahir', 'tempat_lahir', 'status_dokter', 'agama_dokter', 'pendidikan_dokter', 'alamat_dokter', 'nohp_dokter', 'jenis_dokter', 'jenis_spesialis'], 'safe'],
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
        $query = Dokter::find();

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
            'id_dokter' => $this->id_dokter,
        ]);

        $query->andFilterWhere(['like', 'no_dokter', $this->no_dokter])
            ->andFilterWhere(['like', 'nama_dokter', $this->nama_dokter])
            ->andFilterWhere(['like', 'jk_dokter', $this->jk_dokter])
            ->andFilterWhere(['like', 'tanggal_lahir', $this->tanggal_lahir])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'status_dokter', $this->status_dokter])
            ->andFilterWhere(['like', 'agama_dokter', $this->agama_dokter])
            ->andFilterWhere(['like', 'pendidikan_dokter', $this->pendidikan_dokter])
            ->andFilterWhere(['like', 'alamat_dokter', $this->alamat_dokter])
            ->andFilterWhere(['like', 'nohp_dokter', $this->nohp_dokter])
            ->andFilterWhere(['like', 'jenis_dokter', $this->jenis_dokter])
            ->andFilterWhere(['like', 'jenis_spesialis', $this->jenis_spesialis]);

        return $dataProvider;
    }
}
