<?php

namespace thienhungho\Mail\modules\Mail;

use yii\swiftmailer\Mailer as BaseMailer;

/**
 * MailModules module definition class
 */
class Mailer extends BaseMailer
{
    /**
     *
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @param array|\Swift_Transport $transport
     *
     * @throws \yii\base\InvalidConfigException
     */
    public function setTransport($transport)
    {
        parent::setTransport($transport);
    }

    /***
     * @param string $path
     */
    public function setViewPath($path)
    {
        parent::setViewPath($path);
    }

    /**
     * @param array|\yii\web\View $view
     *
     * @throws \yii\base\InvalidConfigException
     */
    public function setView($view)
    {
        parent::setView($view);
    }
}
