<?php
/* @var $this yii\web\View */
/* @var $searchModel thienhungho\ProductManagement\modules\ProductManageForCustomer\search\ProductSearch */

/* @var $dataProvider yii\data\ActiveDataProvider */

use thienhungho\Widgets\models\GridView;
use yii\helpers\Html;

$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
    <div class="product-head">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <div class="row">
            <div class="col-lg-10">
                <p>
                    <?= Html::a(Yii::t('app', 'Advance Search'), '#', ['class' => 'btn btn-info search-button']) ?>
                </p>
            </div>
            <div class="col-lg-2">
                <p>
                <form method="get">
                    <?= \kartik\widgets\Select2::widget([
                        'name'    => 'per-page',
                        'value'   => '',
                        'data'    => [
                            5   => 5 . ' ' . t('app', 'Items Per Page'),
                            15  => 15 . ' ' . t('app', 'Items Per Page'),
                            25  => 25 . ' ' . t('app', 'Items Per Page'),
                            55  => 55 . ' ' . t('app', 'Items Per Page'),
                            100 => 100 . ' ' . t('app', 'Items Per Page'),
                        ],
                        'theme'   => \kartik\widgets\Select2::THEME_BOOTSTRAP,
                        'options' => [
                            'multiple'    => false,
                            'placeholder' => t('app', 'Per Page ...'),
                            'onchange'    => 'this.form.submit()',
                        ],
                    ]); ?>
                </form>
                </p>
            </div>
        </div>
        <div class="search-form" style="display:none">
            <?= $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

