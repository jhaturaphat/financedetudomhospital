<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailIncome */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-income-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number_income')->textInput() ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_account_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_2note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_8note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_10note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dr_11note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sum_dr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_11note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_16')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_17')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_18')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_19')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_20')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_21')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_22')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sum_cr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_income')->textInput() ?>

    <?= $form->field($model, 'month_income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note_income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pay_income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_input')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_slip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'view_state')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
