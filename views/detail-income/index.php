<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailIncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เงินเดือน / ค่าตอบแทนOT';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-income-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'date_income',
            //'id_income',
            //'number_income',
            //'cid',
            //'number_account',
            'name_account_user',
            //'dr_1',
            [
                'attribute' => 'id_slip',
                'label' => 'ชนิดของเงิน',
                'value' => 'dr_1',
                'filter' => []//["01"=>"เงินเดือน", "02"=>"โอที"]
            ],            
            //'dr_2',
            //'dr_2note',
            //'dr_3',
            //'dr_4',
            //'dr_5',
            //'dr_6',
            //'dr_7',
            //'dr_8',
            //'dr_8note',
            //'dr_9',
            //'dr_10',
            //'dr_10note',
            //'dr_11',
            //'dr_11note',
            //'sum_dr',
            //'cr_1',
            //'cr_2',
            //'cr_3',
            //'cr_4',
            //'cr_5',
            //'cr_6',
            //'cr_7',
            //'cr_8',
            //'cr_9',
            //'cr_10',
            //'cr_11',
            //'cr_11note',
            //'cr_12',
            //'cr_13',
            //'cr_14',
            //'cr_15',
            //'cr_16',
            //'cr_17',
            //'cr_18',
            //'cr_19',
            //'cr_20',
            //'cr_21',
            //'cr_22',
            //'sum_cr',
            'total_income',            
            'month_income',
            
            //'type_income',
            //'note_income',
            //'pay_income',
            //'id_input',
            //'year_budget',
            //'id_slip',
            //'view_state',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>

</div>
