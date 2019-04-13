<?php

namespace thienhungho\ProductManagement\modules\ProductBase\query;

/**
 * This is the ActiveQuery class for [[TermOfProductType]].
 *
 * @see TermOfProductType
 */
class TermOfProductTypeQuery extends \thienhungho\ActiveQuery\models\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TermOfProductType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TermOfProductType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
