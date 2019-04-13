<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductUnitEquivalent */

$this->title = Yii::t('app', 'Create Product Unit Equivalent');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Unit Equivalent'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-equivalent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
