<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admissionNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthCertificateNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
