<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account_user".
 *
 * @property int $id_account_user
 * @property string|null $number_account
 * @property string|null $cid
 * @property string|null $name_title
 * @property string|null $name_account_user
 * @property string|null $num_position
 * @property string|null $position
 * @property string|null $position2
 * @property string|null $level
 * @property string|null $id_group_position
 * @property string|null $id_department
 * @property string|null $name_f
 * @property string|null $name_l
 * @property string|null $username
 * @property string|null $password
 * @property string|null $status_au
 * @property string|null $work_group
 * @property string|null $id_cc
 * @property string|null $id_gg
 * @property string|null $namebank_gs
 * @property string|null $numberbank_gs
 */
class AccountUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_account', 'cid', 'num_position', 'id_department'], 'string', 'max' => 20],
            [['name_title', 'numberbank_gs'], 'string', 'max' => 15],
            [['name_account_user', 'level', 'name_f', 'name_l', 'id_gg'], 'string', 'max' => 50],
            [['position', 'position2', 'namebank_gs'], 'string', 'max' => 100],
            [['id_group_position', 'username', 'password', 'id_cc'], 'string', 'max' => 10],
            [['status_au'], 'string', 'max' => 5],
            [['work_group'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_account_user' => 'Id Account User',
            'number_account' => 'Number Account',
            'cid' => 'Cid',
            'name_title' => 'Name Title',
            'name_account_user' => 'Name Account User',
            'num_position' => 'Num Position',
            'position' => 'Position',
            'position2' => 'Position2',
            'level' => 'Level',
            'id_group_position' => 'Id Group Position',
            'id_department' => 'Id Department',
            'name_f' => 'Name F',
            'name_l' => 'Name L',
            'username' => 'Username',
            'password' => 'Password',
            'status_au' => 'Status Au',
            'work_group' => 'Work Group',
            'id_cc' => 'Id Cc',
            'id_gg' => 'Id Gg',
            'namebank_gs' => 'Namebank Gs',
            'numberbank_gs' => 'Numberbank Gs',
        ];
    }

    public static function getUser($cid = null){
        return AccountUser::findOne(['cid'=>$cid]); 
    }
}
