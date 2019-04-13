<?php

namespace thienhungho\ProductManagement\modules\ProductBase\query;

/**
 * This is the ActiveQuery class for [[\thienhungho\ProductManagement\modules\ProductBase\query\ProductUnit]].
 *
 * @see \thienhungho\ProductManagement\modules\ProductBase\query\ProductUnit
 */
class ProductUnitQuery extends \thienhungho\ActiveQuery\models\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\ProductUnit[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\ProductUnit|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
