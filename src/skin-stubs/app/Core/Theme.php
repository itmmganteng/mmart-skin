<?php

namespace App\Core;

use Illuminate\Support\Facades\Gate;

class Theme
{
    /**
     * Variables
     *
     * @var bool
     */
    public static $modeSwitchEnabled = false;
    public static $modeDefault = 'light';

    public static $direction = 'ltr';

    public static $htmlAttributes = [];
    public static $htmlClasses = [];


    /**
     * Keep page level assets
     *
     * @var array
     */
    public static $javascriptFiles = [];
    public static $cssFiles = [];
    public static $vendorFiles = [];

    /**
     * Get product name
     *
     * @return void
     */
    function getName()
    {
    }

    /**
     * Add HTML attributes by scope
     *
     * @param $scope
     * @param $name
     * @param $value
     *
     * @return void
     */
    function addHtmlAttribute($scope, $name, $value)
    {
        self::$htmlAttributes[$scope][$name] = $value;
    }

    /**
     * Add multiple HTML attributes by scope
     *
     * @param $scope
     * @param $attributes
     *
     * @return void
     */
    function addHtmlAttributes($scope, $attributes)
    {
        foreach ($attributes as $key => $value) {
            self::$htmlAttributes[$scope][$key] = $value;
        }
    }

    /**
     * Add HTML class by scope
     *
     * @param $scope
     * @param $value
     *
     * @return void
     */
    function addHtmlClass($scope, $value)
    {
        self::$htmlClasses[$scope][] = $value;
    }

    /**
     * Remove HTML class by scope
     *
     * @param $scope
     * @param $value
     *
     * @return void
     */
    function removeHtmlClass($scope, $value)
    {
        $key = array_search($value, self::$htmlClasses[$scope]);
        unset(self::$htmlClasses[$scope][$key]);
    }

    /**
     * Print HTML attributes for the HTML template
     *
     * @param $scope
     *
     * @return string
     */
    function printHtmlAttributes($scope)
    {
        $attributes = [];
        if (isset(self::$htmlAttributes[$scope])) {
            foreach (self::$htmlAttributes[$scope] as $key => $value) {
                $attributes[] = sprintf('%s="%s"', $key, $value);
            }
        }

        return join(' ', $attributes);
    }

    /**
     * Print HTML classes for the HTML template
     *
     * @param $scope
     * @param $full
     *
     * @return string
     */
    function printHtmlClasses($scope, $full = true)
    {
        if (empty(self::$htmlClasses)) {
            return '';
        }

        $classes = [];
        if (isset(self::$htmlClasses[$scope])) {
            $classes = self::$htmlClasses[$scope];
        }

        if ($full) {
            return sprintf('class="%s"', implode(' ', (array) $classes));
        }

        return $classes;
    }

    /**
     * Get SVG icon content
     *
     * @param $path
     * @param $classNames
     * @param $folder
     *
     * @return string
     */
    function getSvgIcon($path, $classNames = 'svg-icon')
    {
        if (file_exists(public_path('assets/media/icons/'.$path))) {
            return sprintf('<span class="%s">%s</span>', $classNames, file_get_contents(public_path('assets/media/icons/'.$path)));
        }

        return '';
    }

    /**
     * Set dark mode enabled status
     *
     * @param $flag
     *
     * @return void
     */
    function setModeSwitch($flag)
    {
        self::$modeSwitchEnabled = $flag;
    }

    /**
     * Check dark mode status
     *
     * @return bool
     */
    function isModeSwitchEnabled()
    {
        return self::$modeSwitchEnabled;
    }

    /**
     * Set the mode to dark or light
     *
     * @param $mode
     *
     * @return void
     */
    function setModeDefault($mode)
    {
        self::$modeDefault = $mode;
    }

    /**
     * Get current mode
     *
     * @return string
     */
    function getModeDefault()
    {
        return self::$modeDefault;
    }

    /**
     * Set style direction
     *
     * @param $direction
     *
     * @return void
     */
    function setDirection($direction)
    {
        self::$direction = $direction;
    }

    /**
     * Get style direction
     *
     * @return string
     */
    function getDirection()
    {
        return self::$direction;
    }

    /**
     * Extend CSS file name with RTL or dark mode
     *
     * @param $path
     *
     * @return string
     */
    function extendCssFilename($path)
    {
        if ($this->isRtlDirection()) {
            $path = str_replace('.css', '.rtl.css', $path);
        }

        return $path;
    }

