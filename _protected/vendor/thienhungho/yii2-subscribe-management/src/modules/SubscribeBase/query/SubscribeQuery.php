<?php

namespace thienhungho\Subscribes\modules\SubscribeBase\query;

/**
 * This is the ActiveQuery class for [[\thienhungho\Subscribes\modules\SubscribeBase\query\Subscribe]].
 *
 * @see \thienhungho\Subscribes\modules\SubscribeBase\query\Subscribe
 */
class SubscribeQuery extends \thienhungho\ActiveQuery\models\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \thienhungho\Subscribes\modules\SubscribeBase\query\Subscribe[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \thienhungho\Subscribes\modules\SubscribeBase\query\Subscribe|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
