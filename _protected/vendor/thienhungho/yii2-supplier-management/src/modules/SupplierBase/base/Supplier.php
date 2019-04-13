<?php

namespace thienhungho\SupplierManagement\modules\SupplierBase\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the base model class for table "supplier".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $avatar
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $website
 * @property string $birth_date
 * @property string $gender
 * @property string $relationship_status
 * @property string $vat_number
 * @property string $language
 * @property string $address
 * @property string $country
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $date_join
 * @property string $date_left
 * @property string $status
 * @property string $type
 * @property string $currency
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Supplier extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'user'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_by', 'updated_by'], 'integer'],
            [['name', 'phone', 'email'], 'required'],
            [['birth_date', 'date_join', 'date_left', 'created_at', 'updated_at'], 'safe'],
            [['address'], 'string'],
            [['avatar', 'name', 'phone', 'email', 'website', 'relationship_status', 'vat_number', 'language', 'country', 'city', 'state', 'zip_code', 'status', 'type', 'currency'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 55],
            [['name'], 'unique'],
            [['phone'], 'unique'],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'avatar' => Yii::t('app', 'Avatar'),
            'name' => Yii::t('app', 'Name'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'website' => Yii::t('app', 'Website'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'gender' => Yii::t('app', 'Gender'),
            'relationship_status' => Yii::t('app', 'Relationship Status'),
            'vat_number' => Yii::t('app', 'Vat Number'),
            'language' => Yii::t('app', 'Language'),
            'address' => Yii::t('app', 'Address'),
            'country' => Yii::t('app', 'Country'),
            'city' => Yii::t('app', 'City'),
            'state' => Yii::t('app', 'State'),
            'zip_code' => Yii::t('app', 'Zip Code'),
            'date_join' => Yii::t('app', 'Date Join'),
            'date_left' => Yii::t('app', 'Date Left'),
            'status' => Yii::t('app', 'Status'),
            'type' => Yii::t('app', 'Type'),
            'currency' => Yii::t('app', 'Currency'),
        ];
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
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\thienhungho\UserManagement\models\User::className(), ['id' => 'user_id']);
    }


    /**
     * @inheritdoc
     * @return \thienhungho\SupplierManagement\modules\SupplierBase\query\SupplierQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \thienhungho\SupplierManagement\modules\SupplierBase\query\SupplierQuery(get_called_class());
    }
}
