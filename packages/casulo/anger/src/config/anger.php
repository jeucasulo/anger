<?php

return [
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'users' => [
            'driver' => 'database',
            'model' => App\User::class,
            'table' => 'users',
        ],
    ],
];