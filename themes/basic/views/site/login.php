<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="/"><?= Yii::t('app', 'Home') ?></a>
                        </li>
                        <li class="active">
                            <a href="<?= get_current_url() ?>"><?= Yii::t('app', 'Login') ?></a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?= Yii::t('app', 'Login') ?></h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>

<section class="login_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="cardify login">
                        <div class="login--header">
                            <h3><?= Yii::t('app', 'Welcome Back') ?></h3>
                            <p><?= Yii::t('app', 'You can sign in with your username') ?></p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <?= $form->field($model, 'rememberMe')->checkbox() ?>

                            <style>
                                #loginform-rememberme{
                                    margin-right: 10px;
                                    vertical-align: middle;
                                }
                            </style>

                            <button class="btn btn--md btn--round" type="submit"><?= Yii::t('app', 'Login Now') ?></button>

                            <div class="login_assist">
                                <p class="recover">Lost your
                                    <a href="#">username</a> or
                                    <a href="#">password</a>?</p>
                                <p class="signup"><?= Yii::t('app', "Don't have an") ?>
                                    <a href="<?= url(['/site/signup']) ?>"><?= Yii::t('app', "account") ?></a>?</p>
                            </div>
                        </div>
                        <!-- end .login--form -->
                    </div>
                    <!-- end .cardify -->
                <?php ActiveForm::end(); ?>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
