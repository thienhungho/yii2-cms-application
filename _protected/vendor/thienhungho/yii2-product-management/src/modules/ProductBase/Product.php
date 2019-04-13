<?php

namespace thienhungho\ProductManagement\modules\ProductBase;

use \thienhungho\ProductManagement\modules\ProductBase\base\Product as BaseProduct;

/**
 * This is the model class for table "product".
 */
class Product extends BaseProduct
{
    const PRODUCT_TYPE_PRODUCT = 'product';
    const UNIT_1_PRODUCT = 'Product';

    /**
     * @return array
     */
    public function behaviors()
    {
        parent::behaviors();
        return [
            [
                'class'         => 'yii\behaviors\SluggableBehavior',
                'attribute'     => 'title',
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
            [['title', 'slug', 'description', 'content'], 'required'],
            [['description', 'content'], 'string'],
            [['author', 'product_parent', 'assign_with', 'created_by', 'updated_by'], 'integer'],
            [['promotional_price', 'price', 'quantity', 'smallest_unit'], 'number'],
            [['created_at', 'updated_at', 'gallery'], 'safe'],
            [['title', 'slug', 'feature_img', 'sku', 'status', 'unit', 'currency_unit', 'product_type', 'language'], 'string', 'max' => 255],
            [['comment_status', 'rating_status'], 'string', 'max' => 25],
            [['slug'], 'unique'],
            [['status'], 'default', 'value' => STATUS_PUBLIC],
            [['comment_status'], 'default', 'value' => STATUS_ENABLE],
            [['rating_status'], 'default', 'value' => STATUS_ENABLE],
            [['assign_with'], 'default', 'value' => 0],
            [['product_parent'], 'default', 'value' => 0],
            [['created_by'], 'default', 'value' => get_current_user_id()],
            [['updated_by'], 'default', 'value' => get_current_user_id()],
            [['author'], 'default', 'value' => get_current_user_id()],
            [['language'], 'default', 'value' => get_primary_language()],
            [['feature_img'], 'default', 'value' => DEFAULT_FEATURE_IMG],
            [['product_type'], 'default', 'value' => self::PRODUCT_TYPE_PRODUCT],
            [['unit'], 'default', 'value' => self::UNIT_1_PRODUCT],
            [['currency_unit'], 'default', 'value' => 'USD'],
            [['quantity'], 'default', 'value' => -1],
            [['smallest_unit'], 'default', 'value' => 1]
        ]);
    }

    /**
     * @param bool $insert
     *
     * @return bool
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $feature_img = upload_img('Product[feature_img]');
            if (!empty($feature_img)) {
                $this->feature_img = $feature_img;
            } elseif(empty($feature_img) && !$this->isNewRecord) {
                $model = static::findOne(['id' => $this->id]);
                if ($model) {
                    $this->feature_img = $model->feature_img;
                }
            }

            $gallery = upload_img('Product[gallery]', true);
            if (!empty($gallery)) {
                $this->gallery = json_encode($gallery);
            } elseif (empty($gallery) && !$this->isNewRecord) {
                $model = static::findOne(['id' => $this->id]);
                if ($model) {
                    $this->gallery = $model->gallery;
                }
            }

            return true;
        }

        return false;
    }
	
}
