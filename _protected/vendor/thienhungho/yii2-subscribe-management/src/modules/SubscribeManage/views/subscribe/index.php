<?php
/* @var $this yii\web\View */
/* @var $searchModel thienhungho\Subscribes\modules\SubscribeManage\search\SubscribeSearch */

/* @var $dataProvider yii\data\ActiveDataProvider */

use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = t('app', 'Subscribes');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>

<div class="subcribe-index-head">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-10">
            <p>
                <?= Html::a(t('app', 'Create Subscribe'), ['create'], ['class' => 'btn btn-success']) ?>
                <?= Html::a(t('app', 'Advance Search'), '#', ['class' => 'btn btn-info search-button']) ?>
            </p>
        </div>
        <div class="col-lg-2">
            <?php backend_per_page_form() ?>
        </div>
    </div>
    <div class="search-form" style="display:none">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
    </div>
</div>

<div class="subscribe-index">
    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'class'           => 'yii\grid\CheckboxColumn',
            'checkboxOptions' => function($data) {
                return ['value' => $data->id];
            },
        ],
        [
            'attribute' => 'id',
            'visible'   => false,
        ],
        'email:email',
    ];
    $gridColumn[] = grid_view_default_active_column_cofig();
    ?>
    <?= GridView::widget([
        'dataProvider'   => $dataProvider,
        'filterModel'    => $searchModel,
        'columns'        => $gridColumn,
        'responsiveWrap' => false,
        'condensed'      => true,
        'hover'          => true,
        'pjax'           => true,
        'pjaxSettings'   => ['options' => ['id' => 'kv-pjax-container-subscribe']],
        'panel'          => [
            'type'    => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'toolbar'        => grid_view_toolbar_config($dataProvider, $gridColumn),
    ]); ?>

    <div class="row">
        <div class="col-lg-2">
            <?= \kartik\widgets\Select2::widget([
                'name'    => 'action',
                'data'    => [
                    ACTION_DELETE  => t('app', 'Delete'),
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