<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Exams */

$this->title = 'Update Exams: ' . $model->examId;
$this->params['breadcrumbs'][] = ['label' => 'Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->examId, 'url' => ['view', 'id' => $model->examId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exams-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
