<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?php echo Yii::getAlias('@web'); ?>/favicon.ico" type="image/x-icon" />
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'BASAMA',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [            
            Yii::$app->user->isGuest ? '' :
            [
                'label' => 'Master',
                'items' => [                                        
                    ['label' => 'Supplier', 'url' => ['/supplier/index']],                    
                    ['label' => 'Barang', 'url' => ['/supplier/index']],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Migrasi Data</li>',
                    ['label' => 'Import Data Stok', 'url' => ['/supplier/index']],
                    ['label' => 'Import Data Penjualan', 'url' => ['/supplier/index']],                    
                ],
            ],            
            Yii::$app->user->isGuest ? '' : 
            [
                'label' => 'Logout ('. Yii::$app->user->identity->username .')', 
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ],            
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; BASAMA <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>