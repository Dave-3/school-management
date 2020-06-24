<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Teachers */

$this->title = 'Update Teachers: ' . $model->teacherId;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacherId, 'url' => ['view', 'id' => $model->teacherId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
