<?php

namespace Itmm\MMartSkin;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MMartSkin extends Command
{
    protected $signature = 'mskin:install';
    protected $description = 'Install Template Web M Mart';

    const STUBSPATH = __DIR__.'/skin-stubs/';

    public function handle()
    {
        $this->install();

        $this->line('The installation is complete.');
    }

    /**
     * Install the skin.
     *
     * @return void
     */
    public static function install()
    {
        static::updateCores();
        static::updateAssets();
        static::updateResources();
        static::updateRoutes();
    }

    /**
     * Copy a file
     *
     * @param string $file
     * @param string $destination
     * @return void
     */
    private static function copyFile($file, $destination)
    {
        (new Filesystem)->copy(static::STUBSPATH.$file, $destination);
    }

    /**
     * Copy a directory
     *
     * @param string $directory
     * @param string $destination
     * @return void
     */
    private static function copyDirectory($directory, $destination)
    {
        (new Filesystem)->copyDirectory(static::STUBSPATH.$directory, $destination);
    }

    /**
     * Update the core
     *
     * @return void
     */
    protected static function updateCores()
    {
        # Copy Actions
        static::copyDirectory('app/Actions', app_path('Actions'));

        # Copy Core
        static::copyDirectory('app/Core', app_path('Core'));

        # Copy Helpers
        static::copyDirectory('app/Helpers', app_path('Helpers'));

        # Copy Providers
        static::copyDirectory('app/Providers', app_path('Providers'));

        # Copy View
        static::copyDirectory('app/View', app_path('View'));
    }

    /**
     * Update the asset
     *
     * @return void
     */
    protected static function updateAssets()
    {
        # Public Folders
        static::copyDirectory('public', public_path());
    }

    /**
     * Update the resource
     *
     * @return void
     */
    protected static function updateResources()
    {
        # Resource Folders
        static::copyDirectory('resource', resource_path());
    }

    /**
     * Update the routes
     *
     * @return void
     */
    protected static function updateRoutes()
    {
        # Rotues Folders
        static::copyDirectory('routes', resource_path('../routes'));

        # Add Auth routes in 'routes/web.php'
        file_put_contents(
            './routes/web.php',
            "\nRoute::get('/dashboard', function(){\n\treturn redirect()->route('example');\n})->name('dashboard');\n",
            FILE_APPEND
        );
    }
}
