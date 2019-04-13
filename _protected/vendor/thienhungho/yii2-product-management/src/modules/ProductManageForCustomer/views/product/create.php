<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\Product */

$this->title = t('app', 'Create') . ' ' . t('app', $product_type->name);
$this->params['breadcrumbs'][] = ['label' => t('app', $product_type->name), 'url' => ['index', 'slug' => $product_type->slug]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
