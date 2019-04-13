<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductUnit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
        'hintType' => \kartik\form\ActiveField::HINT_SPECIAL,
        'hintSettings' => [
            'showIcon' => true,
            'title' => '<i class="glyphicon glyphicon-info-sign"></i> ' . Yii::t('app', 'Note'),
        ]
    ])->textInput([
        'maxlength'   => true,
        'placeholder' => t('app', 'Name'),
    ])->hint(Yii::t('app', 'Product unit name')) ?>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton(Yii::t('app', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
