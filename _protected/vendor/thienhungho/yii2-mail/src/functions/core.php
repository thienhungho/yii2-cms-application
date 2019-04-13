<?php
/**
 * @param $name
 *
 * @return bool
 */
function is_mailer_transport($name)
{
    return \thienhungho\Mail\modules\MailTransport\MailTransport::find()
        ->where(['name' => $name])
        ->exists();
}

/**
 * @param $name
 *
 * @return array|\BaseApp\mail\modules\MailTransport\MailTransport|\BaseApp\mail\modules\MailTransport\query\MailTransport|null
 */
function get_mailer_transport($name)
{
    return \thienhungho\Mail\modules\MailTransport\MailTransport::find()
        ->where(['name' => $name])
        ->one();
}

/**
 * @param $transport_name
 * @param $from_name
 * @param $to
 * @param $subject
 * @param $body
 * @param string $body_type
 * @param string $view
 * @param array $view_params
 *
 * @return \BaseApp\mail\modules\Mail\Mailer|bool
 * @throws \yii\base\InvalidConfigException
 */
function send_mail($transport_name, $from_name, $to, $subject, $body, $body_type = 'text', $view = '/mail/default/html', $view_params = [])
{
    $mailer = false;
    $mailer_transport = get_mailer_transport($transport_name);
    if (!empty($mailer_transport)) {
        $mailer = new \thienhungho\Mail\modules\Mail\Mailer();
        $mailer->setTransport([
            'class'      => 'Swift_SmtpTransport',
            'host'       => $mailer_transport->host,
            'username'   => $mailer_transport->username,
            'password'   => $mailer_transport->password,
            'port'       => $mailer_transport->port,
            'encryption' => $mailer_transport->encryption,
        ]);
        $mailer->view->params = $view_params;
        $mailer->view->params['mailer_transport'] = $mailer_transport;
        $mailer->view->params['from_email'] = $mailer_transport->username;
        $mailer->view->params['to_email'] = $to;
        if ($body_type == 'text') {
            return $mailer->compose($view, [
                'content' => $body
            ])->setFrom([$mailer_transport->username => $from_name])
                ->setTo($to)
                ->setSubject($subject)
                ->send();
        } else {
            return $mailer->compose($view, [
                'content' => $body
            ])->setFrom([$mailer_transport->username => $from_name])
                ->setTo($to)
                ->setSubject($subject)
                ->send();
        }
    }

    return $mailer;
}