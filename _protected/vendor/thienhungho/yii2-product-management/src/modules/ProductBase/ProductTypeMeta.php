<?php

namespace thienhungho\ProductManagement\modules\ProductBase;

use Yii;
use \thienhungho\ProductManagement\modules\ProductBase\base\ProductTypeMeta as BaseProductTypeMeta;

/**
 * This is the model class for table "product_type_meta".
 */
class ProductTypeMeta extends BaseProductTypeMeta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['product_type', 'name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['product_type', 'name', 'input_type'], 'string', 'max' => 255],
            [['name'], 'unique']
        ]);
    }
	
}
