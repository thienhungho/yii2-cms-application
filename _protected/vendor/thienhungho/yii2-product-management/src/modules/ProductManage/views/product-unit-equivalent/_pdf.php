<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use thienhungho\Widgets\models\GridView;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductUnitEquivalent */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Unit Equivalent'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-unit-equivalent-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Product Unit Equivalent').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'productUnit1.name',
                'label' => Yii::t('app', 'Product Unit 1')
            ],
        'product_unit_1_value',
        [
                'attribute' => 'productUnit2.name',
                'label' => Yii::t('app', 'Product Unit 2')
            ],
        'product_unit_2_value',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