    /**
     * Check if style direction is RTL
     *
     * @return bool
     */
    function isRtlDirection()
    {
        return self::$direction === 'rtl';
    }

    /**
     * Include favicon from settings
     *
     * @return string
     */
    function includeFavicon()
    {
        return sprintf('<link rel="shortcut icon" href="%s" />', asset(config('settings.KT_THEME_ASSETS.favicon')));
    }

    /**
     * Include the fonts from settings
     *
     * @return string
     */
    function includeFonts()
    {
        $content = '';

        foreach (config('settings.KT_THEME_ASSETS.fonts') as $url) {
            $content .= sprintf('<link rel="stylesheet" href="%s">', asset($url));
        }

        return $content;
    }

    /**
     * Get the global assets
     *
     * @return array
     */
    function getGlobalAssets($type = 'js')
    {
        return array_map(function($path) {
            return $this->extendCssFilename($path);
        }, config('settings.KT_THEME_ASSETS.global.'.$type));
    }

    /**
     * Add multiple vendors to the page by name. Refer to settings KT_THEME_VENDORS
     *
     * @param $vendors
     *
     * @return array
     */
    function addVendors($vendors)
    {
        foreach ($vendors as $value) {
            self::$vendorFiles[] = $value;
        }

        return array_unique(self::$vendorFiles);
    }

    /**
     * Add single vendor to the page by name. Refer to settings KT_THEME_VENDORS
     *
     * @param $vendor
     *
     * @return void
     */
    function addVendor($vendor)
    {
        self::$vendorFiles[] = $vendor;
    }

    /**
     * Add custom javascript file to the page
     *
     * @param $file
     *
     * @return void
     */
    function addJavascriptFile($file)
    {
        self::$javascriptFiles[] = $file;
    }

    /**
     * Add custom CSS file to the page
     *
     * @param $file
     *
     * @return void
     */
    function addCssFile($file)
    {
        self::$cssFiles[] = $file;
    }

    /**
     * Get vendor files from settings. Refer to settings KT_THEME_VENDORS
     *
     * @param $type
     *
     * @return array
     */
    function getVendors($type)
    {
        $files = [];
        foreach (self::$vendorFiles as $vendor) {
            $vendors = config('settings.KT_THEME_VENDORS.'.$vendor);
            if (isset($vendors[$type])) {
                foreach ($vendors[$type] as $path) {
                    $files[] = $path;
                }
            }
        }

        return array_unique($files);
    }

    /**
     * Get custom js files from the settings
     *
     * @return array
     */
    function getCustomJs()
    {
        return self::$javascriptFiles;
    }

    /**
     * Get custom css files from the settings
     *
     * @return array
     */
    function getCustomCss()
    {
        return self::$cssFiles;
    }

    /**
     * Get HTML attribute based on the scope
     *
     * @param $scope
     * @param $attribute
     *
     * @return array
     */
    function getHtmlAttribute($scope, $attribute)
    {
        return self::$htmlAttributes[$scope][$attribute] ?? [];
    }

    function getIcon($name, $class = '', $type = '', $tag = 'span')
    {
        $type = config('settings.KT_THEME_ICONS', 'duotone');

        if ($type === 'duotone') {
            $icons = cache()->remember('duotone-icons', 3600, function () {
                return json_decode(file_get_contents(public_path('icons.json')), true);
            });

            $pathsNumber = data_get($icons, 'duotone-paths.'.$name, 0);

            $output = '<'.$tag.' class="ki-'.$type.' ki-'.$name.(!empty($class) ? " ".$class : '').'">';

            for ($i = 0; $i < $pathsNumber; $i++) {
                $output .= '<'.$tag.' class="path'.($i + 1).'"></'.$tag.'>';
            }

            $output .= '</'.$tag.'>';
        } else {
            $output = '<'.$tag.' class="ki-'.$type.' ki-'.$name.(!empty($class) ? " ".$class : '').'"></'.$tag.'>';
        }

        return $output;
    }

    function permissionExist(array $permission) {
        $ablities = collect(Gate::abilities())->keys();

        if(!collect($permission)->some(function($ability) use ($ablities) {
            return collect($ablities)->contains($ability);
        })){
            return false;
        }

        return true;
    }

