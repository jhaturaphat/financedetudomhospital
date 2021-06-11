<?php
    // https://programmerthailand.com/tutorial/post/view/82/extension-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C-pdf-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-mpdf

?>

<div class="slip-container">
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            ใบรับรองการจ่ายเงินเดือนและเงินอื่น<br>
            ประจำเดือน <i><?= $model->month_gs ?></i>
        </div>
        <!--  -->
        <div class="col-md-2 text-right" style="padding:0">
            ชื่อ-นามสกุล
        </div>
        <div class="col-md-10">            
            <?= $model->name_gs ?>
        </div>
        <!--  -->
        <div class="col-md-2 text-right" style="padding:0">
            หน่วยงาน
        </div>
        <div class="col-md-10">            
            <?= $model->institute_gs ?>
        </div>
        <!--  -->
        <div class="col-md-2 text-right" style="padding:0">
            
        </div>
        <div class="col-md-10">            
            <?= $model->institute2_gs ?>
        </div>
        <!--  -->
        <div class="col-md-2 text-right" style="padding:0">
            จังหวัด
        </div>
        <div class="col-md-10">            
            <?= $model->province_gs ?>
        </div>
        <!--  -->
        <div class="col-md-2 text-right" style="padding:0">
            โอนเงินเข้า
        </div>
        <div class="col-md-10">            
            <?= $model->namebank_gs ?>
        </div>
        <!--  -->
        <div class="col-md-2 text-right" style="padding:0">
            เลขบัญชี
        </div>
        <div class="col-md-10">            
            <?= $model->numberbank_gs ?>
            <i>เลขตำแหน่ง <?= $model->position_numbe_gs ?></i>
        </div>
        <!--  -->
    </div>
    <table>        
        <tr>
            <td class="text-center" width="10%">ลำดับ</td>
            <td class="text-center" width="70%">รายการ</td>
            <td class="text-center" width="20%">จำนวนเงิน(บาท)</td>
        </tr>
        <tr>
            <td class="text-center" width="10%"></td>
            <td class="text-left" width="70%">รายรับ</td>
            <td class="text-center" width="20%"></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">1</td>
            <td class="text-left" width="70%">เงินเดือน</td>
            <td class="text-center" width="20%"><?= $model->dr_1 ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">2</td>
            <td class="text-left" width="70%">เงินเดือน (ตกเบิก)</td>
            <td class="text-center" width="20%"><?= ($model->dr_2 == ".00"? "-":$model->dr_2) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">3</td>
            <td class="text-left" width="70%">เงินปจต. / วิชาชีพ / วิทยฐานะ</td>
            <td class="text-center" width="20%"><?= ($model->dr_3 == ".00"? "-":$model->dr_3) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">4</td>
            <td class="text-left" width="70%">เงินปจต. / วิชาชีพ / วิทยฐานะ (ตกเบิก)</td>
            <td class="text-center" width="20%"><?= ($model->dr_4 == ".00"? "-":$model->dr_4)?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">5</td>
            <td class="text-left" width="70%">ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7</td>
            <td class="text-center" width="20%"><?= ($model->dr_5 == ".00"? "-":$model->dr_5) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">6</td>
            <td class="text-left" width="70%">ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7(ตกเบิก)</td>
            <td class="text-center" width="20%"><?= ($model->dr_6 == ".00"? "-":$model->dr_6) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">7</td>
            <td class="text-left" width="70%">เงินช่วยเหลือบุตร</td>
            <td class="text-center" width="20%"><?= ($model->dr_7 == ".00"? "-":$model->dr_7) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">8</td>
            <td class="text-left" width="70%">เงิน พ.ส.ร./ พ.ต.ก.</td>
            <td class="text-center" width="20%"><?= ($model->dr_8 == ".00"? "-":$model->dr_8) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">9</td>
            <td class="text-left" width="70%">เงินตอบแทนพิเศษ</td>
            <td class="text-center" width="20%"><?= ($model->dr_9 == ".00"? "-":$model->dr_9) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%">10</td>
            <td class="text-left" width="70%">อื่น ๆ</td>
            <td class="text-center" width="20%"><?= ($model->dr_10 == ".00"? "-":$model->dr_10) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%"></td>
            <td class="text-right" width="70%">รวม</td>
            <td class="text-center b-all" width="20%"><?= $model->sum_dr ?></td>
        </tr>
    </table>
</div>



<?php
$this->registerCssFile("@web/css/slip.css");
