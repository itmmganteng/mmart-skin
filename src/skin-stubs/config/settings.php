<?php

return [

    'KT_THEME_BOOTSTRAP' => [
        'default' => \App\Core\Bootstrap\BootstrapDefault::class,
        'auth' => \App\Core\Bootstrap\BootstrapAuth::class,
        'system' => \App\Core\Bootstrap\BootstrapSystem::class,
    ],

    # Application Name
    'KT_APP_NAME' => env('APP_NAME', 'M Mart'),
    'KT_APP_SLOGAN' => env('APP_SLOGAN', 'Modern Retail Store'),

    'KT_THEME' => 'metronic',

    # Theme layout templates directory

    'KT_THEME_LAYOUT_DIR' => 'layout',


    # Theme Mode
    # Value: light | dark | system

    'KT_THEME_MODE_DEFAULT' => 'dark',
    'KT_THEME_MODE_SWITCH_ENABLED' => false,


    # Theme Direction
    # Value: ltr | rtl

    'KT_THEME_DIRECTION' => 'ltr',


    # Keenicons
    # Value: duotone | outline | bold

    'KT_THEME_ICONS' => 'duotone',


    # Theme Assets

    'KT_THEME_ASSETS' => [
        'favicon' => 'assets/media/logos/m-mart.ico',
        'logo' => 'assets/media/logos/m-mart.svg',
        'fonts' => [
            'https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700',
            'https://fonts.googleapis.com/css?family=Rubik:300,400,500,600,700',
        ],
        'global' => [
            'css' => [
                'assets/plugins/global/plugins.bundle.min.css',
                'assets/css/style.bundle.min.css',
            ],
            'js' => [
                'assets/plugins/global/plugins.bundle.min.js',
                'assets/js/scripts.bundle.min.js',
                'assets/js/widgets.bundle.min.js',
                'assets/plugins/global/flatpickr/flatpickr.l10ns.id.js',
            ],
        ],
    ],


    # Theme Vendors

    'KT_THEME_VENDORS' => [
        'datatables' => [
            'css' => [
                'assets/plugins/custom/datatables/datatables.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/datatables/datatables.bundle.min.js',
                'assets/plugins/custom/datatables/datatables.fix.js',
            ],
        ],
        'formrepeater' => [
            'js' => [
                'assets/plugins/custom/formrepeater/formrepeater.bundle.js',
            ],
        ],
        'fullcalendar' => [
            'css' => [
                'assets/plugins/custom/fullcalendar/fullcalendar.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/fullcalendar/fullcalendar.bundle.js',
            ],
        ],
        'flotcharts' => [
            'js' => [
                'assets/plugins/custom/flotcharts/flotcharts.bundle.js',
            ],
        ],
        'google-jsapi' => [
            'js' => [
                '//www.google.com/jsapi',
            ],
        ],
        'tinymce' => [
            'js' => [
                'assets/plugins/custom/tinymce/tinymce.bundle.js',
            ],
        ],
        'ckeditor-classic' => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js',
            ],
        ],
        'ckeditor-inline' => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-inline.bundle.js',
            ],
        ],
        'ckeditor-balloon' => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-balloon.bundle.js',
            ],
        ],
        'ckeditor-balloon-block' => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js',
            ],
        ],
        'ckeditor-document' => [
            'js' => [
                'assets/plugins/custom/ckeditor/ckeditor-document.bundle.js',
            ],
        ],
        'draggable' => [
            'js' => [
                'assets/plugins/custom/draggable/draggable.bundle.js',
            ],
        ],
        'fslightbox' => [
            'js' => [
                'assets/plugins/custom/fslightbox/fslightbox.bundle.js',
            ],
        ],
        'jkanban' => [
            'css' => [
                'assets/plugins/custom/jkanban/jkanban.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/jkanban/jkanban.bundle.js',
            ],
        ],
        'typedjs' => [
            'js' => [
                'assets/plugins/custom/typedjs/typedjs.bundle.js',
            ],
        ],
        'cookiealert' => [
            'css' => [
                'assets/plugins/custom/cookiealert/cookiealert.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/cookiealert/cookiealert.bundle.js',
            ],
        ],
        'cropper' => [
            'css' => [
                'assets/plugins/custom/cropper/cropper.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/cropper/cropper.bundle.js',
            ],
        ],
        'vis-timeline' => [
            'css' => [
                'assets/plugins/custom/vis-timeline/vis-timeline.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/vis-timeline/vis-timeline.bundle.js',
            ],
        ],
        'jstree' => [
            'css' => [
                'assets/plugins/custom/jstree/jstree.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/jstree/jstree.bundle.js',
            ],
        ],
        'prismjs' => [
            'css' => [
                'assets/plugins/custom/prismjs/prismjs.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/prismjs/prismjs.bundle.js',
            ],
        ],
        'leaflet' => [
            'css' => [
                'assets/plugins/custom/leaflet/leaflet.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/leaflet/leaflet.bundle.js',
            ],
        ],
        'amcharts' => [
            'js' => [
                'https://cdn.amcharts.com/lib/5/index.js',
                'https://cdn.amcharts.com/lib/5/xy.js',
                'https://cdn.amcharts.com/lib/5/percent.js',
                'https://cdn.amcharts.com/lib/5/radar.js',
                'https://cdn.amcharts.com/lib/5/themes/Animated.js',
            ],
        ],
        'amcharts-maps' => [
            'js' => [
                'https://cdn.amcharts.com/lib/5/index.js',
                'https://cdn.amcharts.com/lib/5/map.js',
                'https://cdn.amcharts.com/lib/5/geodata/worldLow.js',
                'https://cdn.amcharts.com/lib/5/geodata/continentsLow.js',
                'https://cdn.amcharts.com/lib/5/geodata/usaLow.js',
                'https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js',
                'https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js',
                'https://cdn.amcharts.com/lib/5/themes/Animated.js',
            ],
        ],
        'amcharts-stock' => [
            'js' => [
                'https://cdn.amcharts.com/lib/5/index.js',
                'https://cdn.amcharts.com/lib/5/xy.js',
                'https://cdn.amcharts.com/lib/5/themes/Animated.js',
            ],
        ],
        'bootstrap-select' => [
            'css' => [
                'assets/plugins/custom/bootstrap-select/bootstrap-select.bundle.css',
            ],
            'js' => [
                'assets/plugins/custom/bootstrap-select/bootstrap-select.bundle.js',
            ],
        ],
        'validation' => [
            'js' => [
                'assets/plugins/custom/validation/validation.bundle.js',
            ],
        ],
        'loading' => [
            'js' => [
                'assets/plugins/custom/loading/loading.bundle.js',
            ],
        ],
        'clipboard' => [
            'js' => [
                'assets/plugins/custom/clipboard/clipboard.bundle.js',
            ],
        ],
        'sweetalert' => [
            'js' => [
                'assets/plugins/custom/sweetalert/sweetalert.init.js',
            ],
        ],
        'codemirror' => [
            'css' => [
                'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/codemirror.min.css',
                'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/theme/dracula.min.css',
            ],
            'js' => [
                'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/codemirror.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.6/mode/javascript/javascript.min.js',
            ],
        ],
        'delay' => [
            'js' => [
                'assets/plugins/custom/delay/delay.bundle.js',
            ],
        ],
    ],
];
