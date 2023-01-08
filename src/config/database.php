<?php

return [
    'default' => 'mysql',
    'migrations' => 'migrations',
    'connections' => [
        'project_akhir' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'db_karyawan' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_KARYAWAN', 'localhost'),
            'port' => env('DB_PORT_KARYAWAN', '3306'),
            'database' => env('DB_DATABASE_KARYAWAN', 'forge'),
            'username' => env('DB_USERNAME_KARYAWAN', 'forge'),
            'password' => env('DB_PASSWORD_KARYAWAN', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'db_jabatan' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_JABATAN', 'localhost'),
            'port' => env('DB_PORT_JABATAN', '33306'),
            'database' => env('DB_DATABASE_JABATAN', 'forge'),
            'username' => env('DB_USERNAME_JABATAN', 'forge'),
            'password' => env('DB_PASSWORD_JABATAN', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

        'db_penggajian' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST_PENGGAJIAN', 'localhost'),
            'port' => env('DB_PORT_PENGGAJIAN', '3306'),
            'database' => env('DB_DATABASE_PENGGAJIAN', 'forge'),
            'username' => env('DB_USERNAME_PENGGAJIAN', 'forge'),
            'password' => env('DB_PASSWORD_PENGGAJIAN', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],
    ],
];