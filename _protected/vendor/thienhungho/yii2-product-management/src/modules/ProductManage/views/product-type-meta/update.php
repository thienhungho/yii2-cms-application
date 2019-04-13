<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductTypeMeta */

$this->title = t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Product Type Meta',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Product Type Meta'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Update');
?>
<div class="product-type-meta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
