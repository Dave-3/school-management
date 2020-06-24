<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Results */

$this->title = 'Update Results: ' . $model->resultsId;
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->resultsId, 'url' => ['view', 'id' => $model->resultsId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="results-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
