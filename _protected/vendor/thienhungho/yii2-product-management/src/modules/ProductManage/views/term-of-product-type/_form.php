<?php

use kartik\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\TermOfProductType */
/* @var $form yii\widgets\ActiveForm */
if (empty($model->product_type)) {
    $model->product_type = request()->get('type', 'product');
}
?>

<div class="term-of-product-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name', [
        'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
    ])->widget(\kartik\widgets\Select2::classname(), [
        'data'          => \yii\helpers\ArrayHelper::map(
            \thienhungho\TermManagement\modules\TermBase\TermType::find()
                ->select('name')
                ->orderBy('id')
                ->asArray()
                ->all(), 'name', 'name'),
        'options'       => ['placeholder' => t('app', 'Choose Term Type')],
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]); ?>

    <?= $form->field($model, 'product_type')->hiddenInput()->label(false); ?>

    <div class="form-group">
        <?php if (Yii::$app->controller->action->id != 'save-as-new'): ?>
            <?= Html::submitButton($model->isNewRecord ? t('app', 'Create') : t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?><?php endif; ?><?php if (Yii::$app->controller->action->id != 'create'): ?>
            <?= Html::submitButton(t('app', 'Save As New'), [
                'class' => 'btn btn-info',
                'value' => '1',
                'name'  => '_asnew',
            ]) ?><?php endif; ?>
        <?= Html::a(t('app', 'Cancel'), request()->referrer, ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
