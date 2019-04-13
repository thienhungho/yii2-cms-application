<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model thienhungho\Mail\modules\MailTransport\MailTransport */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mail Transport',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mail Transport'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mail-transport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
