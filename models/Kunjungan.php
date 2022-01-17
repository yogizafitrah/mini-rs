<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kunjungan".
 *
 * @property int $id_kunjungan
 * @property string $no_regis
 * @property string $pasien_kunjungan
 * @property string $dokter_kunjungan
 * @property string $poli_kunjungan
 * @property string $carabayar
 * @property string $status_kunjungan
 */
class Kunjungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kunjungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_regis', 'pasien_kunjungan', 'dokter_kunjungan', 'poli_kunjungan', 'carabayar', 'status_kunjungan'], 'required'],
            [['carabayar', 'status_kunjungan'], 'string'],
            [['no_regis', 'pasien_kunjungan', 'dokter_kunjungan', 'poli_kunjungan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kunjungan' => 'Id Kunjungan',
            'no_regis' => 'No Regis',
            'pasien_kunjungan' => 'Nama Pasien',
            'dokter_kunjungan' => 'Nama Dokter',
            'poli_kunjungan' => 'Nama Poli',
            'carabayar' => 'Carabayar',
            'status_kunjungan' => 'Status Kunjungan',
        ];
    }
}
