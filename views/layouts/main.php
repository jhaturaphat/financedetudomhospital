<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'เงินเดือน/ลูกจ้าง/พนักงาน/OT', 'url' => ['/detail-income/index'],'visible'=>isset($_SESSION['cid'])],
            ['label' => 'สลิปเงินเดือนข้าราชการและค่าจ้างลูกจ้างประจำ', 'url' => ['/government-salary'] ,'visible'=>isset($_SESSION['cid'])],            
            !isset($_SESSION['cid']) ? (
                ['label' => 'เข้าใช้งาน', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'ออก (' . $_SESSION['fname'] . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    
    <div class="container ">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>        
        <?= $content ?>
    </div>
</div>

<footer class="footer hidden-print">
    <div class="container">
        <p class="pull-left">&copy; โรงพยาบาลสมเด็จพระยุพราชเดชอุดม <?= date('Y') ?></p>

        <p class="pull-right">Power By งานการเงิน </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
