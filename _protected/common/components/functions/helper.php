<?php
/**
 * @param $slug
 *
 * @return mixed
 */
function slug_to_text($slug)
{
    return str_replace('-', ' ', ucfirst($slug));
}

/**
 * @return string
 */
function get_current_client_language()
{
    return Yii::$app->language;
}

/**
 * @return bool|string
 */
function get_client_browser_language()
{
    return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

/**
 * @param $key
 * @param array $array
 */
function set_flash($key, $array = [
    'type'     => 'success',
    'duration' => 3000,
    'icon'     => 'glyphicon glyphicon-ok-sign',
    'title'    => '',
    'message'  => '',
])
{
    Yii::$app->getSession()->setFlash($key, $array);
}

/**
 * @param string $key
 */
function set_flash_has_not_been_saved($key = 'error_content_has_not_been_saved')
{
    set_flash($key, [
        'type'     => 'danger',
        'duration' => 3000,
        'icon'     => 'glyphicon glyphicon-remove-sign',
        'title'    => \Yii::t('app', 'An error has occurred!'),
        'message'  => \Yii::t('app', 'Your content has not been saved'),
    ]);
}

/**
 * @param string $key
 */
function set_flash_has_been_saved($key = 'success_create_new_content')
{
    set_flash($key, [
        'type'     => 'success',
        'duration' => 3000,
        'icon'     => 'glyphicon glyphicon-ok-sign',
        'title'    => \Yii::t('app', 'Congratulations!'),
        'message'  => \Yii::t('app', 'Your content has been saved'),
    ]);
}

/**
 * @param string $key
 */
function set_flash_success_delete_content($key = 'success_delete_content')
{
    set_flash($key, [
        'type'     => 'success',
        'duration' => 3000,
        'icon'     => 'glyphicon glyphicon-ok-sign',
        'title'    => \Yii::t('app', 'Congratulations!'),
        'message'  => \Yii::t('app', 'Your content has been removed'),
    ]);
}

/**
 * @param string $key
 */
function set_flash_error_delete_content($key = 'error_delete_content')
{
    set_flash($key, [
        'type'     => 'danger',
        'duration' => 3000,
        'icon'     => 'glyphicon glyphicon-remove-sign',
        'title'    => \Yii::t('app', 'An error has occurred!'),
        'message'  => \Yii::t('app', 'Your content has not been removed'),
    ]);
}

/**
 * @param $section
 * @param $key
 * @param $defaultValue
 *
 * @return mixed
 */
function get_setting_value($section, $key, $defaultValue)
{
    $settings = Yii::$app->settings;

    return $settings->get($section, $key, $defaultValue);
}

/**
 * @param $key
 * @param $name
 * @param $value
 */
function set_setting($key, $name, $value)
{
    $settings = Yii::$app->settings;
    $settings->set($key, $name, $value);
}

/**
 * @return mixed
 */
function favicon()
{
    return '<link rel="shortcut icon" type="image/x-icon" href="/' . get_setting_value('site_configuration',
            'app_favicon',
            \backend\modules\SiteConfiguration\SiteIdentityForm::FAVICON_DEFAULT) . '" />
            <link rel="icon" type="image/x-icon" href="/' . get_setting_value('site_configuration',
            'app_favicon',
            \backend\modules\SiteConfiguration\SiteIdentityForm::FAVICON_DEFAULT) . '">';
}

/**
 * @param $language_id
 *
 * @return mixed
 */
function get_country_code_from_language_code($language_id)
{
    $array = [
        'af-ZA' => 'za',
        'ar-AR' => 'ar',
        'az-AZ' => 'az',
        'be-BY' => 'by',
        'bg-BG' => 'bg',
        'bn-IN' => 'in',
        'bs-BA' => 'ba',
        'ca-ES' => 'es',
        'cs-CZ' => 'cz',
        'cy-GB' => 'gb',
        'da-DK' => 'dk',
        'de-DE' => 'de',
        'el-GR' => 'gr',
        'en-GB' => 'gb',
        'en-PI' => 'pi',
        'en-UD' => 'ud',
        'en-US' => 'us',
        'eo-EO' => 'eo',
        'es-ES' => 'es',
        'es-LA' => 'la',
        'et-EE' => 'ee',
        'eu-ES' => 'es',
        'fa-IR' => 'ir',
        'fb-LT' => 'lt',
        'fi-FI' => 'fi',
        'fo-FO' => 'fo',
        'fr-CA' => 'ca',
        'fr-FR' => 'fr',
        'fy-NL' => 'nl',
        'ga-IE' => 'ie',
        'gl-ES' => 'es',
        'he-IL' => 'il',
        'hi-IN' => 'in',
        'hr-HR' => 'hr',
        'hu-HU' => 'hu',
        'hy-AM' => 'am',
        'id-ID' => 'id',
        'is-IS' => 'is',
        'it-IT' => 'it',
        'ja-JP' => 'jp',
        'ka-GE' => 'ge',
        'km-KH' => 'kh',
        'ko-KR' => 'kr',
        'ku-TR' => 'tr',
        'la-VA' => 'va',
        'lt-LT' => 'lt',
        'lv-LV' => 'lv',
        'mk-MK' => 'mk',
        'ml-IN' => 'in',
        'ms-MY' => 'my',
        'nb-NO' => 'no',
        'ne-NP' => 'np',
        'nl-NL' => 'nl',
        'nn-NO' => 'no',
        'pa-IN' => 'in',
        'pl-PL' => 'pl',
        'ps-AF' => 'af',
        'pt-BR' => 'br',
        'pt-PT' => 'pt',
        'ro-RO' => 'ro',
        'ru-RU' => 'ru',
        'sk-SK' => 'sk',
        'sl-SI' => 'si',
        'sq-AL' => 'al',
        'sr-RS' => 'rs',
        'sv-SE' => 'se',
        'sw-KE' => 'ke',
        'ta-IN' => 'in',
        'te-IN' => 'in',
        'th-TH' => 'th',
        'tl-PH' => 'ph',
        'tr-TR' => 'tr',
        'uk-UA' => 'ua',
        'vi-VN' => 'vn',
        'xx-XX' => 'xx',
        'zh-CN' => 'cn',
        'zh-HK' => 'hk',
        'zh-TW' => 'tw',
    ];

    return $array[$language_id];
}