<?= Html::beginForm(['bulk']) ?>
    <div class="product-index">
        <?php
        $gridColumn = [
            ['class' => 'yii\grid\SerialColumn'],
            grid_checkbox_column(),
//            [
//                'class'         => 'kartik\grid\ExpandRowColumn',
//                'width'         => '50px',
//                'value'         => function($model, $key, $index, $column) {
//                    return GridView::ROW_COLLAPSED;
//                },
//                'detail'        => function($model, $key, $index, $column) {
//                    return Yii::$app->controller->renderPartial('_expand', ['model' => $model]);
//                },
//                'headerOptions' => ['class' => 'kartik-sheet-style'],
//                'expandOneOnly' => true,
//            ],
            [
                'attribute' => 'id',
                'visible'   => false,
            ],
            [
                'class'     => \kartik\grid\DataColumn::className(),
                'format'    => 'raw',
                'attribute' => 'feature_img',
                'value'     => function($model, $key, $index, $column) {
                    return Html::a(
                        '<img style="max-width: 50px;" src=/' . get_other_img_size_path('thumbnail', $model->feature_img) . '>',
                        \yii\helpers\Url::to(['/../../' . $model->product_type . '/' . $model->slug . '.html']), [
                        'data-pjax' => '0',
                        'target'    => '_blank',
                    ]);
                },
                'vAlign'    => GridView::ALIGN_MIDDLE,
            ],
            [
                'class'         => \kartik\grid\DataColumn::className(),
                'format'        => 'raw',
                'attribute'     => 'title',
                'value'         => function($model, $key, $index, $column) {
                    return Html::a($model->title, \yii\helpers\Url::to(['/../../shop/' . $model->product_type . '/' . $model->slug . '.html']), [
                        'data-pjax' => '0',
                        'target'    => '_blank',
                    ]);
                },
                'headerOptions' => ['style' => 'min-width:220px;'],
                'vAlign'    => GridView::ALIGN_MIDDLE,
            ],
//            [
//                'attribute'     => 'sku',
//                'headerOptions' => ['style' => 'min-width:100px;'],
//                'vAlign'    => GridView::ALIGN_MIDDLE,
//            ],
            [
                'class'     => \kartik\grid\DataColumn::className(),
                'format'    => 'raw',
                'attribute' => 'quantity',
                'value'     => function($model, $key, $index, $column) {
                    if ($model->quantity == -1) {
                        return span_label('success', t('app', 'Unlimited'));
                    } elseif ($model->quantity == 0) {
                        return span_label('danger', t('app', 'Out of stock'));
                    }

                    return '<span style="font-weight: bold">' . $model->quantity . '</span> ' . span_label('warning', $model->unit);
                },
                'vAlign'    => GridView::ALIGN_MIDDLE,
            ],
            [
                'class'         => \kartik\grid\DataColumn::className(),
                'format'        => 'raw',
                'attribute'     => 'price',
                'value'         => function($model, $key, $index, $column) {
                    return '<span style="font-weight: bold">' . format_product_price($model->price) . '</span> ' . span_label('warning', $model->currency_unit);
                },
                'headerOptions' => ['style' => 'min-width:140px;'],
                'vAlign'    => GridView::ALIGN_MIDDLE,
            ],
            [
                'class'         => \kartik\grid\DataColumn::className(),
                'format'        => 'raw',
                'attribute'     => 'promotional_price',
                'value'         => function($model, $key, $index, $column) {
                    return '<span style="font-weight: bold">' . format_product_price($model->promotional_price) . '</span> ' . span_label('warning', $model->currency_unit);
                },
                'headerOptions' => ['style' => 'min-width:140px;'],
                'vAlign'    => GridView::ALIGN_MIDDLE,
            ],
            //            'unit',
            //            [
            //                'attribute'           => 'author',
            //                'label'               => Yii::t('app', 'Author'),
            //                'value'               => function($model) {
            //                    if ($model->author0) {
            //                        return $model->author0->username;
            //                    } else {
            //                        return null;
            //                    }
            //                },
            //                'filterType'          => GridView::FILTER_SELECT2,
            //                'filter'              => \yii\helpers\ArrayHelper::map(\thienhungho\UserManagement\models\User::find()->asArray()->all(), 'id', 'username'),
            //                'filterWidgetOptions' => [
            //                    'pluginOptions' => ['allowClear' => true],
            //                ],
            //                'filterInputOptions'  => [
            //                    'placeholder' => Yii::t('app', 'User'),
            //                    'id'          => 'grid-product-search-author',
            //                ],
            //            ],
//            [
//                'format'              => 'raw',
//                'attribute'           => 'status',
//                'value'               => function($model, $key, $index, $column) {
//                    if ($model->status === STATUS_PENDING) {
//                        return span_label('warning', t('app', slug_to_text(STATUS_PENDING)));
//                    } elseif ($model->status === STATUS_PUBLIC) {
//                        return span_label('success', t('app', slug_to_text(STATUS_PUBLIC)));
//                    } elseif ($model->status === STATUS_DRAFT) {
//                        return span_label('danger', t('app', slug_to_text(STATUS_DRAFT)));
//                    }
//                },
//                'filterType'          => GridView::FILTER_SELECT2,
//                'filter'              => \yii\helpers\ArrayHelper::map([
//                    [
//                        'value' => STATUS_PENDING,
//                        'name'  => t('app', 'Pending'),
//                    ],
//                    [
//                        'value' => STATUS_PUBLIC,
//                        'name'  => t('app', 'Public'),
//                    ],
//                    [
//                        'value' => STATUS_DRAFT,
//                        'name'  => t('app', 'Draft'),
//                    ],
//                ], 'value', 'name'),
//                'filterWidgetOptions' => [
//                    'pluginOptions' => ['allowClear' => true],
//                ],
//                'filterInputOptions'  => [
//                    'placeholder' => Yii::t('app', 'Status'),
//                    'id'          => 'grid-search-status',
//                ],
//            ],
        ];
        ?>
        <?php
        $activeButton = grid_view_default_active_column_cofig();
        /**
         * Active Button
         */
        $activeButton['template'] = '{view}';
        $gridColumn[] = $activeButton;
        ?>
        <?= GridView::widget([
            'dataProvider'   => $dataProvider,
            'filterModel'    => $searchModel,
            'columns'        => $gridColumn,
            'responsiveWrap' => false,
            'condensed'      => true,
            'hover'          => true,
            'pjax'           => true,
            'pjaxSettings'   => ['options' => ['id' => 'kv-pjax-container-product']],
            'panel'          => [
                'type'    => GridView::TYPE_PRIMARY,
                'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
            ],
            // your toolbar can include the additional full export menu
            'toolbar'        => grid_view_toolbar_config($dataProvider, $gridColumn),
        ]); ?>

        <div class="row">
            <div class="col-lg-2">
                <?= \kartik\widgets\Select2::widget([
                    'name'    => 'action',
                    'value'   => '',
                    'data'    => [

                    ],
                    'theme'   => \kartik\widgets\Select2::THEME_BOOTSTRAP,
                    'options' => [
                        'multiple'    => false,
                        'placeholder' => t('app', 'Bulk Actions ...'),
                    ],
                ]); ?>
            </div>
            <div class="col-lg-10">
                <?= Html::submitButton(t('app', 'Apply'), [
                    'class'        => 'btn btn-primary',
                    'data-confirm' => t('app', 'Are you want to do this?'),
                ]) ?>
            </div>
        </div>

    </div>

<?= Html::endForm() ?>