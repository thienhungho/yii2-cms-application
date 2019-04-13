<?php

use yii\helpers\Html;

//
///* @var $this \yii\web\View view component instance */
///* @var $message \yii\mail\MessageInterface the message being composed */
///* @var $content string main view render result */
//?>
<?php //$this->beginPage() ?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">--><!--<html xmlns="http://www.w3.org/1999/xhtml">--><!--<head>--><!--    <meta name="viewport" content="width=device-width" />--><!--    <meta http-equiv="Content-Type" content="text/html; charset=--><? //= Yii::$app->charset ?><!--" />--><!--    <title>--><? //= Html::encode($this->title) ?><!--</title>--><!--    --><?php //$this->head() ?>
<!--</head>--><!--<body>-->
<?php //$this->beginBody() ?>
<? //= $content ?>
<? //= $this->params['mailer_transport']->signature ?>
<?php //$this->endBody() ?>
<!--<div class="footer">--><!--    <table border="0" cellpadding="0" cellspacing="0">--><!--        <tr>--><!--            <td class="content-block">--><!--                <span class="apple-link">Company Inc, 3 Abbey Road, San Francisco CA 94102</span>--><!--                <br> Don't like these emails?--><!--                <a href="http://i.imgur.com/CScmqnj.gif">Unsubscribe</a>.--><!--            </td>--><!--        </tr>--><!--        <tr>--><!--            <td class="content-block powered-by">--><!--                Powered by <a href="http://htmlemail.io">TheCatDev</a>.--><!--            </td>--><!--        </tr>--><!--    </table>--><!--</div>--><!--</body>--><!--</html>-->
<?php //$this->endPage() ?>


<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= Html::encode($this->title) ?></title>
    <style>
        /* -------------------------------------
            INLINED WITH htmlemail.io/inline
        ------------------------------------- */
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width : 620px) {
            table[class=body] h1 {
                font-size     : 28px !important;
                margin-bottom : 10px !important;
            }

            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size : 16px !important;
            }

            table[class=body] .wrapper,
            table[class=body] .article {
                padding : 10px !important;
            }

            table[class=body] .content {
                padding : 0 !important;
            }

            table[class=body] .container {
                padding : 0 !important;
                width   : 100% !important;
            }

            table[class=body] .main {
                border-left-width  : 0 !important;
                border-radius      : 0 !important;
                border-right-width : 0 !important;
            }

            table[class=body] .btn table {
                width : 100% !important;
            }

            table[class=body] .btn a {
                width : 100% !important;
            }

            table[class=body] .img-responsive {
                height    : auto !important;
                max-width : 100% !important;
                width     : auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width : 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height : 100%;
            }

            .apple-link a {
                color           : inherit !important;
                font-family     : inherit !important;
                font-size       : inherit !important;
                font-weight     : inherit !important;
                line-height     : inherit !important;
                text-decoration : none !important;
            }

            .btn-primary table td:hover {
                background-color : #34495e !important;
            }

            .btn-primary a:hover {
                background-color : #34495e !important;
                border-color     : #34495e !important;
            }
        }
    </style>
</head>
<body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
<table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
            <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

                <div style="text-align: center; margin-bottom: 16px; margin-top: 20px">
                    <a href="<?= \yii\helpers\Url::base(true); ?>"><img style="max-width: 200px;" src="https://docs.google.com/uc?export=download&id=1xGtTF0c7jDHRYKwbPMdXGY4MLofkTYMi&revid=0BxnKYqCk-nM1dk0vQndnNE9XK0lnZmFVdXBBZTM3ZjZGVjFzPQ" alt="">
                    </a>
                </div>
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader" style="height: auto; width: 100%;display: block;text-align: center;padding: 20px 5px;background-color: gainsboro;color: white;font-weight: bold"><?= $this->params['title'] ?></span>
                <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                <tr>
                                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                                <tr>
                                    <td style="margin: 0px; word-wrap: break-word; font-size: 0px;">
                                        <div style="font-size: 1px; line-height: 44px; white-space: nowrap;">&nbsp;
                                        </div>
                                    </td>
                                </tr>
                                <?= $content ?>
                                <tr>
                                    <td style="margin: 0px; word-wrap: break-word; font-size: 0px;">
                                        <div style="font-size: 1px; line-height: 44px; white-space: nowrap;">&nbsp;
                                        </div>
                                    </td>
                                </tr>
                                <?= $this->params['mailer_transport']->signature ?>
                                </td></tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                        <tr>
                            <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;"><?= Yii::t('app', 'This email was sent to: ') ?></span>
                                <a href="mailto:<?= $this->params['to_email'] ?>" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;"><?= $this->params['to_email'] ?></a>.
                                <br><?= Yii::t('app', "Don't like these emails?") ?>
                                <a href="http://i.imgur.com/CScmqnj.gif" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;"><?= Yii::t('app', "unsubscribe") ?></a>.
                            </td>
                        </tr>
                        <tr>
                            <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                <div style="text-align: center; margin-bottom: 10px">
                                    <a href="<?= \yii\helpers\Url::base(true); ?>"><img style="max-width: 50px; filter: grayscale(100%);" src="https://docs.google.com/uc?export=download&id=1xGtTF0c7jDHRYKwbPMdXGY4MLofkTYMi&revid=0BxnKYqCk-nM1dk0vQndnNE9XK0lnZmFVdXBBZTM3ZjZGVjFzPQ" alt=""></a>
                                </div>
                                © <?= Yii::t('app', 'Copyright') ?> <?= date('Y') ?> <?= get_app_name() ?>
                                <br /><?= Yii::t('app', 'Powered by') ?>
                                <a href="http://thecatdev.com" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">TheCatDev</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
    </tr>
</table>
</body>
</html>