<?php

namespace thienhungho\ProductManagement\modules\ProductBase\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "product_unit_equivalent".
 *
 * @property integer $id
 * @property integer $product_unit_1
 * @property integer $product_unit_1_value
 * @property integer $product_unit_2
 * @property integer $product_unit_2_value
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \thienhungho\ProductManagement\modules\ProductBase\ProductUnit $productUnit1
 * @property \thienhungho\ProductManagement\modules\ProductBase\ProductUnit $productUnit2
 */
class ProductUnitEquivalent extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'productUnit1',
            'productUnit2'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_unit_1', 'product_unit_1_value', 'product_unit_2', 'product_unit_2_value', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_unit_equivalent';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_unit_1' => Yii::t('app', 'Product Unit 1'),
            'product_unit_1_value' => Yii::t('app', 'Product Unit 1 Value'),
            'product_unit_2' => Yii::t('app', 'Product Unit 2'),
            'product_unit_2_value' => Yii::t('app', 'Product Unit 2 Value'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductUnit1()
    {
        return $this->hasOne(\thienhungho\ProductManagement\modules\ProductBase\ProductUnit::className(), ['id' => 'product_unit_1']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductUnit2()
    {
        return $this->hasOne(\thienhungho\ProductManagement\modules\ProductBase\ProductUnit::className(), ['id' => 'product_unit_2']);
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
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }


    /**
     * @inheritdoc
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\ProductUnitEquivalentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \thienhungho\ProductManagement\modules\ProductBase\query\ProductUnitEquivalentQuery(get_called_class());
    }
}
