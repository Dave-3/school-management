<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentsubject */

$this->title = 'Update Studentsubject: ' . $model->studentssubjectId;
$this->params['breadcrumbs'][] = ['label' => 'Studentsubjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->studentssubjectId, 'url' => ['view', 'id' => $model->studentssubjectId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studentsubject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
