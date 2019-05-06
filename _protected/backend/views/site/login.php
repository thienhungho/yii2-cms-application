<?php
$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html><!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]--><!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]--><!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title><?= t('app', 'Login Page') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/cat-admin/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/cat-admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/cat-admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.thecatdev.com/mtn/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="http://cdn.thecatdev.com/mtn/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.thecatdev.com/mtn/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="http://cdn.thecatdev.com/mtn/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="http://cdn.thecatdev.com/mtn/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="http://cdn.thecatdev.com/mtn/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <?= favicon() ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-2 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img style="max-width: 240px;" class="login-logo login-6" src="/uploads/thecatdev-logo-dark.PNG" />
            <div class="login-content">
                <style>
                    #login-form > div.form-group.field-loginform-rememberme {
                        margin-left : 20px;
                    }

                    .backstretch {
                        background-color : black !important;
                        background-image : url("http://cdn.thecatdev.com/mtn/pages/img/login/bg3.jpg");
                        background-position : center center;
                        background-size : cover;
                    }
                </style>
                <h1><?= t('app', 'Login Page') ?></h1>
                <p><?= t('app', 'Welcome to your dashboard. Please login to countinue') ?></p>
                <?php $form = \kartik\form\ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <!--                --><? //= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())->label(false) ?>

                <?= Yii::t('app', 'If you forgot your password you can') ?>

                <?= \yii\helpers\Html::a(Yii::t('app', 'reset it'), ['site/request-password-reset']) ?>.

                <?= Yii::t('app', 'Or') ?>

                <?= \yii\helpers\Html::a(Yii::t('app', 'Signup'), ['site/signup']) ?>.

                <hr />

                <div class="form-group">
                    <?= \yii\helpers\Html::submitButton(Yii::t('app', 'Login'), [
                        'class' => 'btn btn-primary',
                        'name'  => 'login-button',
                    ]) ?>
                </div>

                <?php \kartik\form\ActiveForm::end(); ?>
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;"> <i class="icon-social-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:;"> <i class="icon-social-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:;"> <i class="icon-social-dribbble"></i> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p><?= Yii::t('app','Copyright') ?> &copy; TheCatDev <?= date('Y') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-reset">
            <div class="login-bg"></div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-2 --><!--[if lt IE 9]>
<script src="http://cdn2.thecatdev.com/mtn/global/plugins/respond.min.js"></script>
<script src="http://cdn2.thecatdev.com/mtn/global/plugins/excanvas.min.js"></script>
<script src="http://cdn2.thecatdev.com/mtn/assets/global/plugins/ie8.fix.min.js"></script><![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="http://cdn2.thecatdev.com/mtn/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="http://cdn2.thecatdev.com/mtn/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://cdn3.thecatdev.com/mtn/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="http://cdn3.thecatdev.com/mtn/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="http://cdn3.thecatdev.com/mtn/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="http://cdn3.thecatdev.com/mtn/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="http://cdn4.thecatdev.com/mtn/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="http://cdn4.thecatdev.com/mtn/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="http://cdn4.thecatdev.com/mtn/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="http://cdn4.thecatdev.com/mtn/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="http://cdn5.thecatdev.com/mtn/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="http://cdn5.thecatdev.com/mtn/pages/scripts/login-5.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function () {
        $('#clickmewow').click(function () {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
</body>

</html>