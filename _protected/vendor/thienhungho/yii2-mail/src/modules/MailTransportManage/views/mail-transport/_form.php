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

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
    ])->textInput([
        'maxlength'   => true,
        'placeholder' => t('app', 'Name'),
    ]) ?>

    <?= $form->field($model, 'host', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-server"></span>']],
    ])->textInput(['placeholder' => Yii::t('app', 'Host')]); ?>

    <?= $form->field($model, 'username', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-user"></span>']],
    ])->textInput(['placeholder' => Yii::t('app', 'Username')]); ?>

    <?= $form->field($model, 'password', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-lock"></span>']],
    ])->passwordInput(['placeholder' => Yii::t('app', 'Password')]); ?>

    <?= $form->field($model, 'port', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-unlock-alt"></span>']],
    ])->textInput(['placeholder' => Yii::t('app', 'Port')]); ?>

    <?= $form->field($model, 'encryption', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-globe"></span>']],
    ])->textInput(['placeholder' => Yii::t('app', 'Encryption')]); ?>

    <?= $form->field($model, 'signature')->widget(\marqu3s\summernote\Summernote::className(), [
        'clientOptions' => [
            'height' => '500px',
        ],
    ]); ?>

    <div class="form-group">
        <?php if (Yii::$app->controller->action->id != 'save-as-new'): ?>
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?><?php endif; ?><?php if (Yii::$app->controller->action->id != 'create'): ?>
            <?= Html::submitButton(Yii::t('app', 'Save As New'), [
                'class' => 'btn btn-info',
                'value' => '1',
                'name'  => '_asnew',
            ]) ?><?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer, ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
