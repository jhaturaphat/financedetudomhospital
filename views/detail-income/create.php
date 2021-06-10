<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailIncome */

$this->title = 'Create Detail Income';
$this->params['breadcrumbs'][] = ['label' => 'Detail Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-income-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
