<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "government_salary".
 *
 * @property int $id_gs รหัสรายการ
 * @property string $cid_gs เลขบัตรประชาชน
 * @property string $name_gs ชื่อ-นามสกุล
 * @property string $institute_gs หน่วยงาน
 * @property string $institute2_gs สำนักงานปลัดกระทรวงสาธารณสุข
 * @property string $province_gs จังหวัด
 * @property string $namebank_gs โอนเงินเข้าธนาคาร
 * @property string $numberbank_gs เลขบัญชี
 * @property string $position_numbe_gs เลขตำแหน่ง
 * @property string $dr_1 เงินเดือน
 * @property string $dr_2 เงินเดือน (ตกเบิก)
 * @property string $dr_3 เงินปจต. / วิชาชีพ / วิทยฐานะ
 * @property string $dr_4 เงินปจต. / วิชาชีพ / วิทยฐานะ (ตกเบิก)
 * @property string $dr_5 ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7
 * @property string $dr_6 ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7(ตกเบิก) 
 * @property string $dr_7 เงินช่วยเหลือบุตร
 * @property string $dr_8 เงิน พ.ส.ร./ พ.ต.ก.
 * @property string $dr_9 เงินตอบแทนพิเศษ
 * @property string $dr_10 อื่น ๆ
 * @property string $sum_dr รวมรับ
 * @property string $cr_1 ภาษี
 * @property string $cr_2 ค่าทุนเรือนหุ้น - เงินกู้สหกรณ์
 * @property string $cr_3 กบข./กสจ. (รายเดือน)
 * @property string $cr_4 เงินกู้เพื่อที่อยู่อาศัย
 * @property string $cr_5 เงินกู้เพื่อการศึกษา
 * @property string $cr_6 เงินกู้ยานพาหนะ
 * @property string $cr_7 ค่าฌาปนกิจ / เงินช่วยเหลืองานศพ
 * @property string $cr_8 เงินบำรุง / เงินทุน /กู้สวัสดิการ / สงเคราะห์
 * @property string $cr_9 เงินบำรุงเรียกคืน / ชดใช้ทางแพ่ง / อายัดเงิน
 * @property string $cr_10 อื่น ๆ
 * @property string $sum_cr รวมจ่าย
 * @property string $net_salary รับสุทธิ
 * @property string $date_gs วันที่จ่ายเงิน
 * @property string $month_gs ประจำเดือน
 * @property string $id_input รหัสการนำเข้า
 * @property string $year_budget ปีงบประมาณ
 */
class GovernmentSalary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'government_salary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_gs'], 'safe'],
            [['cid_gs', 'numberbank_gs', 'dr_1', 'dr_2', 'dr_3', 'dr_4', 'dr_5', 'dr_6', 'dr_7', 'dr_8', 'dr_9', 'dr_10', 'sum_dr', 'cr_1', 'cr_2', 'cr_3', 'cr_4', 'cr_5', 'cr_6', 'cr_7', 'cr_8', 'cr_9', 'cr_10', 'sum_cr', 'net_salary', 'month_gs'], 'string', 'max' => 15],
            [['name_gs', 'institute_gs', 'institute2_gs'], 'string', 'max' => 150],
            [['province_gs'], 'string', 'max' => 20],
            [['namebank_gs', 'id_input'], 'string', 'max' => 50],
            [['position_numbe_gs'], 'string', 'max' => 10],
            [['year_budget'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gs' => 'รหัสรายการ',
            'cid_gs' => 'เลขบัตรประชาชน',
            'name_gs' => 'ชื่อ-นามสกุล',
            'institute_gs' => 'หน่วยงาน',
            'institute2_gs' => 'สำนักงานปลัดกระทรวงสาธารณสุข',
            'province_gs' => 'จังหวัด',
            'namebank_gs' => 'โอนเงินเข้าธนาคาร',
            'numberbank_gs' => 'เลขบัญชี',
            'position_numbe_gs' => 'เลขตำแหน่ง',
            'dr_1' => 'เงินเดือน',
            'dr_2' => 'เงินเดือน (ตกเบิก)',
            'dr_3' => 'เงินปจต. / วิชาชีพ / วิทยฐานะ',
            'dr_4' => 'เงินปจต. / วิชาชีพ / วิทยฐานะ (ตกเบิก)',
            'dr_5' => 'ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7',
            'dr_6' => 'ต.ข.ท.ปจต./ ต.ข.8-8ว./ ต.ด.ข.1-7(ตกเบิก) ',
            'dr_7' => 'เงินช่วยเหลือบุตร',
            'dr_8' => 'เงิน พ.ส.ร./ พ.ต.ก.',
            'dr_9' => 'เงินตอบแทนพิเศษ',
            'dr_10' => 'อื่น ๆ',
            'sum_dr' => 'รวมรับ',
            'cr_1' => 'ภาษี',
            'cr_2' => 'ค่าทุนเรือนหุ้น - เงินกู้สหกรณ์',
            'cr_3' => 'กบข./กสจ. (รายเดือน)',
            'cr_4' => 'เงินกู้เพื่อที่อยู่อาศัย',
            'cr_5' => 'เงินกู้เพื่อการศึกษา',
            'cr_6' => 'เงินกู้ยานพาหนะ',
            'cr_7' => 'ค่าฌาปนกิจ / เงินช่วยเหลืองานศพ',
            'cr_8' => 'เงินบำรุง / เงินทุน /กู้สวัสดิการ / สงเคราะห์',
            'cr_9' => 'เงินบำรุงเรียกคืน / ชดใช้ทางแพ่ง / อายัดเงิน',
            'cr_10' => 'อื่น ๆ',
            'sum_cr' => 'รวมจ่าย',
            'net_salary' => 'รับสุทธิ',
            'date_gs' => 'วันที่จ่ายเงิน',
            'month_gs' => 'ประจำเดือน',
            'id_input' => 'รหัสการนำเข้า',
            'year_budget' => 'ปีงบประมาณ',
        ];
    }
}
