<?php
namespace Agere\Translator;

return [
    'service_manager' => [
        'aliases' => [
            'translator' => 'MvcTranslator',
            'LocaleDetector' => Http\LocaleDetector::class,
        ],
        'factories' => [
            Http\LocaleDetector::class => Http\LocaleDetectorFactory::class
        ]
        //'abstract_factories' => array(
        //    'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        //    'Zend\Log\LoggerAbstractServiceFactory',
        //),
    ],
    'translator' => [
        'locale' => 'en_GB',
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
                'text_domain' => __NAMESPACE__,
            ],
        ],

        'locales' => [
            'af_ZA',
            'am_ET',
            'ar_AE',
            'ar_BH',
            'ar_DZ',
            'ar_EG',
            'ar_IQ',
            'ar_JO',
            'ar_KW',
            'ar_LB',
            'ar_LY',
            'ar_MA',
            'arn_CL',
            'ar_OM',
            'ar_QA',
            'ar_SA',
            'ar_SY',
            'ar_TN',
            'ar_YE',
            'as_IN',
            'az_Cyrl-AZ',
            'az_Latn-AZ',
            'ba_RU',
            'be_BY',
            'bg_BG',
            'bn_BD',
            'bn_IN',
            'bo_CN',
            'br_FR',
            'bs_Cyrl-BA',
            'bs_Latn-BA',
            'ca_ES',
            'co_FR',
            'cs_CZ',
            'cy_GB',
            'da_DK',
            'de_AT',
            'de_CH',
            'de_DE',
            'de_LI',
            'de_LU',
            'dsb_DE',
            'dv_MV',
            'el_GR',
            'en_029',
            'en_AU',
            'en_BZ',
            'en_CA',
            'en_GB',
            'en_IE',
            'en_IN',
            'en_JM',
            'en_MY',
            'en_NZ',
            'en_PH',
            'en_SG',
            'en_TT',
            'en_US',
            'en_ZA',
            'en_ZW',
            'es_AR',
            'es_BO',
            'es_CL',
            'es_CO',
            'es_CR',
            'es_DO',
            'es_EC',
            'es_ES',
            'es_GT',
            'es_HN',
            'es_MX',
            'es_NI',
            'es_PA',
            'es_PE',
            'es_PR',
            'es_PY',
            'es_SV',
            'es_US',
            'es_UY',
            'es_VE',
            'et_EE',
            'eu_ES',
            'fa_IR',
            'fi_FI',
            'fil_PH',
            'fo_FO',
            'fr_BE',
            'fr_CA',
            'fr_CH',
            'fr_FR',
            'fr_LU',
            'fr_MC',
            'fy_NL',
            'ga_IE',
            'gd_GB',
            'gl_ES',
            'gsw_FR',
            'gu_IN',
            'ha_Latn-NG',
            'he_IL',
            'hi_IN',
            'hr_BA',
            'hr_HR',
            'hsb_DE',
            'hu_HU',
            'hy_AM',
            'id_ID',
            'ig_NG',
            'ii_CN',
            'is_IS',
            'it_CH',
            'it_IT',
            'iu_Cans-CA',
            'iu_Latn-CA',
            'ja_JP',
            'ka_GE',
            'kk_KZ',
            'kl_GL',
            'km_KH',
            'kn_IN',
            'kok_IN',
            'ko_KR',
            'ky_KG',
            'lb_LU',
            'lo_LA',
            'lt_LT',
            'lv_LV',
            'mi_NZ',
            'mk_MK',
            'ml_IN',
            'mn_MN',
            'mn_Mong-CN',
            'moh_CA',
            'mr_IN',
            'ms_BN',
            'ms_MY',
            'mt_MT',
            'nb_NO',
            'ne_NP',
            'nl_BE',
            'nl_NL',
            'nn_NO',
            'nso_ZA',
            'oc_FR',
            'or_IN',
            'pa_IN',
            'pl_PL',
            'prs_AF',
            'ps_AF',
            'pt_BR',
            'pt_PT',
            'qut_GT',
            'quz_BO',
            'quz_EC',
            'quz_PE',
            'rm_CH',
            'ro_RO',
            'ru_RU',
            'rw_RW',
            'sah_RU',
            'sa_IN',
            'se_FI',
            'se_NO',
            'se_SE',
            'si_LK',
            'sk_SK',
            'sl_SI',
            'sma_NO',
            'sma_SE',
            'smj_NO',
            'smj_SE',
            'smn_FI',
            'sms_FI',
            'sq_AL',
            'sr_Cyrl-BA',
            'sr_Cyrl-CS',
            'sr_Cyrl-ME',
            'sr_Cyrl-RS',
            'sr_Latn-BA',
            'sr_Latn-CS',
            'sr_Latn-ME',
            'sr_Latn-RS',
            'sv_FI',
            'sv_SE',
            'sw_KE',
            'syr_SY',
            'ta_IN',
            'te_IN',
            'tg_Cyrl-TJ',
            'th_TH',
            'tk_TM',
            'tn_ZA',
            'tr_TR',
            'tt_RU',
            'tzm_Latn-DZ',
            'ug_CN',
            'uk_UA',
            'ur_PK',
            'uz_Cyrl-UZ',
            'uz_Latn-UZ',
            'vi_VN',
            'wo_SN',
            'xh_ZA',
            'yo_NG',
            'zh_CN',
            'zh_HK',
            'zh_MO',
            'zh_SG',
            'zh_TW',
            'zu_ZA',
        ]
    ],
];