<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $no_rekam_medis
 * @property string $panggilan_pasien
 * @property string $nama_pasien
 * @property string $jk_pasien
 * @property string $tgllahir_pasien
 * @property string $tempatlahir_pasien
 * @property string $status_pasien
 * @property string $agama_pasien
 * @property string $pendidikan_pasien
 * @property string $alamat_pasien
 * @property string $nohp_pasien
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekam_medis', 'panggilan_pasien', 'nama_pasien', 'jk_pasien', 'tgllahir_pasien', 'tempatlahir_pasien', 'status_pasien', 'agama_pasien', 'pendidikan_pasien', 'alamat_pasien', 'nohp_pasien'], 'required'],
            [['panggilan_pasien', 'status_pasien', 'agama_pasien', 'pendidikan_pasien'], 'string'],
            [['no_rekam_medis', 'nama_pasien', 'alamat_pasien'], 'string', 'max' => 255],
            [['jk_pasien', 'tgllahir_pasien', 'nohp_pasien'], 'string', 'max' => 20],
            [['tempatlahir_pasien'], 'string', 'max' => 50],
            [['no_rekam_medis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'no_rekam_medis' => 'No Rekam Medis',
            'panggilan_pasien' => 'Panggilan Pasien',
            'nama_pasien' => 'Nama Pasien',
            'jk_pasien' => 'Jk Pasien',
            'tgllahir_pasien' => 'Tgllahir Pasien',
            'tempatlahir_pasien' => 'Tempatlahir Pasien',
            'status_pasien' => 'Status Pasien',
            'agama_pasien' => 'Agama Pasien',
            'pendidikan_pasien' => 'Pendidikan Pasien',
            'alamat_pasien' => 'Alamat Pasien',
            'nohp_pasien' => 'Nohp Pasien',
        ];
    }
}
