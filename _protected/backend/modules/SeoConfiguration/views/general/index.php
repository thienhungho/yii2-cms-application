<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'SEO Configuration') . ' - ' . Yii::t('app', 'General');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SEO Configuration'), 'url' => ['/seo-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'General');

$settings = Yii::$app->settings;

if (empty($model->index_status)) {
    $model->index_status = $settings->get('seo_configuration', 'index_status', \backend\modules\SeoConfiguration\GeneralForm::INDEX_STATUS_ALLOW_ALL);
}

?>

<?php $form = ActiveForm::begin(['id' => 'seo-general-form']); ?>

<? //= $form->field($model, 'index_status', [
//    'addon' => ['prepend' => ['content' => '<span class="fa fa-globe"></span>']],
//])->widget(\kartik\widgets\Select2::classname(), [
//    'data' => [\backend\modules\SeoConfiguration\GeneralForm::INDEX_STATUS_ALLOW_ALL => Yii::t('app', 'Allow All'), \backend\modules\SeoConfiguration\GeneralForm::INDEX_STATUS_DISALLOW_ALL => Yii::t('app', 'Disallow All')],
//    'options' => ['placeholder' => Yii::t('app', 'Choose')],
//    'pluginOptions' => [
//        'allowClear' => true
//    ],
//]); ?>


<?= $form->field($model, 'index_status', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-globe"></span>']],
])->radioButtonGroup([\backend\modules\SeoConfiguration\GeneralForm::INDEX_STATUS_ALLOW_ALL => Yii::t('app', 'Allow All'), \backend\modules\SeoConfiguration\GeneralForm::INDEX_STATUS_DISALLOW_ALL => Yii::t('app', 'Disallow All')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-default']]
]); ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>