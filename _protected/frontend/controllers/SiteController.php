<?php
namespace frontend\controllers;

use Yii;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends \common\controllers\SiteController
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string|\yii\web\Response
     * @throws \yii\base\InvalidConfigException
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['supportEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function actionTest()
    {
        echo send_mail(
            'no-reply',
            get_app_name(),
            'support@thecatdev.com',
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
