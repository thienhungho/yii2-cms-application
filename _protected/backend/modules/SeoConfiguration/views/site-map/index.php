<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'SEO Configuration') . ' - ' . Yii::t('app', 'Site Map');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SEO Configuration'), 'url' => ['/seo-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Site Map');

$settings = Yii::$app->settings;

$contentType = $settings->get('seo_configuration', 'content_type_in_site_map', []);
if (!empty($contentType)) {
    $contentType = json_decode($contentType);
}

if (empty($model->number_item_per_site_map)) {
    $model->number_item_per_site_map = $settings->get('seo_configuration', 'number_item_per_site_map', 500);
}
?>

<?php $form = ActiveForm::begin(['id' => 'seo-site-map-form']); ?>

<?= $form->field($model, 'content_type_in_site_map')->hiddenInput()->label(false) ?>

<?= $form->field($model, 'number_item_per_site_map', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-sitemap"></span>']],
])->textInput(['type' => 'number']) ?>

<?=
'<div class="form-group">' .
'<label class="category-label">' . Yii::t('app', 'Content Type In Site Map') . '</label>' .
\kartik\widgets\Select2::widget([
    'addon' => ['prepend' => ['content' => '<span class="fa fa-file-o"></span>']],
    'name' => 'ContentType',
    'value' => $contentType,
    'data' => \yii\helpers\ArrayHelper::map(\cmsbase\modules\PostBase\PostType::find()->orderBy('id')->asArray()->all(), 'name', 'name'),
    'options' => ['multiple' => true, 'placeholder' => Yii::t('app', 'Choose Content Type')],
    'pluginOptions' => [
        'allowClear' => true,
        'tags' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 225
    ],
])
. '</div>'
?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>