/**
 * @return array
 */
function get_all_currency_code()
{
    return [
        'ALL' => 'Albania Lek',
        'AFN' => 'Afghanistan Afghani',
        'ARS' => 'Argentina Peso',
        'AWG' => 'Aruba Guilder',
        'AUD' => 'Australia Dollar',
        'AZN' => 'Azerbaijan New Manat',
        'BSD' => 'Bahamas Dollar',
        'BBD' => 'Barbados Dollar',
        'BDT' => 'Bangladeshi taka',
        'BYR' => 'Belarus Ruble',
        'BZD' => 'Belize Dollar',
        'BMD' => 'Bermuda Dollar',
        'BOB' => 'Bolivia Boliviano',
        'BAM' => 'Bosnia and Herzegovina Convertible Marka',
        'BWP' => 'Botswana Pula',
        'BGN' => 'Bulgaria Lev',
        'BRL' => 'Brazil Real',
        'BND' => 'Brunei Darussalam Dollar',
        'KHR' => 'Cambodia Riel',
        'CAD' => 'Canada Dollar',
        'KYD' => 'Cayman Islands Dollar',
        'CLP' => 'Chile Peso',
        'CNY' => 'China Yuan Renminbi',
        'COP' => 'Colombia Peso',
        'CRC' => 'Costa Rica Colon',
        'HRK' => 'Croatia Kuna',
        'CUP' => 'Cuba Peso',
        'CZK' => 'Czech Republic Koruna',
        'DKK' => 'Denmark Krone',
        'DOP' => 'Dominican Republic Peso',
        'XCD' => 'East Caribbean Dollar',
        'EGP' => 'Egypt Pound',
        'SVC' => 'El Salvador Colon',
        'EEK' => 'Estonia Kroon',
        'EUR' => 'Euro Member Countries',
        'FKP' => 'Falkland Islands (Malvinas) Pound',
        'FJD' => 'Fiji Dollar',
        'GHC' => 'Ghana Cedis',
        'GIP' => 'Gibraltar Pound',
        'GTQ' => 'Guatemala Quetzal',
        'GGP' => 'Guernsey Pound',
        'GYD' => 'Guyana Dollar',
        'HNL' => 'Honduras Lempira',
        'HKD' => 'Hong Kong Dollar',
        'HUF' => 'Hungary Forint',
        'ISK' => 'Iceland Krona',
        'INR' => 'India Rupee',
        'IDR' => 'Indonesia Rupiah',
        'IRR' => 'Iran Rial',
        'IMP' => 'Isle of Man Pound',
        'ILS' => 'Israel Shekel',
        'JMD' => 'Jamaica Dollar',
        'JPY' => 'Japan Yen',
        'JEP' => 'Jersey Pound',
        'KZT' => 'Kazakhstan Tenge',
        'KPW' => 'Korea (North) Won',
        'KRW' => 'Korea (South) Won',
        'KGS' => 'Kyrgyzstan Som',
        'LAK' => 'Laos Kip',
        'LVL' => 'Latvia Lat',
        'LBP' => 'Lebanon Pound',
        'LRD' => 'Liberia Dollar',
        'LTL' => 'Lithuania Litas',
        'MKD' => 'Macedonia Denar',
        'MYR' => 'Malaysia Ringgit',
        'MUR' => 'Mauritius Rupee',
        'MXN' => 'Mexico Peso',
        'MNT' => 'Mongolia Tughrik',
        'MZN' => 'Mozambique Metical',
        'NAD' => 'Namibia Dollar',
        'NPR' => 'Nepal Rupee',
        'ANG' => 'Netherlands Antilles Guilder',
        'NZD' => 'New Zealand Dollar',
        'NIO' => 'Nicaragua Cordoba',
        'NGN' => 'Nigeria Naira',
        'NOK' => 'Norway Krone',
        'OMR' => 'Oman Rial',
        'PKR' => 'Pakistan Rupee',
        'PAB' => 'Panama Balboa',
        'PYG' => 'Paraguay Guarani',
        'PEN' => 'Peru Nuevo Sol',
        'PHP' => 'Philippines Peso',
        'PLN' => 'Poland Zloty',
        'QAR' => 'Qatar Riyal',
        'RON' => 'Romania New Leu',
        'RUB' => 'Russia Ruble',
        'SHP' => 'Saint Helena Pound',
        'SAR' => 'Saudi Arabia Riyal',
        'RSD' => 'Serbia Dinar',
        'SCR' => 'Seychelles Rupee',
        'SGD' => 'Singapore Dollar',
        'SBD' => 'Solomon Islands Dollar',
        'SOS' => 'Somalia Shilling',
        'ZAR' => 'South Africa Rand',
        'LKR' => 'Sri Lanka Rupee',
        'SEK' => 'Sweden Krona',
        'CHF' => 'Switzerland Franc',
        'SRD' => 'Suriname Dollar',
        'SYP' => 'Syria Pound',
        'TWD' => 'Taiwan New Dollar',
        'THB' => 'Thailand Baht',
        'TTD' => 'Trinidad and Tobago Dollar',
        'TRY' => 'Turkey Lira',
        'TRL' => 'Turkey Lira',
        'TVD' => 'Tuvalu Dollar',
        'UAH' => 'Ukraine Hryvna',
        'GBP' => 'United Kingdom Pound',
        'USD' => 'United States Dollar',
        'UYU' => 'Uruguay Peso',
        'UZS' => 'Uzbekistan Som',
        'VEF' => 'Venezuela Bolivar',
        'VND' => 'Viet Nam Dong',
        'YER' => 'Yemen Rial',
        'ZWD' => 'Zimbabwe Dollar',
    ];
}

