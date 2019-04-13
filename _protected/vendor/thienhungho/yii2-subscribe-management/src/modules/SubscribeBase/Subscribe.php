<?php

namespace thienhungho\Subscribes\modules\SubscribeBase;

use Yii;
use \thienhungho\Subscribes\modules\SubscribeBase\base\Subscribe as BaseSubscribe;

/**
 * This is the model class for table "subscribe".
 */
class Subscribe extends BaseSubscribe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['email'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['email'], 'email'],
            [['created_by'], 'default', 'value' => \Yii::$app->user->id],
            [['updated_by'], 'default', 'value' => \Yii::$app->user->id],
        ]);
    }
	
    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
