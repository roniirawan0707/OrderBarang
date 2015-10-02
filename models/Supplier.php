<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $idsupplier
 * @property string $nama
 * @property string $alamat
 * @property string $telepon1
 * @property string $telepon2
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
            [['nama', 'alamat', 'telepon1'], 'required'],
            [['nama'], 'string', 'max' => 50],
            [['alamat', 'keterangan'], 'string', 'max' => 200],
            [['telepon1', 'telepon2'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idsupplier' => 'Idsupplier',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telepon1' => 'Telepon1',
            'telepon2' => 'Telepon2',
            'keterangan' => 'Keterangan',
        ];
    }
}
