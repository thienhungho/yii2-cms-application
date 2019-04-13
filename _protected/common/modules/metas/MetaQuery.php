<?php

namespace common\modules\metas;

/**
 * This is the ActiveQuery class for [[Meta]].
 *
 * @see Meta
 */
class MetaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Meta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Meta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
