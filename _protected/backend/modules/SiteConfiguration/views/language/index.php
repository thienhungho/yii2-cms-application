<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'Site Configuration') . ' - ' . Yii::t('app', 'Language');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Configuration'), 'url' => ['/site-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Language');

$model->primary_language = require Yii::getAlias('@common') . '/config/language.php';
$model->enable_multiple_language = (is_enable_multiple_language()) ? 'on' : 'off';
$otherLanguages = require Yii::getAlias('@common') . '/config/other-languages.php';

?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<?= $form->field($model, 'primary_language', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-language"></span>']],
])->widget(\kartik\widgets\Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(\lajax\translatemanager\models\Language::find()->orderBy('language_id')->asArray()->all(), 'language_id', 'name'),
    'options' => ['placeholder' => Yii::t('app', 'Choose Language')],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

<?=
'<div class="form-group">'.
'<label class="category-label">'.Yii::t('app', 'Other languages').'</label>'.
\kartik\widgets\Select2::widget([
    'addon' => ['prepend' => ['content' => '<span class="fa fa-language"></span>']],
    'name' => 'otherLanguages[]',
    'value' => empty($otherLanguages) ? [] : $otherLanguages,
    'data' => \yii\helpers\ArrayHelper::map(\lajax\translatemanager\models\Language::find()->orderBy('language_id')->asArray()->all(), 'language_id', 'name'),
    'options' => ['multiple' => true, 'placeholder' => Yii::t('app', 'Choose languages')],
    'pluginOptions' => [
        'allowClear' => true,
    ],
])
. '</div>'
?>

<?= $form->field($model, 'enable_multiple_language', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-language"></span>']],
])->radioButtonGroup(['on' => Yii::t('app', 'Turn on'), 'off' => Yii::t('app', 'Turn off')], [
    'class' => 'btn-group-sm',
    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-warning']]
]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>