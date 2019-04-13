<?php

namespace thienhungho\SupplierManagement\modules\SupplierBase;

use \thienhungho\SupplierManagement\modules\SupplierBase\base\Supplier as BaseSupplier;

/**
 * This is the model class for table "supplier".
 */
class Supplier extends BaseSupplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['user_id', 'created_by', 'updated_by'], 'integer'],
            [['name', 'phone', 'email'], 'required'],
            [['birth_date', 'date_join', 'date_left', 'created_at', 'updated_at'], 'safe'],
            [['address'], 'string'],
            [['avatar', 'name', 'phone', 'email', 'website', 'relationship_status', 'vat_number', 'language', 'country', 'city', 'state', 'zip_code', 'status', 'type', 'currency'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 55],
            [['name'], 'unique'],
            [['phone'], 'unique'],
            [['email'], 'unique'],
            [['avatar'], 'default', 'value' => DEFAULT_AVATAR],
            [['updated_by'], 'default', 'value' => get_current_user_id()]
        ]);
    }
	
}
