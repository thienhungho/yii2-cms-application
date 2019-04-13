<?php

namespace thienhungho\Mail\modules\MailTransport\query;

/**
 * This is the ActiveQuery class for [[\thienhungho\Mail\modules\MailTransport\query\MailTransport]].
 *
 * @see \thienhungho\Mail\modules\MailTransport\query\MailTransport
 */
class MailTransportQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \thienhungho\Mail\modules\MailTransport\query\MailTransport[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \thienhungho\Mail\modules\MailTransport\query\MailTransport|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
