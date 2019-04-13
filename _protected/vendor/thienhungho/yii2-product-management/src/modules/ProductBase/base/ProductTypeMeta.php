<?php

namespace thienhungho\ProductManagement\modules\ProductBase\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "{{%product_type_meta}}".
 *
 * @property integer $id
 * @property string $product_type
 * @property string $name
 * @property string $input_type
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \thienhungho\ProductManagement\modules\ProductBase\ProductType $productType
 */
class ProductTypeMeta extends \yii\db\ActiveRecord
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
            [['product_type', 'name'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['product_type', 'name', 'input_type'], 'string', 'max' => 255],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product_type_meta}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_type' => Yii::t('app', 'Product Type'),
            'name' => Yii::t('app', 'Name'),
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
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\ProductTypeMetaQuery|\yii\db\ActiveQuery
     */
    public static function find()
    {
        return new \thienhungho\ProductManagement\modules\ProductBase\query\ProductTypeMetaQuery(get_called_class());
    }
}
