<?php

namespace common\modules\seo;

/**
 * This is the ActiveQuery class for [[\common\modules\seos\Seo]].
 *
 * @see \common\modules\seo\Seo
 */
class SeoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\modules\seo\Seo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\modules\seo\Seo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
