<?php

namespace common\modules\seo\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base model class for table "{{%seo}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $keyword
 * @property string $social_image
 * @property string $social_title
 * @property string $social_description
 * @property string $is_index
 * @property string $is_follow
 * @property integer $obj_id
 * @property string $obj_type
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Seo extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'description', 'obj_id', 'obj_type'], 'required'],
            [['description', 'keyword'], 'string'],
            [['obj_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug', 'social_image', 'social_title', 'social_description', 'obj_type'], 'string', 'max' => 255],
            [['is_index', 'is_follow'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%seo}}';
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
            'keyword' => Yii::t('app', 'Keyword'),
            'social_image' => Yii::t('app', 'Social Image'),
            'social_title' => Yii::t('app', 'Social Title'),
            'social_description' => Yii::t('app', 'Social Description'),
            'is_index' => Yii::t('app', 'Is Index'),
            'is_follow' => Yii::t('app', 'Is Follow'),
            'obj_id' => Yii::t('app', 'Obj ID'),
            'obj_type' => Yii::t('app', 'Obj Type'),
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
        ];
    }


    /**
     * @inheritdoc
     * @return \common\modules\seo\SeoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\modules\seo\SeoQuery(get_called_class());
    }
}
