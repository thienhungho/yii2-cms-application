<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\Product */

$type = $model->product_type;

$this->title = t('app', 'Save As New Language {modelClass}: ', [
        'modelClass' => t('app', ucfirst($type)),
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => t('app', ucfirst($type)), 'url' => ['index', 'type' => $type]];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Save As New Language');
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_save_as_new_language', [
        'model' => $model,
    ]) ?>

</div>
