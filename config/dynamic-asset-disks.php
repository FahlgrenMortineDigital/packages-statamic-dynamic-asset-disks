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

    'disk_driver' => env('STATAMIC_ASSET_DISK_DRIVER', 'local'),

    /*
      |--------------------------------------------------------------------------
      | Available Disk Configurations
      |--------------------------------------------------------------------------
      |
      | Define per-disk configurations for each Statamic asset container.
      |
     */
    'disks' => [
        'images'        => [
            [
                'driver'     => 'local',
                'root'       => public_path('images'),
                'url'        => '/images',
                'visibility' => 'public',
            ],
            [
                'driver'                  => 's3',
                'key'                     => env('AWS_ACCESS_KEY_ID'),
                'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
                'region'                  => env('AWS_DEFAULT_REGION'),
                'bucket'                  => env('AWS_BUCKET'),
                'url'                     => env('AWS_URL'),
                'endpoint'                => env('AWS_ENDPOINT'),
                'root'                    => 'images',
                'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
                'visibility'              => 'public',
            ]
        ],
        'favicons'      => [
            [
                'driver'     => 'local',
                'root'       => public_path('favicons'),
                'url'        => '/favicons',
                'visibility' => 'public',
            ],
            [
                'driver'                  => 's3',
                'key'                     => env('AWS_ACCESS_KEY_ID'),
                'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
                'region'                  => env('AWS_DEFAULT_REGION'),
                'bucket'                  => env('AWS_BUCKET'),
                'url'                     => env('AWS_URL'),
                'endpoint'                => env('AWS_ENDPOINT'),
                'root'                    => 'favicons',
                'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
                'visibility'              => 'public',
            ]
        ],
        'files'         => [
            [
                'driver'     => 'local',
                'root'       => public_path('files'),
                'url'        => '/files',
                'visibility' => 'public',
            ],
            [
                'driver'                  => 's3',
                'key'                     => env('AWS_ACCESS_KEY_ID'),
                'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
                'region'                  => env('AWS_DEFAULT_REGION'),
                'bucket'                  => env('AWS_BUCKET'),
                'url'                     => env('AWS_URL'),
                'endpoint'                => env('AWS_ENDPOINT'),
                'root'                    => 'files',
                'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
                'visibility'              => 'public',
            ]
        ],
        'social_images' => [
            [
                'driver'     => 'local',
                'root'       => public_path('social_images'),
                'url'        => '/social_images',
                'visibility' => 'public',
            ],
            [
                'driver'                  => 's3',
                'key'                     => env('AWS_ACCESS_KEY_ID'),
                'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
                'region'                  => env('AWS_DEFAULT_REGION'),
                'bucket'                  => env('AWS_BUCKET'),
                'url'                     => env('AWS_URL'),
                'endpoint'                => env('AWS_ENDPOINT'),
                'root'                    => 'social_images',
                'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
                'visibility'              => 'public',
            ]
        ],
        'glide'         => [
            [
                'driver'                  => 's3',
                'key'                     => env('AWS_ACCESS_KEY_ID'),
                'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
                'region'                  => env('AWS_DEFAULT_REGION'),
                'bucket'                  => env('AWS_BUCKET'),
                'url'                     => env('AWS_URL'),
                'endpoint'                => env('AWS_ENDPOINT'),
                'root'                    => 'glide',
                'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
                'visibility'              => 'public',
            ]
        ]
    ]
];
