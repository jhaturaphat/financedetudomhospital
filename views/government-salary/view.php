<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GovernmentSalary */

$this->title = $model->id_gs;
$this->params['breadcrumbs'][] = ['label' => 'Government Salaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="government-salary-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_gs], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_gs], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_gs',
            'cid_gs',
            'name_gs',
            'institute_gs',
            'institute2_gs',
            'province_gs',
            'namebank_gs',
            'numberbank_gs',
            'position_numbe_gs',
            'dr_1',
            'dr_2',
            'dr_3',
            'dr_4',
            'dr_5',
            'dr_6',
            'dr_7',
            'dr_8',
            'dr_9',
            'dr_10',
            'sum_dr',
            'cr_1',
            'cr_2',
            'cr_3',
            'cr_4',
            'cr_5',
            'cr_6',
            'cr_7',
            'cr_8',
            'cr_9',
            'cr_10',
            'sum_cr',
            'net_salary',
            'date_gs',
            'month_gs',
            'id_input',
            'year_budget',
        ],
    ]) ?>

</div>
