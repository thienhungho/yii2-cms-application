<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'Site Configuration') . ' - ' . Yii::t('app', 'Mailer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Configuration'), 'url' => ['/site-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Mailer');

$settings = Yii::$app->settings;

if (empty($model->adminEmail)) {
    $model->adminEmail = $settings->get('site_configuration', 'admin_email', 'admin@example.com');
}

if (empty($model->supportEmail)) {
    $model->supportEmail = $settings->get('site_configuration', 'support_email', 'support@example.com');
}

?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <h3>System Emails</h3>
<?= $form->field($model, 'adminEmail', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-envelope"></span>']],
])->textInput(['placeholder' => Yii::t('app', 'Admin Email')]); ?>
<?= $form->field($model, 'supportEmail', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-envelope"></span>']],
])->textInput(['placeholder' => Yii::t('app', 'Support Email')]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>