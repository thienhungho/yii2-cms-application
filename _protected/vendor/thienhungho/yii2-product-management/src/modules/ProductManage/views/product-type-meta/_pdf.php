<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use thienhungho\Widgets\models\GridView;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductTypeMeta */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Product Type Meta'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-type-meta-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= t('app', 'Product Type Meta').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        [
                'attribute' => 'productType.name',
                'label' => t('app', 'Product Type')
            ],
        'name',
        'input_type',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
