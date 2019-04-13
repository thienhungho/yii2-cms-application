<?php

use kartik\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\ProductManagement\modules\ProductBase\Product */
/* @var $form yii\widgets\ActiveForm */
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
            'placeholder' => t('app', 'Title'),
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

        <?= $form->field($model, 'feature_img')->fileInput()
            ->widget(\kartik\file\FileInput::classname(), [
                'options'       => ['accept' => 'image/*'],
                'pluginOptions' => empty($model->feature_img) ? [] : [
                    'initialPreview'       => [
                        '/' . $model->feature_img,
                    ],
                    'initialPreviewAsData' => true,
                    'initialCaption'       => $model->feature_img,
                    'overwriteInitial'     => true,
                ],
            ]);
        ?>

        <?php
        if (!empty($model->gallery)) {
            $galleries = json_decode($model->gallery);
            foreach ($galleries as $g) {
                $gallery[] = '/' . $g;
            }
        } else {
            $gallery = [];
        }
        echo $form->field($model, 'gallery[]')->fileInput()
            ->widget(\kartik\file\FileInput::classname(), [
                'options'       => [
                    'accept'   => 'image/*',
                    'multiple' => true,
                ],
                'pluginOptions' => empty($model->gallery) ? [] : [
                    'initialPreview'       => $gallery,
                    'initialPreviewAsData' => true,
                    'initialCaption'       => count($gallery) . 'Item',
                    'overwriteInitial'     => true,
                ],
            ]);
        ?>

        <?php
        $metas = get_all_meta_of_product_type($model->product_type);
        foreach ($metas as $meta) { ?>
            <div class="form-group">
                <label class="control-label" for="<?= $meta['name'] ?>"><?= t('app', slug_to_text($meta['name'])) ?></label>
                <textarea id="<?= $meta['name'] ?>" class="form-control" name="<?= 'meta_data_' . $meta['name'] ?>" rows="6"><?= get_meta_value($meta['name'], $model->product_type, $model->id) ?></textarea>
                <div class="help-block"></div>
            </div>
        <?php }
        ?>

    </div>

    <div class="col-lg-3 col-xs-12">

        <?= $form->field($model, 'status', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-eye"></span>']],
        ])->radioButtonGroup([
            STATUS_PUBLIC  => t('app', 'Public'),
            STATUS_PENDING => t('app', 'Pending'),
            STATUS_DRAFT   => t('app', 'Draft'),
        ], [
            'class'       => 'btn-group-sm',
            'itemOptions' => ['labelOptions' => ['class' => 'btn green']],
        ]); ?>

        <?= $form->field($model, 'comment_status', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-comments"></span>']],
        ])->radioButtonGroup([
            STATUS_ENABLE  => t('app', 'Enable'),
            STATUS_DISABLE => t('app', 'Disable'),
        ], [
            'class'       => 'btn-group-sm',
            'itemOptions' => ['labelOptions' => ['class' => 'btn green']],
        ]); ?>

        <?= $form->field($model, 'rating_status', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-star"></span>']],
        ])->radioButtonGroup([
            STATUS_ENABLE  => t('app', 'Enable'),
            STATUS_DISABLE => t('app', 'Disable'),
        ], [
            'class'       => 'btn-group-sm',
            'itemOptions' => ['labelOptions' => ['class' => 'btn green']],
        ]); ?>

        <?= $form->field($model, 'author', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-user"></span>']],
        ])->widget(\kartik\widgets\Select2::classname(), [
            'data'          => \yii\helpers\ArrayHelper::map(
                \thienhungho\UserManagement\models\User::find()
                    ->select([
                        'id',
                        'username',
                    ])
                    ->orderBy('id')
                    ->asArray()
                    ->all(), 'id', 'username'),
            'options'       => ['placeholder' => t('app', 'Choose User')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?= $form->field($model, 'sku', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-barcode"></span>']],
        ])->textInput([
            'maxlength'   => true,
            'placeholder' => t('app', 'Sku'),
        ]) ?>

        <?= $form->field($model, 'quantity', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-cart-plus"></span>']],
        ])->widget(\kartik\number\NumberControl::classname(), [
            'value'              => 1000,
            'maskedInputOptions' => [
                'prefix' => ' ',
                'suffix' => ' ',
                'digits' => 2,
            ],
            'displayOptions'     => ['class' => 'form-control kv-monospace'],
            'saveInputContainer' => ['class' => 'kv-saved-cont'],
        ]) ?>

        <?= $form->field($model, 'unit', [
            'addon' => ['prepend' => ['content' => '<span class="glyphicon glyphicon-glass"></span>']],
        ])->widget(\kartik\widgets\Select2::classname(), [
            'data'          => \yii\helpers\ArrayHelper::map(
                \thienhungho\ProductManagement\modules\ProductBase\ProductUnit::find()
                    ->select([
                        'name',
                    ])
                    ->orderBy('name')
                    ->asArray()
                    ->all(), 'name', 'name'),
            'options'       => ['placeholder' => t('app', 'Choose Unit')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?= $form->field($model, 'smallest_unit', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-cart-plus"></span>']],
        ])->widget(\kartik\number\NumberControl::classname(), [
            'value'              => 1000,
            'maskedInputOptions' => [
                'prefix' => ' ',
                'suffix' => ' ',
                'digits' => 2,
            ],
            'displayOptions'     => ['class' => 'form-control kv-monospace'],
            'saveInputContainer' => ['class' => 'kv-saved-cont'],
        ]) ?>

        <?= $form->field($model, 'price', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-money"></span>']],
        ])->widget(\kartik\number\NumberControl::classname(), [
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
            'options'       => ['placeholder' => t('app', 'Choose Currency Unit')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?= $form->field($model, 'product_parent', [
            'addon' => ['prepend' => ['content' => '<span class="fa fa-copy"></span>']],
        ])->widget(\kartik\widgets\Select2::classname(), [
            'data'          => \yii\helpers\ArrayHelper::map(
                \thienhungho\ProductManagement\modules\ProductBase\Product::find()
                    ->select([
                        'id',
                        'title',
                    ])
                    ->where(['product_parent' => 0])
                    ->andWhere(['product_type' => $model->product_type])
                    ->orderBy('id')
                    ->asArray()
                    ->all(), 'id', 'title'),
            'options'       => ['placeholder' => t('app', 'Product Parent')],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); ?>

        <?php
        $termTypes = get_all_term_type_of_product_type($model->product_type);
        foreach ($termTypes as $termType) { ?>
            <div class="form-group">
                <label class="category-label"><?= t('app', slug_to_text($termType['name'])) ?></label>
                <?=
                \kartik\widgets\Select2::widget([
                    'addon'         => ['prepend' => ['content' => '<span class="fa fa-paperclip"></span>']],
                    'name'          => 'term_data_' . $termType['name'] . '[]',
                    'value'         => get_all_term_name_of_obj($model->product_type, $model->primaryKey, $termType['name']),
                    'data'          => \yii\helpers\ArrayHelper::map(
                        \thienhungho\TermManagement\modules\TermBase\Term::find()
                            ->select('name')
                            ->orderBy('id')
                            ->asArray()->where(['term_type' => $termType['name']])
                            ->all(), 'name', 'name'),
                    'options'       => [
                        'multiple'    => true,
                        'placeholder' => t('app', 'Choose') . ' ' . t('app', slug_to_text($termType['name'])),
                    ],
                    'pluginOptions' => [
                        'allowClear'         => true,
                        'tags'               => true,
                        'tokenSeparators'    => [','],
                        'maximumInputLength' => 225,
                    ],
                ])
                ?>
            </div>
        <?php }
        ?>

        <?php
        if (is_enable_multiple_language()) {
            echo language_select_input($form, $model, 'language');
            echo $form->field($model, 'assign_with', [
                'addon' => ['prepend' => ['content' => '<span class="fa fa-paperclip"></span>']],
            ])->widget(\kartik\widgets\Select2::classname(), [
                'data'          => \yii\helpers\ArrayHelper::map(
                    \thienhungho\ProductManagement\modules\ProductBase\Product::find()
                        ->select([
                            'id',
                            'title',
                        ])
                        ->orderBy('id')
                        ->where(['assign_with' => 0])
                        ->andWhere(['product_type' => $model->product_type])
                        ->andWhere([
                            '!=',
                            'id',
                            $model->id,
                        ])->asArray()
                        ->all(), 'id', 'title'),
                'options'       => ['placeholder' => t('app', 'Assign With')],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]);
        }
        ?>
    </div>

    <div class="col-lg-12 col-xs-12">

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

    </div>

    <?php ActiveForm::end(); ?>

</div>
