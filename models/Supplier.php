<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $idsupplier
 * @property string $nama
 * @property string $java
 * @property string $cbr
 * @property string $telepon1
 * @property string $telepon2
 * @property string $alamat
 * @property string $keterangan
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'telepon1', 'alamat'], 'required'],
            [['nama'], 'string', 'max' => 50],
            [['java', 'cbr'], 'string', 'max' => 3],
            [['telepon1', 'telepon2'], 'string', 'max' => 15],
            [['alamat', 'keterangan'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsupplier' => 'ID',
            'nama' => 'Nama',
            'java' => 'JAVA',
            'cbr' => 'CBR',
            'telepon1' => 'Telepon',
            'telepon2' => 'Telp. Alternatif',
            'alamat' => 'Alamat',
            'keterangan' => 'Keterangan',
        ];
    }
}
