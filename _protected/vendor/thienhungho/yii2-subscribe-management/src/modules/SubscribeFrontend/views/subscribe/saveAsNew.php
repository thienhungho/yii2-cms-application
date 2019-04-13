<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\Subscribes\modules\SubscribeBase\Subscribe */

$this->title = t('app', 'Save As New {modelClass}: ', [
    'modelClass' => 'Subscribe',
]). ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Subscribes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Save As New');
?>
<div class="subscribe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
