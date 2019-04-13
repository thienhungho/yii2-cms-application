<?php

namespace thienhungho\Mail\modules\MailTransport;

use Yii;
use \thienhungho\Mail\modules\MailTransport\base\MailTransport as BaseMailTransport;

/**
 * This is the model class for table "mail_transport".
 */
class MailTransport extends BaseMailTransport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['name', 'host', 'username', 'password'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name', 'host', 'username', 'password', 'port', 'encryption'], 'string', 'max' => 255],
            [['signature'], 'string'],
            [['name'], 'unique']
        ]);
    }
	
}
