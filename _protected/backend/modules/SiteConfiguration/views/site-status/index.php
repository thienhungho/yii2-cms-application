<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'Site Configuration') . ' - ' . Yii::t('app', 'Site Status');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Configuration'), 'url' => ['/site-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Site Status');

?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'coming_soon_time_release')
                ->widget(\kartik\widgets\DateTimePicker::classname(), [
                    'options' => ['placeholder' => t('app', 'Coming soon time release')],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-mm-yyyy H:i:s'
                    ]
                ]); ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'coming_soon_status', [
                'addon' => ['prepend' => ['content' => '<span class="fa fa-language"></span>']],
            ])->radioButtonGroup([
                STATUS_DISABLE => Yii::t('app', slug_to_text(STATUS_DISABLE)),
                STATUS_ENABLE => Yii::t('app', slug_to_text(STATUS_ENABLE))], [
                'class' => 'btn-group-sm',
                'itemOptions' => ['labelOptions' => ['class' => 'btn btn-warning']]
            ]); ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>