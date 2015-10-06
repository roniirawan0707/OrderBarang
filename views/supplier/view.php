<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */

$this->title = $model->idsupplier;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Supplier', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->idsupplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->idsupplier], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda yakin akan menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idsupplier',
            'nama',
            'java',
            'cbr',
            'telepon1',
            'telepon2',
            'alamat',
            'keterangan',
        ],
    ]) ?>

</div>
