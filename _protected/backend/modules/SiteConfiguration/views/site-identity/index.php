<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'Site Configuration') . ' - ' . Yii::t('app', 'Site Identity');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Configuration'), 'url' => ['/site-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Site Identity');

?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<?= $form->field($model, 'app_name', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-flag"></span>']],
])->textInput(); ?>

<?= $form->field($model, 'app_description', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
])->textarea(); ?>

<div class="row">
    <div class="col-lg-6">
        <?= $form->field($model, 'favicon')->fileInput()
            ->widget(\kartik\file\FileInput::classname(), [
                'options'       => ['accept' => 'image/*'],
                'pluginOptions' => empty($model->favicon) ? [] : [
                    'initialPreview'       => [
                        '/' . $model->favicon,
                    ],
                    'initialPreviewAsData' => true,
                    'initialCaption'       => $model->favicon,
                    'overwriteInitial'     => true,
                ],
            ]);
        ?>
    </div>
    <div class="col-lg-6">
        <?= $form->field($model, 'app_logo')->fileInput()
            ->widget(\kartik\file\FileInput::classname(), [
                'options'       => ['accept' => 'image/*'],
                'pluginOptions' => empty($model->favicon) ? [] : [
                    'initialPreview'       => [
                        '/' . $model->app_logo,
                    ],
                    'initialPreviewAsData' => true,
                    'initialCaption'       => $model->app_logo,
                    'overwriteInitial'     => true,
                ],
            ]);
        ?>
    </div>
</div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>