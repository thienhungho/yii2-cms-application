<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

$this->title = Yii::t('app', 'SEO Configuration') . ' - ' . Yii::t('app', 'Home Page');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SEO Configuration'), 'url' => ['/seo-configuration']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Home Page');

$seo = \common\modules\seo\Seo::find()->where(['obj_id' => 0])->andWhere(['obj_type' => 'home_page'])->one();
if (!empty($seo)) {
    $model->title = $seo->title;
    $model->description = $seo->description;
    $model->social_image = $seo->social_image;
}

?>

<?php $form = ActiveForm::begin(['id' => 'seo-general-form']); ?>

<?= $form->field($model, 'title', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
])->textInput([
    'maxlength'   => true,
    'placeholder' => Yii::t('app', 'Title'),
]) ?>

<?= $form->field($model, 'description', [
    'addon' => ['prepend' => ['content' => '<span class="fa fa-edit"></span>']],
])->textarea([
    'maxlength'   => true,
    'placeholder' => Yii::t('app', 'Description'),
]) ?>

<?= $form->field($model, 'social_image')->fileInput()
    ->widget(\kartik\file\FileInput::classname(), [
        'options'       => ['accept' => 'image/*'],
        'pluginOptions' => empty($model->social_image) ? [] : [
            'initialPreview'       => [
                '/' . $model->social_image,
            ],
            'initialPreviewAsData' => true,
            'initialCaption'       => $model->social_image,
            'overwriteInitial'     => true,
        ],
    ]);
?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn green', 'name' => 'save-button']) ?>
    </div>

<?php ActiveForm::end(); ?>