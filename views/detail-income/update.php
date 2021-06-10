<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailIncome */

$this->title = 'Update Detail Income: ' . $model->id_income;
$this->params['breadcrumbs'][] = ['label' => 'Detail Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_income, 'url' => ['view', 'id' => $model->id_income]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-income-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
