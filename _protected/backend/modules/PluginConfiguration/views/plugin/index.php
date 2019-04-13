<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = t('app', 'Plugin Configuration') . ' - ' . t('app', 'General');
$this->params['breadcrumbs'][] = ['label' => t('app', 'Plugin Configuration'), 'url' => ['/dev-configuration']];
$this->params['breadcrumbs'][] = t('app', 'General');

$settings = Yii::$app->settings;

if (empty($model->e_commerce_status)) {
    $model->e_commerce_status = $settings->get('plugin_configuration', 'e_commerce_status', \backend\modules\PluginConfiguration\PluginForm::STATUS_DISABLED);
}

?>

<?php $form = ActiveForm::begin(['id' => 'seo-general-form']); ?>

<?= $form->field($model, 'e_commerce_status', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-cogs"></span>']],
])->radioButtonGroup([\backend\modules\PluginConfiguration\PluginForm::STATUS_DISABLED => t('app', 'Disabled'), \backend\modules\PluginConfiguration\PluginForm::STATUS_ENABLED => t('app', 'Enabled')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-default']]
]); ?>

    <div class="form-group">
        <?= Html::submitButton(t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>