<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'warna') ?>

    <?= $form->field($model, 'size') ?>

    <?= $form->field($model, 'stok') ?>

    <?php // echo $form->field($model, 'hpp') ?>

    <?php // echo $form->field($model, 'hj') ?>

    <?php // echo $form->field($model, 'toko') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'idSupplier') ?>

    <?php // echo $form->field($model, 'jual') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
