<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResultsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="results-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'resultsId') ?>

    <?= $form->field($model, 'studentId') ?>

    <?= $form->field($model, 'teacherId') ?>

    <?= $form->field($model, 'subjectId') ?>

    <?= $form->field($model, 'examId') ?>

    <?php // echo $form->field($model, 'totalMarks') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
