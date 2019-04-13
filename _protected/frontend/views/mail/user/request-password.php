<?php
use yii\helpers\Html;

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $this->params['user']->password_reset_token]);
?>
<table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0" style="caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 13px; text-size-adjust: auto;">
    <tbody>
    <tr>
        <td align="center" style="margin: 0px; word-wrap: break-word; font-size: 0px;">
            <table role="presentation" cellpadding="0" cellspacing="0" align="center" border="0">
                <tbody>
                <tr>
                    <td style="margin: 0px; width: 50px;"><img alt="" src="https://ci5.googleusercontent.com/proxy/DpBDrnq7ERRkjhuIcWLt1tUkYYR6KCg7xoWKO-pekseSpqE4aWtNL6K6fJBH458CndMhJZBVOIFVBcUmFGP7brjjRDlHsWj_ShvQ5MOTBda5LSlsGewZhePcUY2FSKDeJkPPwrHEciE-4jIuRAmJFbL_sU8NV356GxChgU0=s0-d-e1-ft#https://gallery.mailchimp.com/abe06dc13e285fc9518995052/images/bc134586-45a5-439a-b51e-023c13c80bce.png" width="50" class="CToWUd" style="border-radius: 0px; display: block; font-size: 13px; outline: none; width: 50px; height: auto;"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td style="margin: 0px; word-wrap: break-word; font-size: 0px;">
            <div style="font-size: 1px; line-height: 25px; white-space: nowrap;">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td align="center" style="margin: 0px; word-wrap: break-word; font-size: 0px; padding-right: 27px; padding-left: 27px;">
            <div style="color: rgb(0, 0, 0); font-family: -apple-system, Roboto, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 30px; line-height: 37.5px;">
                <div class="m_-4966633496660120523main__text-h1"><?= Yii::t('app', 'Forgot your password?') ?>&nbsp;</div>
            </div>
        </td>
    </tr>
    <tr>
        <td style="margin: 0px; word-wrap: break-word; font-size: 0px;">
            <div style="font-size: 1px; line-height: 8px; white-space: nowrap;">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td align="center" style="margin: 0px; word-wrap: break-word; font-size: 0px; padding-right: 27px; padding-left: 27px;">
            <div style="color: rgb(127, 138, 148); font-family: -apple-system, Roboto, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px;">
                <div class="m_-4966633496660120523main__text">
                    <div style="text-align: left;">
                        <p style="text-align: center;">&nbsp;<?= Yii::t('app', "It's OK! Click on the button below to set a new password for your account.") ?>&nbsp;<br><br><?= Yii::t('app', "If you didn't ask to reset your password, simply ignore this email.") ?></u>.</p>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td style="margin: 0px; word-wrap: break-word; font-size: 0px;">
            <div style="font-size: 1px; line-height: 10px; white-space: nowrap;">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td style="margin: 0px; word-wrap: break-word; font-size: 0px; padding-right: 54px; padding-left: 54px;">
            <div style="margin: 0px auto; max-width: 250px;">
                <table role="presentation" cellpadding="0" cellspacing="0" style="width: 250px;">
                    <tbody>
                    <tr style="vertical-align: top;">
                        <td height="40" background="https://ci5.googleusercontent.com/proxy/bSkj_W8H3KVcm4gxrvzfHX2FHUubsdjdrj_OzYwNGYjOECJPXLNac_FAsgZdwBjj-VmnWa7VoVskVTOG9Ccb0juyICZ3aLFBhjYQj7dgOErVkDnPQ-A3XINa6pJwS-MATKPe2ZZ9nLmtDbSjv-v-Dow_=s0-d-e1-ft#http://static.inter1ads.com/contents/s/11/d6/ec/11ef4ee3435716c315ba8d8696/0902289819760.png" style="margin: 0px; vertical-align: top; background-image: url(&quot;https://ci5.googleusercontent.com/proxy/bSkj_W8H3KVcm4gxrvzfHX2FHUubsdjdrj_OzYwNGYjOECJPXLNac_FAsgZdwBjj-VmnWa7VoVskVTOG9Ccb0juyICZ3aLFBhjYQj7dgOErVkDnPQ-A3XINa6pJwS-MATKPe2ZZ9nLmtDbSjv-v-Dow_=s0-d-e1-ft#http://static.inter1ads.com/contents/s/11/d6/ec/11ef4ee3435716c315ba8d8696/0902289819760.png&quot;); background-color: rgb(160, 240, 70); padding-right: 10px; padding-left: 10px; background-position: center center; background-repeat: no-repeat;">
                            <div class="m_-4966633496660120523mj-hero-content" style="margin: 0px auto; width: 230px; background-color: transparent;">
                                <table role="presentation" cellpadding="0" cellspacing="0" style="width: 230px; margin: 0px;">
                                    <tbody>
                                    <tr>
                                        <td style="margin: 0px;">
                                            <table role="presentation" style="width: 230px; margin: 0px;">
                                                <tbody>
                                                <tr style="margin: 0px; padding: 0px; border: 0px; text-align: center; border-collapse: collapse;">
                                                    <td style="font-family: -apple-system, Roboto, &quot;Helvetica Neue&quot;, &quot;Trebuchet MS&quot;, sans-serif; margin: 0px; padding-top: 10px; padding-bottom: 10px; border: 0px; border-collapse: collapse; color: white !important; font-size: 16px; line-height: 19.2px; text-transform: uppercase; font-weight: bold; text-decoration: none !important;"><a href="<?= $resetLink ?>" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://publishers.propellerads.com/%23/pub/auth/resetPassword?token%3DODUyMjU1NjE0MjI0NzM5NjMzODczZjMyNWY2NzVlMmQwYjRiMjMwYzJiYWQ3YmI3ODg3NTc0OTk2NWYyMTgyZQ&amp;source=gmail&amp;ust=1537165651075000&amp;usg=AFQjCNFGI3y8oziNDvWSMvlcaS9H8p5EJQ" style="color: rgb(0, 0, 0);">SET NEW PASSWORD</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </td>
    </tr>
    <tr>
        <td style="margin: 0px; word-wrap: break-word; font-size: 0px;">
            <div style="font-size: 1px; line-height: 30px; white-space: nowrap;">&nbsp;</div>
        </td>
    </tr>
    <tr>
        <td align="center" style="margin: 0px; word-wrap: break-word; font-size: 0px; padding-right: 27px; padding-left: 27px;">
            <div style="color: rgb(127, 138, 148); font-family: -apple-system, Roboto, &quot;Helvetica Neue&quot;, &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px; line-height: 25.6px;">
                <div class="m_-4966633496660120523main__text"><?= Yii::t('app', 'Yours') ?>, <?= get_app_name() ?> Team</div>
            </div>
        </td>
    </tr>
    </tbody>
</table>