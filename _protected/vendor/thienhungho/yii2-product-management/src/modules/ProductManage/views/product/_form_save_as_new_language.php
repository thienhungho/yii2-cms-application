<?php

use kartik\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\Product */
/* @var $form yii\widgets\ActiveForm */
if (empty($model->author)) {
    $model->author = Yii::$app->user->id;
}
if (empty($model->language)) {
    $model->language = get_primary_language();
}
if (empty($model->product_type)) {
    $model->product_type = request()->get('type', \thienhungho\ProductManagement\modules\ProductBase\Product::PRODUCT_TYPE_PRODUCT);
}
if (empty($model->unit)) {
    $model->unit = \thienhungho\ProductManagement\modules\ProductBase\Product::UNIT_1_PRODUCT;
}
if (empty($model->currency_unit)) {
    $model->currency_unit = 'USD';
}
if (empty($model->id)) {
    $model->id = 0;
}
?>

<div class="row product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'product_type', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <div class="col-lg-9 col-xs-12">

        <?= $form->field($model, 'title', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
        ])->textInput([
            'maxlength'   => true,
            'placeholder' => Yii::t('app', 'Title'),
        ]) ?>

        <?=
        $form->field($model, 'content')->widget(froala\froalaeditor\FroalaEditorWidget::className(), [
            'clientOptions' => [
                'toolbarInline'         => false,
                'language'              => substr(Yii::$app->language, 0, 2),
                'height'                => '500px',
                'fontFamilySelection'   => true,
                'fontSizeSelection'     => true,
                'videoAllowedProviders' => [
                    'youtube',
                    'vimeo',
                ],
                'videoInsertButtons'    => [
                    'videoBack',
                    '|',
                    'videoByURL',
                ],
                'imageUploadParam'      => 'file',
                'imageUploadURL'        => \yii\helpers\Url::to(['/upload']),
            ],
        ]);
        ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    </div>

    <div class="col-lg-3 col-xs-12">

        <?php
        if (is_enable_multiple_language()) {
            echo language_select_input($form, $model, 'language');
        }
        ?>

        <?= $form->field($model, 'author', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-user"></span>']],
        ])->widget(\kartik\widgets\Select2::classname(), [
            'data'          => \yii\helpers\ArrayHelper::map(\thienhungho\UserManagement\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'username'),
            'options'       => ['placeholder' => Yii::t('app', 'Choose User')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?= $form->field($model, 'unit', [
            'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-glass"></span>']],
        ])->textInput([
            'maxlength'   => true,
            'placeholder' => Yii::t('app', 'Unit'),
        ]) ?>

        <?= $form->field($model, 'price', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-money"></span>']],
        ])->widget(\kartik\number\NumberControl::classname(), [
            'name'               => 'amount_rounded_1',
            'value'              => 1000,
            'maskedInputOptions' => [
                'prefix' => ' ',
                'suffix' => ' ',
                'digits' => 2,
            ],
            'displayOptions'     => ['class' => 'form-control kv-monospace'],
            'saveInputContainer' => ['class' => 'kv-saved-cont'],
        ]) ?>

        <?= $form->field($model, 'promotional_price', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-money"></span>']],
        ])->widget(\kartik\number\NumberControl::classname(), [
            'name'               => 'amount_rounded_1',
            'value'              => 1000,
            'maskedInputOptions' => [
                'prefix' => ' ',
                'suffix' => ' ',
                'digits' => 2,
            ],
            'displayOptions'     => ['class' => 'form-control kv-monospace'],
            'saveInputContainer' => ['class' => 'kv-saved-cont'],
        ]) ?>

        <?= $form->field($model, 'currency_unit', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-money"></span>']],
        ])->widget(\kartik\widgets\Select2::classname(), [
            'data'          => get_all_currency_code(),
            'options'       => ['placeholder' => Yii::t('app', 'Choose Currency Unit')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?= $form->field($model, 'product_parent', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-copy"></span>']],
        ])->widget(\kartik\widgets\Select2::classname(), [
            'data'          => \yii\helpers\ArrayHelper::map(\thienhungho\ProductManagement\modules\ProductBase\Product::find()->where(['product_parent' => 0])->andWhere(['product_type' => $model->product_type])->orderBy('id')->asArray()->all(), 'id', 'title'),
            'options'       => ['placeholder' => Yii::t('app', 'Product Parent')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?php
        $termTypes = get_all_term_type_of_product_type($model->product_type);
        foreach ($termTypes as $termType) { ?>
            <div class="form-group">
                <label class="category-label"><?= Yii::t('app', ucfirst($termType['name'])) ?></label>
                <?=
                \kartik\widgets\Select2::widget([
                    'addon' => ['prepend' => ['content' => '<span class="fa fa-paperclip"></span>']],
                    'name' => $termType['name'] . '[]',
                    'value' => get_all_term_name_of_obj($model->product_type, $model->primaryKey, $termType['name']),
                    'data' => \yii\helpers\ArrayHelper::map(\common\modules\terms\Term::find()->select('name')->orderBy('id')->asArray()->where(['term_type' => $termType['name']])->all(), 'name', 'name'),
                    'options' => ['multiple' => true, 'placeholder' => Yii::t('app', 'Choose') . ' ' . Yii::t('app', ucfirst($termType['name']))],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'tags' => true,
                        'tokenSeparators' => [','],
                        'maximumInputLength' => 225
                    ],
                ])
                ?>
            </div>
        <?php }
        ?>
    </div>

    <div class="col-lg-12 col-xs-12">

        <div class="form-group">
            <?php if (Yii::$app->controller->action->id != 'save-as-new'): ?>
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?><?php endif; ?><?php if (Yii::$app->controller->action->id != 'create'): ?>
                <?= Html::submitButton(Yii::t('app', 'Save As New'), [
                    'class' => 'btn btn-info',
                    'value' => '1',
                    'name'  => '_asnew',
                ]) ?><?php endif; ?>
            <?= Html::a(Yii::t('app', 'Cancel'), request()->referrer, ['class' => 'btn btn-danger']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
