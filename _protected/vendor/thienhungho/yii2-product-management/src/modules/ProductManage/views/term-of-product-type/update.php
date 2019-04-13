<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\TermOfProductType */

$this->title = t('app', 'Update {modelClass}: ', [
        'modelClass' => t('app', 'Term of') .' '.   t('app', ucfirst($model->product_type)),
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Term of') .' '.  t('app', ucfirst($model->product_type)), 'url' => ['index', 'type' => $model->product_type]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Update');
?>
<div class="term-of-product-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
