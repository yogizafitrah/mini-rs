<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poliklinik".
 *
 * @property int $id_poli
 * @property string $nama_poli
 * @property string $status_poli
 *
 * @property Jadwal[] $jadwals
 */
class Poliklinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poliklinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_poli', 'status_poli'], 'required'],
            [['status_poli'], 'string'],
            [['nama_poli'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_poli' => 'ID Poli',
            'nama_poli' => 'Nama Poli',
            'status_poli' => 'Status Poli',
        ];
    }

    /**
     * Gets query for [[Jadwals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_poliklinik' => 'id_poli']);
    }
}
