<?php

namespace SU;

class Config
{
   
    /*
    * Plugins option
    * storage in database the option value
    * Array ('option_name'=>'default value')
    * @example ["example_data" => 'foo',]
    * @return void
    */
    public $plugin_options=[];
    /**
    * Language Option
    * define a unique word for translate call
    */
    public $language_name='antonella';
    /**
    * Plugin text prefix
    * define a unique word for this plugin
    */
    public $plugin_prefix='ch_nella';
    /**
    * POST data process
    * get the post data and execute the function
    * @example ['post_data'=>'SU::function']
    */
    public $post=[];
    /**
    * GET data process
    * get the get data and execute the function
    * @example ['get_data'=>'SU::function']
    */
    public $get=[];
    /**
    * add_filter data functions
    * @input array
    * @example ['body_class','SU::function',10,2]
    * @example ['body_class',['SU','function'],10,2]
    */
    public $add_filter=[];
    /**
    * add_action data functions
    * @input array
    * @example ['body_class','SU::function',10,2]
    * @example ['body_class',['SU','function'],10,2]
    */
    public $add_action=[];
    /**
    * add custom shortcodes
    * @input array
    * @example [['example','SU\ExampleController::example_shortcode']]
    */
    public $shortcodes=[
        ['hola','SU\SuShortCodeController::MiShortCode']
    ];
    /**
    * Dashboard

    * @reference: https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
    */
    public $dashboard=[
        [
        'slug'      => '',
        'name'      => '',
        'function'  => '', // example: __NAMESPACE__.'\Admin\PageAdmin::DashboardExample',
        'callback'  => '',
        'args'      => '',
        ]

    ];
    /**
    * Files for use in Dashboard
    */
    public $files_dashboard=[];

    /*
    * Plugin menu
    * set your menu option here
    * capability default => 'manage_options'
    * list capability -> https://wordpress.org/support/article/roles-and-capabilities/
    */
    public $plugin_menu=[
    /*
        [
            "path"      => ["page"],
            "name"      => "My Custom Page",
            "function"  => __NAMESPACE__."\Admin\PageAdmin::index",
            "icon"      => "antonella-icon.png",
            "slug"      => "my-custom-page",
            "capability"=> 'manage_options',
            "position"  => 5,
        ]
        
            [
                "path"      => ["page"],
                "name"      => "My Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
               // "icon"      => "antonella-icon.png",
                "slug"      => "my-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["page"],
                "name"      => "My SECOND Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
                "icon"      => "antonella-icon.png",
                "slug"      => "my-SECOND-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["subpage","tools.php"],
                "name"      => "sub page in tools",
                "slug"      => "sub-tools",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ],
            [
                "path"      => ["option"],
                "name"      => "sub page in option",
                "slug"      => "sub-option",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ]
        */
        ];

    /**
     * Custom Post Type
     * for make simple Custom PostType
     * for simple add fill the 7 frist elements
     * for avanced fill
     * https://codex.wordpress.org/Function_Reference/register_post_type
     */

    public $post_types =[
        [
            "singular"      => "",
            "plural"        => "",
            "slug"          => "",
            "position"      => 12,
            "taxonomy"      => [], //['category','category2','category3'],
            "image"         => "antonella-icon.png",
            "gutemberg"     => true,
            //advanced
            /*
            'labels'        => [],
            'args'          => [],
            'rewrite'       => []
            */
        ],
    ];
    
    /**
     * Taxonomies
     * for make taxonomies
     * for easy add only fill the 5 first elements
     * for avanced methods
     * https://codex.wordpress.org/Function_Reference/register_taxonomy
     */
    public $taxonomies = [
        [
            "post_type"     => "",
            "singular"      => "",
            "plural"        => "",
            "slug"          => "",
            "gutemberg"     => true,
            //advanced
            /*
            "labels"        =>[],
            "args"          =>[],
            "rewrite"       =>[],
            "capabilities"  =>[]
            */
        ] 
    ];
    
    /**
     * Widget
     * For register a Widget please:
     * Console: php antonella Widget "NAME_OF_WIDGET"
     * @input array
     * @example public $widget = [__NAMESPACE__.'\YouClassWidget']  //only the class
     */
    public $widgets=[];
    
}
