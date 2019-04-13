<?php

/**
 * @return bool
 */
function is_enable_multiple_language()
{
    if (get_setting_value('site_configuration', 'enable_multiple_language', 'off') == 'off') {
        return false;
    }

    return true;
}

/**
 *
 */
function head()
{
    echo '<meta charset="' . Yii::$app->charset . '" />';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo favicon();
    echo yii\helpers\Html::csrfMetaTags();
    echo view()->head();
    view()->registerCss(
        get_setting_value('template_configuration', 'custom_css_code', '')
    );
    if (is_home()) {
        $seo = \common\modules\seo\Seo::find()
            ->where(['obj_id' => 0])
            ->andWhere(['obj_type' => 'home_page'])
            ->one();
        if (!empty($seo)) {
            echo '<title>' . $seo->title . ' - ' . get_app_name() . '</title>';
            $seo->generateSeoMetaTag([
                'og_locale' => Yii::$app->language,
                'og_type'   => 'home',
            ]);
        }
    } else {
        echo '<title>' . yii\helpers\Html::encode(view()->title) . ' - ' . get_app_name() . '</title>';
    }
}