<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\DetailIncome;
use app\models\AccountUser;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $cid;
    public $number_account;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [            
            [['cid', 'number_account'], 'required'],            
            ['rememberMe', 'boolean'],            
            [['cid'],'validateIdCard'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validateIdCard()
    {
        $idcard = str_replace('-', '', $this->cid);
        if(($idcard == '1111111111119') || $idcard == '1999999999999'){
            $this->addError('cid','บัตรประชาชนรูปแบบไม่ถูกต้อง');
            return null;
        }
        $id = str_split(str_replace('-', '', $this->cid));
        $digi = 13;
        $sum = 0;
        
        foreach($id as $key){            
            $digi > 1 ? $sum += intval($key) * $digi : null;
            $digi--;
        }
        $n13 = (11 - ($sum % 11)) %10;
        if($n13 != $id[12]){            
            $this->addError('cid','บัตรประชาชนรูปแบบไม่ถูกต้อง');
        } 
    }
    public function attributeLabels()
    {
        return [
            'cid' => 'รหัสบัตรประชาชน',
            'number_account' => 'เลขบัญชี ธ.'
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }
    
    
    public function loginSaraly($params){
        if ($this->validate()) {
           $cid = str_replace('-', '', $params['LoginForm']['cid']);
            $_model = \app\models\DetailIncome::find()
                            ->where(['cid' => $cid])
                            ->andWhere(['number_account' => $params['LoginForm']['number_account']])->all();

            $accountUser = AccountUser::getUser($cid);
            if($_model){   
                $_SESSION['cid'] = $cid;
                $_SESSION['fname'] = $accountUser->name_account_user;
                return $_model;
            }else{
                // ตรวจสอบเขื่อนไขที 2 ถ้าหาไม่เจอบนเงื่อนไขแรก 
                $_model = \app\models\GovernmentSalary::find()
                            ->where(['cid_gs' => $cid])
                            ->andWhere(['numberbank_gs' => $params['LoginForm']['number_account']])->all();
                if($_model){  
                    $accountUser = AccountUser::getUser($cid);           
                    $_SESSION['cid'] = $cid;
                    $_SESSION['fname'] = $accountUser->name_account_user;
                    return $_model;
                }else{                    
                    return false;
                }
            }
        }        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
