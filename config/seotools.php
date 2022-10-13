<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'مؤسسة العسكر للمقاولات واعمال العزل', // set false to total remove
            'titleBefore'  =>'مؤسسة العسكر', // Put defaults.title before page title, like 'It's Over 9000!  Dashboard'
            'description'  => 'مؤسسة العسكر تقدم خصومات هائلة تصلي الي 40% حيث انها تخصصت في وكشف تسربات المياه في كل انحاء المملكة وكافة انواع العزل عزل الفوم عزل مائي عزل حراري عزل شينكو مؤسسة العسكر للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['alaskar', 'alaskar','alaskar', 'alwosta', 'awazel', 'best', 'the best', 'عزل فوم','عزل مائي', 'كشف تسربات المياه', 'تنظيف منازل' ,'عزل شينكو ','عزل حراري عزل' ,'عزل اسطح' ,'افضل شركة عزل فوم بالرياض','مؤسسة العسكر','مؤسسة العسكر للمقاولات واعمال العزل','مؤسسة العسكر للمقاولات','العسكر للعوازل','الالعسكر','مؤسسة العسكر','افضل شركة عزل بالرياض','عزاول الرياض','عزل فوم بالرياض','افضل انواع العزل','العزل الحراري','العزل المائي','صيعد للعوازل','الصيعد للعوازل','مؤسسة العسكر'],
            'canonical'    => 'full', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'مؤسسة العسكر للمقاولات واعمال العزل', // set false to total remove
            'description' => 'مؤسسة العسكر للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'مؤسسة العسكر للمقاولات واعمال العزل',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'مؤسسة العسكر للمقاولات واعمال العزل', // set false to total remove
            'description' => '', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
