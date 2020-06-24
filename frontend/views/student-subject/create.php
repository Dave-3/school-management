<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Studentsubject */

$this->title = 'Create Studentsubject';
$this->params['breadcrumbs'][] = ['label' => 'Studentsubjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsubject-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