/**
 * @param $currency
 *
 * @return string
 */
function get_currency_symbol($currency)
{
    $locale = 'en-US';
    $fmt = new NumberFormatter($locale . "@currency=$currency", NumberFormatter::CURRENCY);
    $symbol = $fmt->getSymbol(NumberFormatter::CURRENCY_SYMBOL);

    return $symbol;
}

/**
 * @param $social
 * @param $url
 * @param array $data
 *
 * @return string
 */
function get_share_link($social, $url, $data = [])
{
    if ($social == 'Facebook') {
        return 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
    } elseif ($social == 'Twitter') {
        return 'https://twitter.com/intent/tweet?url=' . $url;
    } elseif ($social == 'Linkedin') {
        return 'https://www.linkedin.com/shareArticle?&url=' . $url;
    } elseif ($social == 'Tumblr') {
        return 'https://www.tumblr.com/widgets/share/tool?canonicalUrl=' . $url;
    } elseif ($social == 'Skype') {
        return 'https://web.skype.com/share?url=' . $url;
    } elseif ($social == 'Pinterest') {
        return 'http://pinterest.com/pin/create/link/?url=' . $url;
    } elseif ($social == 'Blogger') {
        return 'https://www.blogger.com/blog-this.g?u=' . $url;
    } elseif ($social == 'Telegram') {
        return 'https://t.me/share/url?url=' . $url;
    } elseif ($social == 'G+') {
        return 'https://plus.google.com/share?url=' . $url;
    } else {
        return $url;
    }
}

/**
 * @return mixed
 */
function get_current_user_ip()
{
    return Yii::$app->request->userIP;
}

/**
 * @param $length
 *
 * @return string
 * @throws \yii\base\Exception
 */
function generate_random_string($length = 32)
{
    return Yii::$app->security->generateRandomString($length);
}

/**
 * @param $data
 */
function add_cookie($data)
{
    $cookies = response()->cookies;
    $cookies->add(new \yii\web\Cookie($data));
}

/**
 * @param $bytes
 *
 * @return string
 */
function format_size_units($bytes)
{
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        $bytes = $bytes . ' bytes';
    } elseif ($bytes == 1) {
        $bytes = $bytes . ' byte';
    } else {
        $bytes = '0 bytes';
    }

    return $bytes;
}

/**
 * @param $type
 * @param $content
 *
 * @return string
 */
function span_label($type, $content)
{
    if ($type == 'success') {
        return '<span class="label-success label">' . $content . '</span>';
    } elseif ($type == 'danger') {
        return '<span class="label-danger label">' . $content . '</span>';
    } elseif ($type == 'warning') {
        return '<span class="label-warning label">' . $content . '</span>';
    }
}

/**
 * @param $name
 * @param $inner
 * @param $options
 *
 * @return string
 */
function html_tag($name, $inner, $options)
{
    return \yii\helpers\Html::tag($name, $inner, $options);
}

/**
 * @param $src
 * @param $options
 *
 * @return string
 */
function html_img($src, $options)
{
    return \yii\helpers\Html::img($src, $options);
}