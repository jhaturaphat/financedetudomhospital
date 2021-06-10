<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'เข้าใช้งาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
        <div class="m-container">
            <h1><?= Html::encode($this->title) ?></h1>
            <p style="color: red">*ท่านจำเป็นต้องเข้าสู่ระบบก่อนใช้งาน:</p>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'enableAjaxValidation' => true  
                ]); ?>

            <?=
            $form->field($model, 'cid', [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => "{input}<span class='glyphicon glyphicon-credit-card form-control-feedback'></span>"
            ])->widget(MaskedInput::className(), [
                'mask' => '9-9999-99999-99-9',
            ])
            ?>

            <?=
            $form->field($model, 'number_account', [
                'options' => ['class' => 'form-group has-feedback'],
                'inputTemplate' => "{input}<span class='glyphicon glyphicon-piggy-bank  form-control-feedback'></span>"
            ])->widget(MaskedInput::className(), [
                'mask' => '999-9-99999-9',
            ])
            ?>


            <div class="form-group">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

<?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

<?php

$this->registerCss("
     @media (min-width: 320px) and (max-width: 480px){
      .m-container {      
        width: 80% !important;
      }
    }
    .m-container {
        margin: 0 auto; 
        width: 25%
    }
    ", ['media' => 'screen', 'type' => 'text/css']);
