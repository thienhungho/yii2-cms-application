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
        <div class="col-sm-8">
            <h2><?= Yii::t('app', 'Product Unit Equivalent').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . Yii::t('app', 'PDF'), 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => Yii::t('app', 'Will open the generated PDF file in a new window')
                ]
            )?>
            <?= Html::a(Yii::t('app', 'Save As New'), ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
            'attribute' => 'productUnit1.name',
            'label' => Yii::t('app', 'Product Unit 1'),
        ],
        'product_unit_1_value',
        [
            'attribute' => 'productUnit2.name',
            'label' => Yii::t('app', 'Product Unit 2'),
        ],
        'product_unit_2_value',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>ProductUnit<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnProductUnit = [
        ['attribute' => 'id', 'visible' => false],
        'name',
    ];
    echo DetailView::widget([
        'model' => $model->productUnit1,
        'attributes' => $gridColumnProductUnit    ]);
    ?>
    <div class="row">
        <h4>ProductUnit<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnProductUnit = [
        ['attribute' => 'id', 'visible' => false],
        'name',
    ];
    echo DetailView::widget([
        'model' => $model->productUnit2,
        'attributes' => $gridColumnProductUnit    ]);
    ?>
</div>
