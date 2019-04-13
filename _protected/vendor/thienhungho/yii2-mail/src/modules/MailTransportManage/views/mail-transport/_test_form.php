<?php

use kartik\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\Mail\modules\MailTransport\MailTransport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mail-transport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'mail_transport_id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'to_email', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
    ])->textInput([
        'maxlength'   => true,
        'placeholder' => t('app', 'To Email'),
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Test Mail Transport'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer, ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
