<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailIncomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-income-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_income') ?>

    <?= $form->field($model, 'number_income') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'number_account') ?>

    <?= $form->field($model, 'name_account_user') ?>

    <?php // echo $form->field($model, 'dr_1') ?>

    <?php // echo $form->field($model, 'dr_2') ?>

    <?php // echo $form->field($model, 'dr_2note') ?>

    <?php // echo $form->field($model, 'dr_3') ?>

    <?php // echo $form->field($model, 'dr_4') ?>

    <?php // echo $form->field($model, 'dr_5') ?>

    <?php // echo $form->field($model, 'dr_6') ?>

    <?php // echo $form->field($model, 'dr_7') ?>

    <?php // echo $form->field($model, 'dr_8') ?>

    <?php // echo $form->field($model, 'dr_8note') ?>

    <?php // echo $form->field($model, 'dr_9') ?>

    <?php // echo $form->field($model, 'dr_10') ?>

    <?php // echo $form->field($model, 'dr_10note') ?>

    <?php // echo $form->field($model, 'dr_11') ?>

    <?php // echo $form->field($model, 'dr_11note') ?>

    <?php // echo $form->field($model, 'sum_dr') ?>

    <?php // echo $form->field($model, 'cr_1') ?>

    <?php // echo $form->field($model, 'cr_2') ?>

    <?php // echo $form->field($model, 'cr_3') ?>

    <?php // echo $form->field($model, 'cr_4') ?>

    <?php // echo $form->field($model, 'cr_5') ?>

    <?php // echo $form->field($model, 'cr_6') ?>

    <?php // echo $form->field($model, 'cr_7') ?>

    <?php // echo $form->field($model, 'cr_8') ?>

    <?php // echo $form->field($model, 'cr_9') ?>

    <?php // echo $form->field($model, 'cr_10') ?>

    <?php // echo $form->field($model, 'cr_11') ?>

    <?php // echo $form->field($model, 'cr_11note') ?>

    <?php // echo $form->field($model, 'cr_12') ?>

    <?php // echo $form->field($model, 'cr_13') ?>

    <?php // echo $form->field($model, 'cr_14') ?>

    <?php // echo $form->field($model, 'cr_15') ?>

    <?php // echo $form->field($model, 'cr_16') ?>

    <?php // echo $form->field($model, 'cr_17') ?>

    <?php // echo $form->field($model, 'cr_18') ?>

    <?php // echo $form->field($model, 'cr_19') ?>

    <?php // echo $form->field($model, 'cr_20') ?>

    <?php // echo $form->field($model, 'cr_21') ?>

    <?php // echo $form->field($model, 'cr_22') ?>

    <?php // echo $form->field($model, 'sum_cr') ?>

    <?php // echo $form->field($model, 'total_income') ?>

    <?php // echo $form->field($model, 'date_income') ?>

    <?php // echo $form->field($model, 'month_income') ?>

    <?php // echo $form->field($model, 'type_income') ?>

    <?php // echo $form->field($model, 'note_income') ?>

    <?php // echo $form->field($model, 'pay_income') ?>

    <?php // echo $form->field($model, 'id_input') ?>

    <?php // echo $form->field($model, 'year_budget') ?>

    <?php // echo $form->field($model, 'id_slip') ?>

    <?php // echo $form->field($model, 'view_state') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
