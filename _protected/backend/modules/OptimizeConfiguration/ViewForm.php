<?php

namespace backend\modules\OptimizeConfiguration;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class ViewForm extends Model
{
    public $minify_css;
    public $minify_js;
    public $minify_html;
    public $concatenate_css;
    public $concatenate_js;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                ['minify_css', 'minify_js', 'minify_html', 'concatenate_css', 'concatenate_js'],
                'required',
            ],
            [
                ['minify_css', 'minify_js', 'minify_html', 'concatenate_css', 'concatenate_js'],
                'string',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'minify_css' => Yii::t('app', 'Minify CSS'),
            'minify_js' => Yii::t('app', 'Minify JS'),
            'minify_html' => Yii::t('app', 'Minify HTML'),
            'concatenate_css' => Yii::t('app', 'Concatenate CSS'),
            'concatenate_js' => Yii::t('app', 'Concatenate JS'),
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
            $this->configOptimizeCode();
            return true;
        }

        return false;
    }

    /**
     * Config Primary Language Function
     */
    private function configOptimizeCode()
    {
        $class = '\rmrevin\yii\minify\View';
        $minify_css = ($this->minify_css == 'on') ? 'true' : 'false';
        $minify_js = ($this->minify_js == 'on') ? 'true' : 'false';
        $minify_html = ($this->minify_html == 'on') ? 'true' : 'false';
        $concatenate_css = ($this->concatenate_css == 'on') ? 'true' : 'false';
        $concatenate_js = ($this->concatenate_js == 'on') ? 'true' : 'false';
        $content = <<<PHP
<?php

return [
    'class' => '$class',
    'enableMinify' => true,
    'concatCss' => $concatenate_css,
    'minifyCss' => $minify_css,
    'concatJs' => $concatenate_js,
    'minifyJs' => $minify_js,
    'minifyOutput' => $minify_html,
    'webPath' => '@web',
    'basePath' => '@webroot',
    'minifyPath' => '@webroot/minify',
    'jsPosition' => [ \yii\web\View::POS_END ],
    'forceCharset' => 'UTF-8',
    'expandImports' => true,
    'compressOptions' => ['extra' => true],
    'excludeFiles' => [],
    'excludeBundles' => [],
];
PHP;
        file_put_contents(Yii::getAlias('@common') . '/config/view.php', $content);
    }

}
