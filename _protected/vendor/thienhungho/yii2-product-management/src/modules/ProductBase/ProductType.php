<?php

namespace thienhungho\ProductManagement\modules\ProductBase;

use \thienhungho\ProductManagement\modules\ProductBase\base\ProductType as BaseProductType;

/**
 * This is the model class for table "product_type".
 */
class ProductType extends BaseProductType
{
    /**
     * @return array
     */
    public function behaviors()
    {
        parent::behaviors();
        return [
            [
                'class'         => 'yii\behaviors\SluggableBehavior',
                'attribute'     => 'name',
                'immutable'     => true,
                'ensureUnique'  => true,
                'slugAttribute' => 'slug',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['name', 'slug'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['slug'], 'unique'],
            [['created_by', 'updated_by'], 'default', 'value' => get_current_user_id()]
        ]);
    }
	
}
