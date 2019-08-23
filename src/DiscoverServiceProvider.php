<?php

namespace Chuckrincon\LumenConfigDiscover;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class DiscoverServiceProvider extends ServiceProvider
{
    /**
     * The config folder name.
     *
     * @var string
     */
    const CONFIG_FOLDER_NAME = 'config';

    /**
     * Register all the application config files.
     *
     * @return void
     */
    public function register()
    {
        $configFolderPath = $this->app->basePath(self::CONFIG_FOLDER_NAME);

        if (!is_dir($configFolderPath)) {
            throw new FileNotFoundException("The config folder is missing.\nCreate it on the root folder of your project and add the config files there.");
        }

        collect(scandir($configFolderPath))->each(function ($file) {
            $this->app->configure(basename($file, '.php'));
        });
    }
}
