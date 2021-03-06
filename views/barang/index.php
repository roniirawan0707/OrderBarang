<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- <?= Html::a('Tambah Barang', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idSupplier',
            [
                'attribute' => 'idSupplier',
                'value' => 'idSupplier0.nama'
            ],
            // 'idSupplier0.nama',            
            'kode',
            // 'warna',
            'size',
            'hpp',
            'stok',            
            'jual',
            // 'hj',
            'toko',
            // 'status',            
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
