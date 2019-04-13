<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\TermOfProductType */

$this->title = t('app', 'Create Term of') . ' ' . t('app', ucfirst($model->product_type));
$this->params['breadcrumbs'][] = ['label' => t('app', 'Term of') . ' ' . t('app',  ucfirst($model->product_type)), 'url' => ['index', 'type' => $model->product_type]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-of-product-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
