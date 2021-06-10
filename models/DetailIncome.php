<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_income".
 *
 * @property int $id_income
 * @property int $number_income
 * @property string $cid
 * @property string $number_account
 * @property string $name_account_user
 * @property string $dr_1
 * @property string $dr_2
 * @property string $dr_2note
 * @property string $dr_3
 * @property string $dr_4
 * @property string $dr_5
 * @property string $dr_6
 * @property string $dr_7
 * @property string $dr_8
 * @property string $dr_8note
 * @property string $dr_9
 * @property string $dr_10
 * @property string $dr_10note
 * @property string $dr_11
 * @property string $dr_11note
 * @property string $dr_12
 * @property string $dr_13
 * @property string $dr_14
 * @property string $sum_dr
 * @property string $cr_1
 * @property string $cr_2
 * @property string $cr_3
 * @property string $cr_4
 * @property string $cr_5
 * @property string $cr_6
 * @property string $cr_7
 * @property string $cr_8
 * @property string $cr_9
 * @property string $cr_10
 * @property string $cr_11
 * @property string $cr_11note
 * @property string $cr_12
 * @property string $cr_13
 * @property string $cr_14
 * @property string $cr_15
 * @property string $cr_16
 * @property string $cr_17
 * @property string $cr_18
 * @property string $cr_19
 * @property string $cr_20
 * @property string $cr_21
 * @property string $cr_22
 * @property string $cr_23
 * @property string $cr_24
 * @property string $sum_cr
 * @property string $total_income
 * @property string $date_income
 * @property string $month_income
 * @property string $type_income
 * @property string $note_income
 * @property string $pay_income
 * @property string $id_input
 * @property string $year_budget
 * @property string $id_slip
 * @property string $view_state
 */
class DetailIncome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_income';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_income'], 'integer'],
            [['date_income'], 'safe'],
            [['view_state'], 'string'],
            [['cid', 'number_account', 'dr_1', 'dr_2', 'dr_3', 'dr_4', 'dr_5', 'dr_6', 'dr_7', 'dr_8', 'dr_9', 'dr_10', 'dr_11', 'dr_11', 'dr_13', 'dr_14', 'sum_dr', 'cr_1', 'cr_2', 'cr_3', 'cr_4', 'cr_5', 'cr_6', 'cr_7', 'cr_8', 'cr_9', 'cr_10', 'cr_11', 'cr_12', 'cr_13', 'cr_14', 'cr_15', 'cr_16', 'cr_17', 'cr_18', 'cr_19', 'cr_20', 'cr_21', 'cr_22', 'cr_23', 'sum_cr', 'total_income'], 'string', 'max' => 20],
            [['name_account_user'], 'string', 'max' => 150],
            [['dr_2note', 'dr_8note', 'dr_10note', 'dr_11note', 'cr_11note', 'month_income', 'note_income', 'id_input'], 'string', 'max' => 50],
            [['type_income', 'year_budget'], 'string', 'max' => 10],
            [['pay_income'], 'string', 'max' => 100],
            [['id_slip'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_income' => 'รหัสรายการ',
            'number_income' => 'ลำดับที่',
            'cid' => 'เลขบัตรประชาชน',
            'number_account' => 'เลขที่บัญชี',
            'name_account_user' => 'ชื่อ-สกุล',
            'dr_1' => 'ค่าจ้าง/เงินเดือน',
            'dr_2' => 'เงินเดือนตกเบิก',
            'dr_2note' => 'เงินเดือนตกเบิกรายละเอียด',
            'dr_3' => 'โอที',
            'dr_4' => 'เงินเวร',
            'dr_5' => 'ให้คำปรึกษา',
            'dr_6' => 'ไม่เปิดเวชฯ',
            'dr_7' => 'ปริมาณงาน',
            'dr_8' => 'เบี้ยเลี้ยง(ฉ.11)',
            'dr_8note' => 'รายละเอียดเบี้ยเลี้ยง(ฉ.11)',
            'dr_9' => 'เบี้ยเลี้ยงเดินทางไปราชการ',
            'dr_10' => 'P4P',
            'dr_10note' => 'รายละเอียดP4P',
            'dr_11' => 'พตส.',
            'dr_11note' => 'รายละเอียด พตส.',
            'dr_12' => 'โอทีค่าตอบแทน SMC.',
            'dr_13' => 'ค่าตอบแทนเวชศาสตร์ครอบครัว',
            'dr_14' => 'ค่าตอบแทน โควิด-19',
            'sum_dr' => 'รวมรับ',
            'cr_1' => 'หัก ลากิจ',
            'cr_2' => 'ประกันสังคม',
            'cr_3' => 'ภาษีหัก ณ ที่จ่าย',
            'cr_4' => 'สหกรณ์ออมทรัพย์',
            'cr_5' => 'ธ.กรุงไทย',
            'cr_6' => 'ธ.ออมสิน',
            'cr_7' => 'ธกส.',
            'cr_8' => 'ฌกส.',
            'cr_9' => 'หักเงินเข้ากลุ่มงาน(เดือน/ปี)',
            'cr_10' => 'ร้านค้าสวัสดิการ',
            'cr_11' => 'ค่าไฟฟ้า/ค่าน้ำประปา',
            'cr_11note' => 'รายละเอียด ค่าไฟฟ้า/ค่าน้ำประปา',
            'cr_12' => 'บริหาร',
            'cr_13' => 'กองทุน 2%',
            'cr_14' => 'กลุ่มการ',
            'cr_15' => 'สก.เจ้าหน้าที่/ลูกจ้าง',
            'cr_16' => 'แฟลต',
            'cr_17' => 'ทันตกรรม',
            'cr_18' => 'ชันสูตร',
            'cr_19' => 'ค่าแล็ป',
            'cr_20' => 'ค่าเคเบิ้ล UBC',
            'cr_21' => 'อื่นๆ',
            'cr_22' => 'ค่าธรรมเนียมธนาคาร',
			'cr_23' => 'เอไอเอ',
			'cr_24' => 'กยศ./กรอ.',
            'sum_cr' => 'รวมหัก',
            'total_income' => 'คงเหลือสุทธิ',
            'date_income' => 'วันที่จ่ายเงิน',
            'month_income' => 'ประจำเดือน',
            'type_income' => 'เงินเดือน',
            'note_income' => 'หมายเหตุ',
            'pay_income' => 'จ่ายเดือน',
            'id_input' => 'รหัสการนำเข้า',
            'year_budget' => 'ปีงบประมาณ',
            'id_slip' => 'รหัสประเภทสลิป',
            'view_state' => 'สถานะการเข้าชม',
        ];
    }
}
