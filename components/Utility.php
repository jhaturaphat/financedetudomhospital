<?php
namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Utility extends Component {
    public function convertToXx($str){
        // xxx-x-xx485-7
        $xx = substr_replace($str,'XXX-X-XX',0,6);
        $end = '-'.substr($str,strlen($str)-1,strlen($str));
        return substr_replace($xx,$end,strlen($xx)-1,strlen($xx));
    }
    public function dateOutSlip($str = null){
        $arr = explode('-',$str);
        $arr[0] = $arr[0]+543;
        return implode('/',array_reverse($arr));
    }
}