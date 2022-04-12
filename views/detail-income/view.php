<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailIncome */

$this->title = $model->id_income;
$this->params['breadcrumbs'][] = ['label' => 'รายละเอียดเงินเดือน', 'url' => ['index'], 'class' => ['hidden-print'],];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detail-income"> 
    <div class="detail-income-view"> 
    <h1 class="hidden-print"><?= Html::encode($this->title) ?></h1>
    <div class="hidden-print">
        <input id="zero" type="checkbox" checked>  <label class="text-primary" for="zero">ซ่อนรายการที่เป็น .00</label>
    </div>
    <?php
    if ($model->id_slip == '01'|| $model->id_slip == '02' || $model->id_slip == '03' || $model->id_slip == '04') { //เงินเดือน
        ?>
        <div class="text-center">
            <h4>รายการเงินเดือน</h4>
        </div>
        <div class="text-center">
            <h4>โรงพยาบาลสมเด็จพระยุพราชเดชอุดม</h4>
        </div>
        <div class="text-center">
            <h4>ประจำเดือน <?= $model->month_income ?></h4>
        </div>
        <div class="text-center" style="font-size: 18px; margin: 25px 0 8px 0">
            ชื่อ  <?= $model->name_account_user ?>
        </div>
        <?php
    }
    ?>

    <?php
    if ($model->id_slip == '05'|| $model->id_slip == '06' || $model->id_slip == '07' ) { //โอที
        ?>
        <div class="text-center">
            <h4>รายการจ่ายเงินค่าปฎิบัติงานนอกเวลาราชการ</h4>
        </div>
        <div class="text-center">
            <h4>และวันหยุดราชการ(โอที)เบี้ยเลี้ยง</h4>
        </div>
        <div class="text-center">
            <h4>โรงพยาบาลสมเด็จพระยุพราชเดชอุดม</h4>
        </div>
        <div class="text-center">
            <h4>ประจำเดือน <?= $model->month_income ?> </h4>            
        </div>
        <div class="text-center">            
            <h4>(จ่ายเดือน <?= $model->pay_income ?> )</h4>
        </div>
        <div class="text-center" style="font-size: 18px; margin: 25px 0 8px 0">
            ชื่อ  <?= $model->name_account_user ?>
        </div>
        <?php
    }

    $dr8_dr8Note = $model->getAttributeLabel('dr_8') . ' ' . $model->dr_8note
    ?>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'month_income',
            'pay_income',
            //'id_income',
            //'number_income',
            //'cid',
            //'number_account',
            //'name_account_user',
            //'type_income',
            'dr_1',
            'dr_2',
            'dr_2note',
            'dr_3',
            'dr_12',
            'dr_4',
            'dr_5',
            'dr_6',
            'dr_7',
            //'dr_8',
            //'dr_8note',
            [
                'format' => 'html',
                'label' => $dr8_dr8Note,
                'value' => $model->dr_8 
            ],
            'dr_9',
            'dr_10',
            'dr_10note',
            'dr_11',
            'dr_11note',
            'dr_13',
            'dr_14',
            'dr_15',            
            'cr_1',
            'sum_dr',
            'cr_2',
            'cr_3',
            'cr_4',
            'cr_5',
            'cr_6',
            'cr_7',
            'cr_8', 	//ฌกส
			'cr_24',    //กยศ./กรอ.
			'cr_23', 	//เอไอเอ
            'cr_25',  
            'cr_9',
            'cr_10',
            'cr_11',
            'cr_11note',
            'cr_12',
            'cr_13',
            'cr_14',
            'cr_15',
            'cr_16',
            'cr_17',
            'cr_18',
            'cr_19',
            'cr_20',
            'cr_21',
            'cr_22',  
            //'sum_cr',
            [
                'attribute' => 'sum_cr',
                'format' => 'html',
                'value' => function ($model) {
                    return "<i style=color:#FF0000>" . $model->sum_cr . "</i>";
                }
            ],
            //'total_income',
            [
                'attribute' => 'total_income',
                'format' => 'html',
                'value' => function ($model) {
                    return "<b style=color:#00a65a>" . $model->total_income . "</b>";
                }
            ],
            'date_income',
            //'type_income',
            'note_income',
            //'id_input',
            'year_budget',
            [
                'attribute' => 'id_slip',
                'format' => 'html',
                'value' => function ($model) {
                    $list = ['01' => 'สลิปเงินเดือนพนักงานราชการ', '02' => 'สลิปเงินเดือนพนักงานกระทรวงสาธารณสุข', '03' => 'สลิปเงินเดือนลูกจ้างชั่วคราวเงินบำรุง', '04' => 'สลิปเงินเดือนลูกจ้างรายวันเงินบำรุง', '05' => 'สลิปโอทีข้าราชการ', '06' => 'สลิปโอทีลูกจ้างประจำ', '07' => 'สลิปโอทีลูกจ้างชั่วคราว'];
                    foreach ($list as $key => $val) {
                        if ($key == $model->id_slip) {
                            return $list[$key];
                        }
                    }
                }
                    ],
                //'view_state',
                ],
            ])
            ?>

            <div class="text-center" style="margin-top: 20px;">ลงชื่อ<i class="dot">..............................................</i>ผู้มีหน้าที่จ่ายเงิน</div>
            <div class="text-center" style="margin:12px 0 0 -50px;">(<i class="dot">.......................................................</i>)</div>
            <div class="text-right hidden-print" style="margin-top: 50px">
                <button class="btn btn-info btn-block" onclick="myFunction()"><i class="glyphicon glyphicon-print"></i> พิมพ์</button>
            </div>

        </div>
    </div>

        <?php
        $script = <<< JS
        jQuery( document ).ready(function() {  
            hidezero();
            \$( "input[type=checkbox]").on("change",function(){
                var state = \$(this).prop('checked');
                console.log(\$(this).prop('checked'));
                hidezero(state);
            });
        });
        
        function hidezero(state = true){
            \$("table tbody tr").each(function () {
                    var xx = \$(this).find("td").text();
                    var x = \$(this).find("td").text();
                    if(xx === ".00" || x === "0" || x === ""){
                        if(state){
                            \$(this).hide();
                        }else{
                            \$(this).removeAttr('style');
                        }
                    }
            });
        }
        function myFunction() {
            window.print();
        }
JS;
        $this->registerCss("
        .table-bordered > tbody > tr > th,
        .table-bordered > thead > tr > td,
        .table-bordered > tbody > tr > td {
        border: 1px solid #afabab;
        }        
        .detail-income{
            width: 520px !important;
            margin: 0 auto !important;
            padding: 28px !important;
            background-image: url(images/bg/line07.jpg) !important;
            background-repeat: repeat-y !important;
            background-size: 520px 28px !important;
        }        
        .detail-income-view{
            width: 455px !important;
            margin: 0 auto !important;
            padding: 0px !important;
            /*border: 1px solid red;*/
        }
        .dot{
            color: #5d5b5b;
        }
                
        @media print{
            .breadcrumb{
                display: none !important; 
            }
            }
        }
        ");
        $this->registerJs($script, yii\web\View::POS_END);

        