<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>สวัสดี</h1>

        <p class="lead">ชาวโรงพยาบาลสมเด็จพระยุพราชเดชอุดม</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>สลิปเงินเดือน/ลูกจ้าง/พนักงาน/OT</h2>
                <p><?= Html::a('เงินเดือน &raquo;',['/detail-income/index'],['class'=>'btn btn-default'])?></p>
            </div>
            <div class="col-lg-6">
                <h2>สลิปเงินเดือนข้าราชการและค่าจ้างลูกจ้างประจำ</h2>
                <p><?= Html::a('เงินเดือน &raquo;',['/government-salary'],['class'=>'btn btn-default'])?></p>
            </div>            
        </div>

    </div>
</div>
