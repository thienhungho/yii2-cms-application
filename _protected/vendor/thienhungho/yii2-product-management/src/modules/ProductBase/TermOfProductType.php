<?php

namespace thienhungho\ProductManagement\modules\ProductBase;

use Yii;
use \thienhungho\ProductManagement\modules\ProductBase\base\TermOfProductType as BaseTermOfProductType;

/**
 * This is the model class for table "term_of_product_type".
 */
class TermOfProductType extends BaseTermOfProductType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['name', 'product_type'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name', 'product_type', 'input_type'], 'string', 'max' => 255],
            [['input_type'], 'default', 'value' => 'text']
        ]);
    }
	
}
