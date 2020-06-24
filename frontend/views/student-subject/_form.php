<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Students;
use frontend\models\Subject;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentsubject */
/* @var $form yii\widgets\ActiveForm */
$studentArray = Students::find()->all();
$studentArray  = ArrayHelper::map($studentArray , 'studentId','studentName');
$subjectArray = Subject::find()->all();
$subjectArray = ArrayHelper::map($subjectArray, 'subjectId', 'subjectName')
?>

<div class="studentsubject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'studentId')->dropDownList($studentArray,['prompt'=>'Select student']); ?>

    <?= $form->field($model, 'subjectId')->dropDownList($subjectArray,['prompt'=>'Select subject']);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