    function renderMenus($menus)
    {
        $master_render = "";
        $master_active = [];

        foreach ($menus as $menu) {
            # Cek Permission
            if(isset($menu['permission']) && count($menu['permission']) > 0 && isset($menu['permissionType'])) {
                if($menu['permissionType'] == 'laratrust'){
                    # Cek permission menu dengan laratrust
                    if(!Laratrust::isAbleTo($menu['permission']))
                        continue;
                } else {
                    # Cek permission menu dengan gate
                    if(!self::permissionExist($menu['permission']))
                        continue;
                }
            }

            $menu_active = [];

            if($menu['type'] == 'item') {
                if (isset($menu['children']) && count($menu['children']) > 0) {
                    # Jika Mempunyai Children
                    [$children_render, $children_active] = self::renderMenus($menu['children']);

                    # Merge Children Active to Menu Active
                    $menu_active = $children_active;

                    $master_render .= "<div data-kt-menu-trigger='click' class='menu-item ";

                    # Tambahkan class jika activenya benar
                    if(request()->routeIs($menu_active))
                        $master_render .= "here show";
                    else
                        $master_render .= "";

                    $master_render .= " menu-accordion'><span class='menu-link ";

                    # Tambahkan class jika activenya benar
                    if(request()->routeIs($menu_active))
                        $master_render .= "active";
                    else
                        $master_render .= "";
                    $master_render .= "'>";

                    # Pengaturan Icon
                    if ( $menu['icon'] == 'ki' ) {
                        # Jika menggunakan icon Keen Icon
                        $master_render .= "
                                <span class='menu-icon'>
                                    <i class='ki-duotone " . $menu['iconName'] . " fs-2'>";
                        for ($i = 1; $i <= $menu['iconPath']; $i++) {
                            $master_render .= "<span class='path" . $i . "'></span>";
                        }
                        $master_render .= "
                                    </i>
                                </span>
                        ";
                    } else if ( $menu['icon'] == 'dot' ) {
                        # Jika menggunakan icon Dot
                        $master_render .= "
                                <span class='menu-bullet'>
                                    <span class='bullet bullet-dot'></span>
                                </span>";
                    }

                    $master_render .= "
                                <span class='menu-title'>" . $menu['label'] . "</span>
                                <span class='menu-arrow'></span>
                            </span>
                            <div class='menu-sub menu-sub-accordion'>
                                " . $children_render . "
                            </div>
                        </div>
                    ";

                } else {
                    # Jika Tidak Mempunyai Children

                    # Tambahkan route menu ke menu active
                    if(isset($menu['route'])) {
                        $menu_active = array_merge($menu_active, [$menu['route']]);
                    }

                    # Tambahkan active ke menu active
                    if(isset($menu['active'])) {
                        $menu_active = array_merge($menu_active, $menu['active']);
                    }

                    $master_render .= "<div class='menu-item'><a class='menu-link ";

                    if (request()->routeIs($menu_active))
                        $master_render .= "active";
                    else
                        $master_render .= "";

                    $master_render .= "' href='";

                    if(isset($menu['route'])){
                        $master_render .= route($menu['route'], isset($menu['routeParam']) ? $menu['routeParam'] : []);
                    } else if (isset($menu['url'])) {
                        $master_render .= $menu['url'];
                    } else {
                        $master_render .= "#";
                    }

                    $master_render .= "'>";

                    # Pengaturan Icon
                    if ( $menu['icon'] == 'ki' ) {
                        # Jika menggunakan icon Keen Icon
                        $master_render .= "
                                <span class='menu-icon'>
                                    <i class='ki-duotone " . $menu['iconName'] . " fs-2'>";
                        for ($i = 1; $i <= $menu['iconPath']; $i++) {
                            $master_render .= "<span class='path" . $i . "'></span>";
                        }
                        $master_render .= "
                                    </i>
                                </span>
                        ";
                    } else if ( $menu['icon'] == 'dot' ) {
                        # Jika menggunakan icon Dot
                        $master_render .= "
                                <span class='menu-bullet'>
                                    <span class='bullet bullet-dot'></span>
                                </span>";
                    }

                    $master_render .= "
                                <span class='menu-title'>" . $menu['label'] . "</span>
                            </a>
                        </div>
                    ";

                }
            } else if ($menu['type'] == 'heading') {
                $master_render .= "
                    <div class='menu-item pt-5'>
                        <div class='menu-content'>
                            <span class='menu-heading fw-bold text-uppercase fs-7'>" . $menu['label'] . "</span>
                        </div>
                    </div>";
            }

            $master_active = array_merge($master_active, $menu_active);
        }

        return [
            $master_render,
            $master_active
        ];
    }

    function generateMenu()
    {
        $menu = config('menu.KT_MENUS');
        [$render, $active] = self::renderMenus($menu);

        return $render;
    }
}
