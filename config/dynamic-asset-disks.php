<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Image Disk Driver
      |--------------------------------------------------------------------------
      |
      | This setting allows for per-environment disk configurations based on the
      | disks configured below.
      |
     */

    'disk_driver' => env('{STATAMIC_ASSET_DISK_DRIVER}', 'local'),

    /*
      |--------------------------------------------------------------------------
      | Available Disk Configurations
      |--------------------------------------------------------------------------
      |
      | Define per-disk configurations for each Statamic asset container.
      |
     */
    'disks' => [

    ]
];
