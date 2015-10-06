<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use app\assets\AppAsset;
$this->title = 'BASAMA - Order Barang';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>ORDER BARANG</h1>

        <p class="lead">Perangkat Lunak Order Barang dengan Metode <code>ROP</code> dan <code>EOQ</code></p>

        <p>
        <?php        
            if (Yii::$app->user->isGuest) {
                echo Html::a('<span class="glyphicon glyphicon-lock"></span> Masuk',
                    ['/site/login'],
                    ['class'=>'btn btn-success']
                );
            }        
        ?>
        </p>
    </div>

    <div class="body-content">
    </div>
</div>