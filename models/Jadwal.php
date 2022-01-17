<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $id_jadwal
 * @property string $hari
 * @property string $jam_mulai
 * @property string $jam_selesai
 * @property int $id_dokter
 * @property int $id_poliklinik
 * @property string $status_jadwal
 *
 * @property Dokter $dokter
 * @property Poliklinik $poliklinik
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hari', 'jam_mulai', 'jam_selesai', 'id_dokter', 'id_poliklinik', 'status_jadwal'], 'required'],
            [['id_dokter', 'id_poliklinik'], 'integer'],
            [['status_jadwal'], 'string'],
            [['hari', 'jam_mulai', 'jam_selesai'], 'string', 'max' => 255],
            [['id_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::className(), 'targetAttribute' => ['id_dokter' => 'id_dokter']],
            [['id_poliklinik'], 'exist', 'skipOnError' => true, 'targetClass' => Poliklinik::className(), 'targetAttribute' => ['id_poliklinik' => 'id_poli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal' => 'Id Jadwal',
            'hari' => 'Hari',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
            'id_dokter' => 'ID Dokter',
            'id_poliklinik' => 'ID Poliklinik',
            'status_jadwal' => 'Status Jadwal',
        ];
    }

    /**
     * Gets query for [[Dokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokter()
    {
        return $this->hasOne(Dokter::className(), ['id_dokter' => 'id_dokter']);
    }

    /**
     * Gets query for [[Poliklinik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPoliklinik()
    {
        return $this->hasOne(Poliklinik::className(), ['id_poli' => 'id_poliklinik']);
    }
}
