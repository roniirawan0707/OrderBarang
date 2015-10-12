<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = 'Import Data Penjualan Barang';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="box box-success">
	    <div class="panel panel-content">
	        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
	        <div class="box-body">
	            <div class="form-group">
	                <p>Silahkan pilih file <label>Excell</label> data penjualan barang yang terdiri dari kolom <label>[ <code>KODE</code>, <code>WARNA</code>, <code>UKURAN</code>, <code>PENJUALAN</code> ]</label>.<br>
	                	Atau file tersebut dapat langsung didapat dari hasil <i>eksport</i> pada program di masing - masing toko.
	                </p>
	                <?= $form->field($model, 'file')->fileInput(); ?>
	            </div>
	        </div>	        
	    </div>
	    <div class="box-footer">
	        <?= Html::submitButton('Import Data Penjualan', ['class' => 'btn btn-success']); ?>
	    </div>
	    <?php ActiveForm::end(); ?>
	</div>

</div>