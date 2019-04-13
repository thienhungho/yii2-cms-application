<?php

namespace thienhungho\SupplierManagement\modules\SupplierBase\query;

/**
 * This is the ActiveQuery class for [[\thienhungho\SupplierManagement\modules\SupplierBase\query\Supplier]].
 *
 * @see \thienhungho\SupplierManagement\modules\SupplierBase\query\Supplier
 */
class SupplierQuery extends \thienhungho\ActiveQuery\models\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \thienhungho\SupplierManagement\modules\SupplierBase\query\Supplier[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \thienhungho\SupplierManagement\modules\SupplierBase\query\Supplier|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
