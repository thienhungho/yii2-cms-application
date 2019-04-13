<?php

namespace thienhungho\ProductManagement\modules\ProductBase\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "{{%term_of_product_type}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $product_type
 * @property string $input_type
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \thienhungho\ProductManagement\modules\ProductBase\ProductType $productType
 */
class TermOfProductType extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'productType'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'product_type'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['name', 'product_type', 'input_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%term_of_product_type}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'product_type' => Yii::t('app', 'Product Type'),
            'input_type' => Yii::t('app', 'Input Type'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductType()
    {
        return $this->hasOne(\thienhungho\ProductManagement\modules\ProductBase\ProductType::className(), ['name' => 'product_type']);
    }
    
    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
        ];
    }

    /**
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\TermOfProductTypeQuery|\yii\db\ActiveQuery
     */
    public static function find()
    {
        return new \thienhungho\ProductManagement\modules\ProductBase\query\TermOfProductTypeQuery(get_called_class());
    }
}
