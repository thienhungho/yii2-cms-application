<?php

use thienhungho\Widgets\models\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\Product */
$this->title = $model->title;
$this->params['breadcrumbs'][] = [
    'label' => t('app', 'Product'),
    'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

<!--    <div class="row">-->
<!--        <div class="col-sm-8">-->
<!--            <h2>--><?//= t('app', 'Product') . ' ' . Html::encode($this->title) ?><!--</h2>-->
<!--        </div>-->
<!--        <div class="col-sm-4" style="margin-top: 15px">-->
<!--            --><?//=
//            Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . Yii::t('app', 'PDF'),
//                [
//                    'pdf',
//                    'id' => $model->id,
//                ],
//                [
//                    'class'       => 'btn btn-danger',
//                    'target'      => '_blank',
//                    'data-toggle' => 'tooltip',
//                    'title'       => Yii::t('app', 'Will open the generated PDF file in a new window'),
//                ]
//            ) ?>
<!--            --><?//= Html::a(Yii::t('app', 'Save As New'), [
//                'save-as-new',
//                'id' => $model->id,
//            ], ['class' => 'btn btn-info']) ?>
<!--            --><?//= Html::a(Yii::t('app', 'Update'), [
//                'update',
//                'id' => $model->id,
//            ], ['class' => 'btn btn-primary']) ?>
<!--            --><?//= Html::a(Yii::t('app', 'Delete'), [
//                'delete',
//                'id' => $model->id,
//            ], [
//                'class' => 'btn btn-danger',
//                'data'  => [
//                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
//                    'method'  => 'post',
//                ],
//            ])
//            ?>
<!--        </div>-->
<!--    </div>-->

    <div class="row">
        <?php
        $gridColumn = [
            [
                'attribute' => 'id',
                'visible'   => false,
            ],
            'title',
//            'slug',
//            'description:ntext',
//            'content:ntext',
//            [
//                'attribute' => 'author0.username',
//                'label'     => Yii::t('app', 'Author'),
//            ],
//            'feature_img',
//            'sku',
//            'quantity',
//            'status',
//            'comment_status',
//            'rating_status',
//            'promotional_price',
//            'price',
//            'unit',
//            'gallery:ntext',
//            'product_parent',
//            'product_type',
//            'language',
//            'assign_with',
        ];
        echo DetailView::widget([
            'model'      => $model,
            'attributes' => $gridColumn,
        ]);
        ?>
    </div>
</div>
