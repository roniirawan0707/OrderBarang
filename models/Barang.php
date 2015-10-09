<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property string $id
 * @property string $kode
 * @property string $warna
 * @property string $size
 * @property integer $stok
 * @property string $hpp
 * @property string $hj
 * @property string $toko
 * @property string $status
 * @property integer $idSupplier
 * @property integer $jual
 *
 * @property Supplier $idSupplier0
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kode', 'size', 'stok', 'hpp', 'hj', 'toko', 'status', 'idSupplier', 'jual'], 'required'],
            [['stok', 'hpp', 'hj', 'idSupplier', 'jual'], 'integer'],
            [['status'], 'string'],
            [['id'], 'string', 'max' => 12],
            [['kode'], 'string', 'max' => 7],
            [['warna'], 'string', 'max' => 25],
            [['size'], 'string', 'max' => 3],
            [['toko'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode Barang',
            'warna' => 'Warna',
            'size' => 'Ukuran',
            'stok' => 'Persediaan',
            'hpp' => 'Harga Pokok',
            'hj' => 'Hj',
            'toko' => 'Toko',
            'status' => 'Status',
            'idSupplier' => 'Id Supplier',
            'jual' => 'Penjualan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSupplier0()
    {
        return $this->hasOne(Supplier::className(), ['idsupplier' => 'idSupplier']);
    }
}
