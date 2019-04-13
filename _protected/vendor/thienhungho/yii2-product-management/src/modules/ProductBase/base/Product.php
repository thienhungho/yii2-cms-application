<?php

namespace thienhungho\ProductManagement\modules\ProductBase\base;

use thienhungho\Cart\models\Cart;
use thienhungho\OrderManagement\models\OrderItem;
use thienhungho\UserManagement\models\User;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "{{%product}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property integer $author
 * @property string $feature_img
 * @property string $sku
 * @property integer $quantity
 * @property string $status
 * @property string $comment_status
 * @property string $rating_status
 * @property double $promotional_price
 * @property double $price
 * @property string $unit
 * @property string $gallery
 * @property integer $product_parent
 * @property string $product_type
 * @property string $language
 * @property integer $assign_with
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 *
 * @property \thienhungho\ProductManagement\modules\ProductBase\Cart[] $carts
 * @property \thienhungho\ProductManagement\modules\ProductBase\OrderItem[] $orderItems
 * @property \thienhungho\ProductManagement\modules\ProductBase\User $author0
 */
class Product extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'carts',
            'orderItems',
            'author0'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'description', 'content'], 'required'],
            [['description', 'content'], 'string'],
            [['author', 'product_parent', 'assign_with', 'created_by', 'updated_by'], 'integer'],
            [['promotional_price', 'price', 'quantity', 'smallest_unit'], 'number'],
            [['created_at', 'updated_at', 'gallery'], 'safe'],
            [['title', 'slug', 'feature_img', 'sku', 'status', 'unit', 'currency_unit', 'product_type', 'language'], 'string', 'max' => 255],
            [['comment_status', 'rating_status'], 'string', 'max' => 25],
            [['slug'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'description' => Yii::t('app', 'Description'),
            'content' => Yii::t('app', 'Content'),
            'author' => Yii::t('app', 'Author'),
            'feature_img' => Yii::t('app', 'Feature Img'),
            'sku' => Yii::t('app', 'Sku'),
            'quantity' => Yii::t('app', 'Quantity'),
            'status' => Yii::t('app', 'Status'),
            'comment_status' => Yii::t('app', 'Comment Status'),
            'rating_status' => Yii::t('app', 'Rating Status'),
            'promotional_price' => Yii::t('app', 'Promotional Price'),
            'price' => Yii::t('app', 'Price'),
            'unit' => Yii::t('app', 'Unit'),
            'currency_unit' => Yii::t('app', 'Currency Unit'),
            'gallery' => Yii::t('app', 'Gallery'),
            'product_parent' => Yii::t('app', 'Product Parent'),
            'product_type' => Yii::t('app', 'Product Type'),
            'language' => Yii::t('app', 'Language'),
            'assign_with' => Yii::t('app', 'Assign With'),
            'smallest_unit' => Yii::t('app', 'Smallest Unit'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['product' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['product' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(User::className(), ['id' => 'author']);
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
     * @return \thienhungho\ProductManagement\modules\ProductBase\query\ProductQuery|\yii\db\ActiveQuery
     */
    public static function find()
    {
        return new \thienhungho\ProductManagement\modules\ProductBase\query\ProductQuery(get_called_class());
    }
}
