<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id_dokter
 * @property string $no_dokter
 * @property string $nama_dokter
 * @property string $jk_dokter
 * @property string $tanggal_lahir
 * @property string $tempat_lahir
 * @property string $status_dokter
 * @property string $agama_dokter
 * @property string $pendidikan_dokter
 * @property string $alamat_dokter
 * @property string $nohp_dokter
 * @property string $jenis_dokter
 * @property string $jenis_spesialis
 *
 * @property Jadwal[] $jadwals
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_dokter', 'nama_dokter', 'jk_dokter', 'tanggal_lahir', 'tempat_lahir', 'status_dokter', 'agama_dokter', 'pendidikan_dokter', 'alamat_dokter', 'nohp_dokter', 'jenis_dokter', 'jenis_spesialis'], 'required'],
            [['status_dokter', 'agama_dokter', 'pendidikan_dokter', 'jenis_dokter', 'jenis_spesialis'], 'string'],
            [['no_dokter'], 'string', 'max' => 50],
            [['nama_dokter', 'jk_dokter', 'alamat_dokter'], 'string', 'max' => 255],
            [['tanggal_lahir', 'tempat_lahir'], 'string', 'max' => 20],
            [['nohp_dokter'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'ID Dokter',
            'no_dokter' => 'No Dokter',
            'nama_dokter' => 'Nama Dokter',
            'jk_dokter' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'status_dokter' => 'Status Dokter',
            'agama_dokter' => 'Agama Dokter',
            'pendidikan_dokter' => 'Pendidikan Dokter',
            'alamat_dokter' => 'Alamat Dokter',
            'nohp_dokter' => 'Nohp Dokter',
            'jenis_dokter' => 'Jenis Dokter',
            'jenis_spesialis' => 'Jenis Spesialis',
        ];
    }

    /**
     * Gets query for [[Jadwals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJadwals()
    {
        return $this->hasMany(Jadwal::className(), ['id_dokter' => 'id_dokter']);
    }
}
