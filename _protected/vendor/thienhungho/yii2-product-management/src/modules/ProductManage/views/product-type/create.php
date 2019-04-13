<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductType */

$this->title = t('app', 'Create Product Type');
$this->params['breadcrumbs'][] = ['label' => t('app', 'Product Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
