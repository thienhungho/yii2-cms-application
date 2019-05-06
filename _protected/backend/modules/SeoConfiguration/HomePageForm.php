<?php

namespace backend\modules\SeoConfiguration;

use common\modules\seo\Seo;
use common\modules\uploads\Uploads;
use Yii;
use yii\base\Model;

/**
 * Login form
 */
class HomePageForm extends Model
{

    public $title;
    public $description;
    public $social_image;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['title', 'description', 'social_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('app', 'Code'),
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function config()
    {
        if ($this->validate()) {
            if (!$this->configSeo()) {
                return false;
            }

            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configSeo()
    {
        Seo::deleteAll(['obj_type' => 'home_page', 'obj_id' => 0]);
        $this->social_image = Uploads::upload('HomePageForm[social_image]', ['title' => $this->title, 'alt' => $this->title, 'description' => $this->description, 'caption' => $this->description]);
        $seo = new Seo([
            'title' => $this->title,
            'slug' => '/',
            'description' => $this->description,
            'social_image' => $this->social_image,
            'social_title' => $this->title,
            'social_description' => $this->description,
            'obj_type' => 'home_page',
            'obj_id' => 0,
        ]);
        return $seo->save();
    }

}
