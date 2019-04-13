<?php
namespace backend\controllers;

use common\models\PasswordResetRequestForm;
use common\models\ResetPasswordForm;
use Yii;
use backend\models\LoginForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

/**
 * Site controller
 */
class SiteController extends \common\controllers\SiteController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        set_flash('welcome_to_your_dashboard', $array = [
            'type'     => 'info',
            'duration' => 3000,
            'icon'     => 'glyphicon glyphicon-info-sign',
            'title'    => t('app', 'Hi!') . ' @' . Yii::$app->user->identity->username,
            'message'  => t('app', 'Welcome to your dashboard'),
        ]);
        $this->layout = 'main2';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (is_login()) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(request()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->renderPartial('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\InvalidConfigException
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash(
                    'success', 'Check your email for further instructions.'
                );

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash(
                    'error', 'Sorry, we are unable to reset password for the provided email address.'
                );
            }
        }

        return $this->renderPartial('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * @param $token
     *
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->renderPartial('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function actionTest()
    {
        echo send_mail(
            'no-reply',
            get_app_name(),
            'thienhungho@gmail.comh',
            'Test Email Server',
            'Test EMail',
            'html',
            '/mail/contact/html',
            [
                'title' => 'Test Title',
                'contact_name' => 'Hung',
                'contact_email' => 'Ho',
            ]
        );
        exit();
    }
}
