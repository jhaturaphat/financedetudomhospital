<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GovernmentSalarySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="government-salary-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_gs') ?>

    <?= $form->field($model, 'cid_gs') ?>

    <?= $form->field($model, 'name_gs') ?>

    <?= $form->field($model, 'institute_gs') ?>

    <?= $form->field($model, 'institute2_gs') ?>

    <?php // echo $form->field($model, 'province_gs') ?>

    <?php // echo $form->field($model, 'namebank_gs') ?>

    <?php // echo $form->field($model, 'numberbank_gs') ?>

    <?php // echo $form->field($model, 'position_numbe_gs') ?>

    <?php // echo $form->field($model, 'dr_1') ?>

    <?php // echo $form->field($model, 'dr_2') ?>

    <?php // echo $form->field($model, 'dr_3') ?>

    <?php // echo $form->field($model, 'dr_4') ?>

    <?php // echo $form->field($model, 'dr_5') ?>

    <?php // echo $form->field($model, 'dr_6') ?>

    <?php // echo $form->field($model, 'dr_7') ?>

    <?php // echo $form->field($model, 'dr_8') ?>

    <?php // echo $form->field($model, 'dr_9') ?>

    <?php // echo $form->field($model, 'dr_10') ?>

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

    <?php // echo $form->field($model, 'sum_cr') ?>

    <?php // echo $form->field($model, 'net_salary') ?>

    <?php // echo $form->field($model, 'date_gs') ?>

    <?php // echo $form->field($model, 'month_gs') ?>

    <?php // echo $form->field($model, 'id_input') ?>

    <?php // echo $form->field($model, 'year_budget') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
