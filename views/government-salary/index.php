<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GovernmentSalarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สลิปเงินเดือนข้าราชการและค่าจ้างลูกจ้างประจำ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="government-salary-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id_gs',
            //'cid_gs',
            'name_gs',
            //'institute_gs',
            //'institute2_gs',
            //'province_gs',
            //'namebank_gs',
            //'numberbank_gs',
            //'position_numbe_gs',
            //'dr_1',
            //'dr_2',
            //'dr_3',
            //'dr_4',
            //'dr_5',
            //'dr_6',
            //'dr_7',
            //'dr_8',
            //'dr_9',
            //'dr_10',
            'sum_dr',
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
            //'sum_cr',
            'net_salary',
            'date_gs',
            //'month_gs',
            //'id_input',
            //'year_budget',

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}',
                'buttons'=>[
                    'view' => function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>',$url);
                    },
                    'print' => function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-print"></i>',['/government-salary/print','id'=>$model->id_gs], ['data-pjax' => 0, 'target'=>'_blank']);
                    }
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
