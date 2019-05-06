<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'Site Configuration') . ' - ' . Yii::t('app', 'Optimize');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Configuration'), 'url' => ['/site-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Optimize');

?>

<?php $form = ActiveForm::begin(['id' => 'optimize-form']); ?>

<?= $form->field($model, 'minify_html', [
    'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-dashboard"></span>']],
])->radioButtonGroup(['on' => Yii::t('app', 'Turn on'), 'off' => Yii::t('app', 'Turn off')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn green']]
]); ?>

<?= $form->field($model, 'minify_css', [
    'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-dashboard"></span>']],
])->radioButtonGroup(['on' => Yii::t('app', 'Turn on'), 'off' => Yii::t('app', 'Turn off')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn green']]
]); ?>

<?= $form->field($model, 'minify_js', [
    'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-dashboard"></span>']],
])->radioButtonGroup(['on' => Yii::t('app', 'Turn on'), 'off' => Yii::t('app', 'Turn off')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn green']]
]); ?>

<?= $form->field($model, 'concatenate_js', [
    'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-dashboard"></span>']],
])->radioButtonGroup(['on' => Yii::t('app', 'Turn on'), 'off' => Yii::t('app', 'Turn off')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn green']]
]); ?>

<?= $form->field($model, 'concatenate_css', [
    'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-dashboard"></span>']],
])->radioButtonGroup(['on' => Yii::t('app', 'Turn on'), 'off' => Yii::t('app', 'Turn off')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn green']]
]); ?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
</div>

<?php ActiveForm::end(); ?>
