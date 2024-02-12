<?php

namespace FahlgrendigitalPackages\StatamicDynamicAssetDisks;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class DynamicAssetDisksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // This needs to happen in register() so that the disks are ready to be used in boot() calls
        collect(config('dynamic-asset-disks.disks'))->each(function ($configs, $disk) {
            $driver = config('dynamic-asset-disks.disk_driver');

            $config = collect($configs)->first(function ($block) use($driver) {
                return $block['driver'] == $driver;
            });

            if(!$config) {
                return true;
            }

            Config::set("filesystems.disks.$disk", $config);

            return true;
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/dynamic-asset-disks.php' => config_path('dynamic-asset-disks.php'),
        ]);
    }
}