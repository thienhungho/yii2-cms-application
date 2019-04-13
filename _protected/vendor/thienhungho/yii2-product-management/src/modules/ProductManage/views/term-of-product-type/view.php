<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use thienhungho\Widgets\models\GridView;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\TermOfProductType */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Term Of Product Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="term-of-product-type-view">

    <div class="row">
        <div class="col-sm-8">
            <h2><?= t('app', 'Term Of Product Type').' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-4" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . t('app', 'PDF'), 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => t('app', 'Will open the generated PDF file in a new window')
                ]
            )?>
            <?= Html::a(t('app', 'Save As New'), ['save-as-new', 'id' => $model->id], ['class' => 'btn btn-info']) ?>            
            <?= Html::a(t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => t('app', 'Are you sure you want to delete this item?'),
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
        'name',
        [
            'attribute' => 'productType.name',
            'label' => t('app', 'Product Type'),
        ],
        'input_type',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>ProductType<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnProductType = [
        ['attribute' => 'id', 'visible' => false],
        'name',
    ];
    echo DetailView::widget([
        'model' => $model->productType,
        'attributes' => $gridColumnProductType    ]);
    ?>
</div>
