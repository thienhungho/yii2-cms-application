<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model thienhungho\SupplierManagement\modules\SupplierBase\Supplier */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Supplier'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Supplier').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'user_id',
        'avatar',
        'name',
        'phone',
        'email:email',
        'website',
        'birth_date',
        'gender',
        'relationship_status',
        'vat_number',
        'language',
        'address:ntext',
        'country',
        'city',
        'state',
        'zip_code',
        'date_join',
        'date_left',
        'status',
        'type',
        'currency',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
