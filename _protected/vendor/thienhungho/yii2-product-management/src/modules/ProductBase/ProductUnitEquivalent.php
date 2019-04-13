<?php

namespace thienhungho\ProductManagement\modules\ProductBase;

use Yii;
use \thienhungho\ProductManagement\modules\ProductBase\base\ProductUnitEquivalent as BaseProductUnitEquivalent;

/**
 * This is the model class for table "product_unit_equivalent".
 */
class ProductUnitEquivalent extends BaseProductUnitEquivalent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['product_unit_1', 'product_unit_1_value', 'product_unit_2', 'product_unit_2_value', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe']
        ]);
    }
	
}
