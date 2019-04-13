<?php
namespace thienhungho\Mail\models;

use thienhungho\Mail\models\MailTransport;
use Yii;
use yii\base\Model;

/**
 * Login form
 */
class TestMailTransportForm extends Model
{
    public $to_email;
    public $mail_transport_id;

    private $_mail_transport;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['to_email', 'mail_transport_id'], 'required'],
            [['to_email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'to_email' => Yii::t('app', 'To Email'),
            'mail_transport_id' => Yii::t('app', 'Mail Transport Id'),
        ];
    }

    /**
     * @return bool
     * @throws \yii\base\Exception
     */
    public function testMailTransport()
    {
        if ($this->validate()) {
            $mail_transport = $this->getMailTransport();
            return send_mail(
                $mail_transport->name,
                get_app_name(),
                $this->to_email,
                t('mail', 'Test Mail Transport') . ' ' . $mail_transport->host,
                t('app', 'Email send success')
            );
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getMailTransport()
    {
        if ($this->_mail_transport === null) {
            $this->_mail_transport = MailTransport::find()
                ->where(['id' => $this->mail_transport_id])
                ->one();
        }

        return $this->_mail_transport;
    }
}
