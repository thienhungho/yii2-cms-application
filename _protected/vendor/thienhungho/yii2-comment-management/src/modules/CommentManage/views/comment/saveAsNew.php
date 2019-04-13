<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\CommentManagement\modules\CommentBase\Comment */

$this->title = t('app', 'Save As New {modelClass}: ', [
    'modelClass' => 'Comment',
]). ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Comment'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Save As New');
?>
<div class="comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
