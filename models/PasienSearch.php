<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `app\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien'], 'integer'],
            [['no_rekam_medis', 'panggilan_pasien', 'nama_pasien', 'jk_pasien', 'tgllahir_pasien', 'tempatlahir_pasien', 'status_pasien', 'agama_pasien', 'pendidikan_pasien', 'alamat_pasien', 'nohp_pasien'], 'safe'],
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
        $query = Pasien::find();

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
            'id_pasien' => $this->id_pasien,
        ]);

        $query->andFilterWhere(['like', 'no_rekam_medis', $this->no_rekam_medis])
            ->andFilterWhere(['like', 'panggilan_pasien', $this->panggilan_pasien])
            ->andFilterWhere(['like', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'jk_pasien', $this->jk_pasien])
            ->andFilterWhere(['like', 'tgllahir_pasien', $this->tgllahir_pasien])
            ->andFilterWhere(['like', 'tempatlahir_pasien', $this->tempatlahir_pasien])
            ->andFilterWhere(['like', 'status_pasien', $this->status_pasien])
            ->andFilterWhere(['like', 'agama_pasien', $this->agama_pasien])
            ->andFilterWhere(['like', 'pendidikan_pasien', $this->pendidikan_pasien])
            ->andFilterWhere(['like', 'alamat_pasien', $this->alamat_pasien])
            ->andFilterWhere(['like', 'nohp_pasien', $this->nohp_pasien]);

        return $dataProvider;
    }
}
