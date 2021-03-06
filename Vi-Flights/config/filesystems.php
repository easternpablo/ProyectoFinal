<?php

return [

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'airlines' => [
            'driver' => 'local',
            'root' => storage_path('app/airlines'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'countries' => [
            'driver' => 'local',
            'root' => storage_path('app/countries'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'cities' => [
            'driver' => 'local',
            'root' => storage_path('app/cities'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'airports' => [
            'driver' => 'local',
            'root' => storage_path('app/airports'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'planes' => [
            'driver' => 'local',
            'root' => storage_path('app/planes'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'pilots' => [
            'driver' => 'local',
            'root' => storage_path('app/pilots'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

];
