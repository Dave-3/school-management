<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Students;
use frontend\models\Teachers;
use frontend\models\Subject;
use frontend\models\Exams;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Results */
/* @var $form yii\widgets\ActiveForm */
$studentArray = Students::find()->all();
$studentArray  = ArrayHelper::map($studentArray , 'studentId','studentName');
$teacherArray = Teachers::find()->all();
$teacherArray = ArrayHelper::map($teacherArray, 'teacherId','teacherName');
$subjectArray = Subject::find()->all();
$subjectArray = ArrayHelper::map($subjectArray, 'subjectId', 'subjectName');
$examArray = Exams::find()->all();
$examArray = ArrayHelper::map($examArray, 'examId', 'examName')
?>

<div class="results-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentId')->dropDownList($studentArray,['prompt'=>'Select student']);?>

    <?= $form->field($model, 'teacherId')->dropDownList($teacherArray,['prompt'=>'Select teacher']); ?>

    <?= $form->field($model, 'subjectId')->dropDownList($subjectArray,['prompt'=>'Select subject']); ?>

    <?= $form->field($model, 'examId')->dropDownList($examArray,['prompt'=>'Select exam']); ?>
    
    <?= $form->field($model, 'totalMarks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
