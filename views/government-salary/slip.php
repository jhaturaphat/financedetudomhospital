<?php
    // https://programmerthailand.com/tutorial/post/view/82/extension-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B9%81%E0%B8%9A%E0%B8%9A%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C-pdf-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-mpdf

?>

<div class="slip-container">    
    <table id="t-title">
        <caption class="hidden-print">เลขที่ <?= $model->id_gs ?></caption>
        <tr>
            <td class="b-none" width="25%"></td>
            <td class="b-none f-bold" width="75%">ใบรับรองการจ่ายเงินเดือนและเงินอื่น</td>
        </tr>
        <tr>
            <td class="b-none" width="25%"></td>
            <td class="b-none" width="75%">ประจำเดือน <i><?= $model->month_gs ?></i></td>
        </tr>
        <tr>
            <td class="b-none" width="25%">ชื่อ-นามสกุล</td>
            <td class="b-none" width="75%"><?= $model->name_gs ?></td>
        </tr>
        <tr>
            <td class="b-none" width="25%">หน่วยงาน</td>
            <td class="b-none" width="75%"><?= $model->institute_gs ?></td>
        </tr>
        <tr>
            <td class="b-none" width="25%"></td>
            <td class="b-none" width="75%"><?= $model->institute2_gs ?></td>
        </tr>
        <tr>
            <td class="b-none" width="25%">จังหวัด</td>
            <td class="b-none" width="75%"><?= $model->province_gs ?></td>
        </tr>
        <tr>
            <td class="b-none" width="25%">โอนเงินเข้า</td>
            <td class="b-none" width="75%"><?= $model->namebank_gs ?></td>
        </tr>
        <tr>
            <td class="b-none" width="25%">เลขบัญชี</td>
            <td class="b-none" width="100%" style="display:flex; justify-content:space-between">
            <i class=""><?= substr_replace($model->numberbank_gs,'XXXXXX',0,6) ?> </i>
            <i class="">เลขตำแหน่ง <?= $model->position_numbe_gs ?></i>
            </td>            
        </tr>
    </table>
    <table id="t-body">        
        <tr>
            <td class="text-center" width="10%" style="border:1px solid #474747;">ลำดับ</td>
            <td class="text-center" width="70%" style="border:1px solid #474747;">รายการ</td>
            <td class="text-center" width="20%" style="border:1px solid #474747;">จำนวนเงิน(บาท)</td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;"></td>
            <td class="text-left" width="70%">รายรับ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">1</td>
            <td class="text-left" width="70%">เงินเดือน</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= $model->dr_1 ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">2</td>
            <td class="text-left" width="70%">เงินเดือน (ตกเบิก)</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_2 == ".00"? "-":$model->dr_2) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">3</td>
            <td class="text-left" width="70%">เงินปจต. / วิชาชีพ / วิทยฐานะ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_3 == ".00"? "-":$model->dr_3) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">4</td>
            <td class="text-left" width="70%">เงินปจต. / วิชาชีพ / วิทยฐานะ (ตกเบิก)</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_4 == ".00"? "-":$model->dr_4)?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">5</td>
            <td class="text-left" width="70%">ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_5 == ".00"? "-":$model->dr_5) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">6</td>
            <td class="text-left" width="70%">ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7(ตกเบิก)</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_6 == ".00"? "-":$model->dr_6) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">7</td>
            <td class="text-left" width="70%">เงินช่วยเหลือบุตร</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_7 == ".00"? "-":$model->dr_7) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">8</td>
            <td class="text-left" width="70%">เงิน พ.ส.ร./ พ.ต.ก.</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_8 == ".00"? "-":$model->dr_8) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">9</td>
            <td class="text-left" width="70%">เงินตอบแทนพิเศษ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_9 == ".00"? "-":$model->dr_9) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">10</td>
            <td class="text-left" width="70%" >อื่น ๆ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->dr_10 == ".00"? "-":$model->dr_10) ?></td>
        </tr>
        <tr>
            <td class="text-center b-b" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;"></td>
            <td class="text-right b-b" width="70%" style="text-align:right">รวม</td>
            <td class="text-center b-all" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= $model->sum_dr ?></td>
        </tr>
        <!-- รายการหัก -->
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;"></td>
            <td class="text-left" width="70%">รายจ่าย</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">1</td>
            <td class="text-left" width="70%">ภาษี</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_1 == ".00"?"-":$model->cr_1) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">2</td>
            <td class="text-left" width="70%">ค่าทุนเรือนหุ้น - เงินกู้สหกรณ์</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_2 == ".00"?"-":$model->cr_2) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">3</td>
            <td class="text-left" width="70%">กบข./กสจ. (รายเดือน)</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_3 == ".00"?"-":$model->cr_3) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">4</td>
            <td class="text-left" width="70%">เงินกู้เพื่อที่อยู่อาศัย</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_4 == ".00"?"-":$model->cr_4) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">5</td>
            <td class="text-left" width="70%">เงินกู้เพื่อการศึกษา</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_5 == ".00"?"-":$model->cr_5) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">6</td>
            <td class="text-left" width="70%">เงินกู้ยานพาหนะ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_6 == ".00"?"-":$model->cr_6) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">7</td>
            <td class="text-left" width="70%">ค่าฌาปนกิจ / เงินช่วยเหลืองานศพ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_7 == ".00"?"-":$model->cr_7) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">8</td>
            <td class="text-left" width="70%">เงินบำรุง / เงินทุน /กู้สวัสดิการ / สงเคราะห์</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_8 == ".00"?"-":$model->cr_8) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">9</td>
            <td class="text-left" width="70%">เงินบำรุงเรียกคืน / ชดใช้ทางแพ่ง / อายัดเงิน</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_9 == ".00"?"-":$model->cr_9) ?></td>
        </tr>
        <tr>
            <td class="text-center" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;">10</td>
            <td class="text-left" width="70%">อื่น ๆ</td>
            <td class="text-center" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= ($model->cr_10 == ".00"?"-":$model->cr_10) ?></td>
        </tr>
        <tr>
            <td class="text-center b-b" width="10%" style="border-right:1px solid #474747; border-left:1px solid #474747;"></td>
            <td class="text-right b-b" width="70%">รวม</td>
            <td class="text-center b-all" width="20%" style="border-right:1px solid #474747; border-left:1px solid #474747;"><?= $model->sum_cr ?></td>
        </tr>
        <tr>
            <td class="text-center b-l-r-none" width="10%"></td>
            <td class="text-right b-l-r-none" width="70%" style="text-align:right">รับสุทธิ</td>
            <td class="text-center b-l b-r b-b" width="20%"><?= $model->net_salary ?></td>
        </tr>        
    </table>
    <br><br>
    <div class="text-center" id="signature">
        ลงชื่อ......................................................ผู้มีหน้าที่จ่ายเงิน<br>
        ....../....../...... <br>
        วัน เดือน ปี ที่ออกหนังสือรับรอง
    </div>
</div>



<?php
 $this->registerCssFile("@web/css/slip.css");
