<?php
/* @var $this yii\web\View */
/* @var $searchModel thienhungho\ProductManagement\modules\ProductManage\search\ProductUnitEquivalentSearch */

/* @var $dataProvider yii\data\ActiveDataProvider */

use thienhungho\Widgets\models\GridView;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Product Unit Equivalent');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="product-unit-equivalent-head">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
        <div class="col-lg-10">
            <p>
                <?= Html::a(Yii::t('app', 'Create Product Unit Equivalent'), ['create'], ['class' => 'btn btn-success']) ?>
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
<div class="product-unit-equivalent-index">
    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        grid_checkbox_column(),
        [
            'class'         => 'kartik\grid\ExpandRowColumn',
            'width'         => '50px',
            'value'         => function($model, $key, $index, $column) {
                return GridView::ROW_COLLAPSED;
            },
            'detail'        => function($model, $key, $index, $column) {
                return Yii::$app->controller->renderPartial('_expand', ['model' => $model]);
            },
            'headerOptions' => ['class' => 'kartik-sheet-style'],
            'expandOneOnly' => true,
        ],
        [
            'attribute' => 'id',
            'visible'   => false,
        ],
        [
            'attribute'           => 'product_unit_1',
            'label'               => Yii::t('app', 'Product Unit 1'),
            'value'               => function($model) {
                if ($model->productUnit1) {
                    return $model->product_unit_1_value . ' ' . $model->productUnit1->name;
                } else {
                    return null;
                }
            },
            'filterType'          => GridView::FILTER_SELECT2,
            'filter'              => \yii\helpers\ArrayHelper::map(\thienhungho\ProductManagement\modules\ProductBase\ProductUnit::find()
                ->asArray()
                ->all(), 'id', 'name'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions'  => [
                'placeholder' => 'Product unit',
                'id'          => 'grid-product-unit-equivalent-search-product_unit_1',
            ],
        ],
        [
            'label' => '=',
            'value' => function() {
                return '=';
            },
        ],
        [
            'attribute'           => 'product_unit_2',
            'label'               => Yii::t('app', 'Product Unit 2'),
            'value'               => function($model) {
                if ($model->productUnit2) {
                    return $model->product_unit_2_value . ' ' . $model->productUnit2->name;
                } else {
                    return null;
                }
            },
            'filterType'          => GridView::FILTER_SELECT2,
            'filter'              => \yii\helpers\ArrayHelper::map(\thienhungho\ProductManagement\modules\ProductBase\ProductUnit::find()->asArray()->all(), 'id', 'name'),
            'filterWidgetOptions' => [
                'pluginOptions' => ['allowClear' => true],
            ],
            'filterInputOptions'  => [
                'placeholder' => 'Product unit',
                'id'          => 'grid-product-unit-equivalent-search-product_unit_2',
            ],
        ],
    ];
    $gridColumn[] = grid_view_default_active_column_cofig();
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'columns'      => $gridColumn,
        'pjax'         => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-product-unit-equivalent']],
        'panel'        => [
            'type'    => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'toolbar'      => grid_view_toolbar_config($dataProvider, $gridColumn),
    ]); ?>

    <div class="row">
        <div class="col-lg-2">
            <?= \kartik\widgets\Select2::widget([
                'name'    => 'action',
                'value'   => '',
                'data'    => [
                    ACTION_DELETE => t('app', 'Delete'),
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
