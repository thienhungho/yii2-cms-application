<?php

namespace thienhungho\ProductManagement\modules\ProductBase;

use Yii;
use \thienhungho\ProductManagement\modules\ProductBase\base\ProductUnit as BaseProductUnit;

/**
 * This is the model class for table "product_unit".
 */
class ProductUnit extends BaseProductUnit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique']
        ]);
    }
	
}
