<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\Mail\modules\MailTransport\MailTransport */

$this->title = Yii::t('app', 'Create Mail Transport');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mail Transport'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-transport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
