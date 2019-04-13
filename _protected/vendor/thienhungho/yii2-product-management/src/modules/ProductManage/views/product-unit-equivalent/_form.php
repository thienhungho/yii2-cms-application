<?php

use kartik\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\ProductUnitEquivalent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-unit-equivalent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'product_unit_1', [
        'addon'        => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
        'hintType'     => \kartik\form\ActiveField::HINT_SPECIAL,
        'hintSettings' => [
            'showIcon' => true,
            'title'    => '<i class="glyphicon glyphicon-info-sign"></i> ' . Yii::t('app', 'Note'),
        ],
    ])->widget(\kartik\widgets\Select2::classname(), [
        'data'          => \yii\helpers\ArrayHelper::map(\thienhungho\ProductManagement\modules\ProductBase\ProductUnit::find()->orderBy('id')->asArray()->all(), 'id', 'name'),
        'options'       => ['placeholder' => Yii::t('app', 'Choose Product unit')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])->hint(Yii::t('app', 'Select product unit')); ?>

    <?= $form->field($model, 'product_unit_1_value', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-cart-plus"></span>']],
        'hintType'     => \kartik\form\ActiveField::HINT_SPECIAL,
        'hintSettings' => [
            'showIcon' => true,
            'title'    => '<i class="glyphicon glyphicon-info-sign"></i> ' . Yii::t('app', 'Note'),
        ],
    ])->textInput([
        'maxlength'   => true,
        'placeholder' => t('app', 'Product Unit 1 Value'),
        'type'        => 'number',
    ])->hint(Yii::t('app', 'Input value')) ?>

    <h2>=</h2>

    <?= $form->field($model, 'product_unit_2', [
        'addon'        => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
        'hintType'     => \kartik\form\ActiveField::HINT_SPECIAL,
        'hintSettings' => [
            'showIcon' => true,
            'title'    => '<i class="glyphicon glyphicon-info-sign"></i> ' . Yii::t('app', 'Note'),
        ],
    ])->widget(\kartik\widgets\Select2::classname(), [
        'data'          => \yii\helpers\ArrayHelper::map(\thienhungho\ProductManagement\modules\ProductBase\ProductUnit::find()->orderBy('id')->asArray()->all(), 'id', 'name'),
        'options'       => ['placeholder' => Yii::t('app', 'Choose Product unit')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ])->hint(Yii::t('app', 'Select product unit')); ?>

    <?= $form->field($model, 'product_unit_2_value', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-cart-plus"></span>']],
        'hintType'     => \kartik\form\ActiveField::HINT_SPECIAL,
        'hintSettings' => [
            'showIcon' => true,
            'title'    => '<i class="glyphicon glyphicon-info-sign"></i> ' . Yii::t('app', 'Note'),
        ],
    ])->textInput([
        'maxlength'   => true,
        'placeholder' => t('app', 'Product Unit 2 Value'),
        'type'        => 'number',
    ])->hint(Yii::t('app', 'Input value')) ?>

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
