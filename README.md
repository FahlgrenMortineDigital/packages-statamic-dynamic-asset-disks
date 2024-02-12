# Dynamic Asset Disks

This package allows per-disk Statamic asset configurations. For example, lets say you want to have 
all of your asset containers leverage the local disk on your local environment but leverage a staging
S3 connection for your staging environment. This package allows for that.

**Note:** Currently the package only allows for setting the same disk for all asset containers in a given environment.

## Installation

```bash
composer install fahlgrenmortinedigital/packages-statamic-dynamic-asset-disks
```

```bash
php artisan vendor:publish --provider=DynamicAssetDisksServiceProvider
```

This will copy the `dynamic-asset-disks` configuration file to your application's configuration directory.

## Use
There are two primary keys in the above config file:

- disk_driver
- disks

### Disk Driver
This configuration setting looks for a value set in the following env variable: `STATAMIC_ASSET_DISK_DRIVER`.
This value should map to one of the drivers configured for your asset disk containers.

### Disks
The package looks under this key for key/value pairs where the **key** maps over to a configured Statamic asset
container. The **value** for any defined key should be an array of disk configurations for each desired disk driver.

For example, let's say you have an image asset container called **images** and you want to have two configurations. It would look something
like this:

```bash
'disks' => [
    'images' => [
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
            'root'                    => 'awesome-project/images',
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'visibility'              => 'public',
        ]
    ]
]
```

On your local environment you could set your .env variable `STATAMIC_ASSET_DISK_DRIVER` to be `local`. In your staging
environment, that variable could be set to `s3` to leverage the s3 disk configuration.