<?php

namespace thienhungho\ProductManagement\modules\ProductBase\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "{{%product_type}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \thienhungho\ProductManagement\modules\ProductBase\Product[] $products
 */
class ProductType extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * This function helps \mootensai\relation\RelationTrait runs faster
     * @return array relation names of this model
     */
    public function relationNames()
    {
        return [
            'products',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                [
                    'name',
                    'slug',
                ],
                'required',
            ],
            [
                [
                    'created_at',
                    'updated_at',
                ],
                'safe',
            ],
            [
                [
                    'created_by',
                    'updated_by',
                ],
                'integer',
            ],
            [
                ['name'],
                'string',
                'max' => 255,
            ],
            [
                ['name'],
                'unique',
            ],
            [
                ['slug'],
                'unique',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_type}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'   => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(\thienhungho\ProductManagement\modules\ProductBase\Product::className(), ['product_type' => 'name']);
    }

    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class'              => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value'              => new \yii\db\Expression('NOW()'),
            ],
        ];
    }

    /**
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\ProductTypeQuery|\yii\db\ActiveQuery
     */
    public static function find()
    {
        return new \thienhungho\ProductManagement\modules\ProductBase\query\ProductTypeQuery(get_called_class());
    }
}
