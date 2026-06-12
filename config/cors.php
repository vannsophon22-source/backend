<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'broadcasting/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'https://renting-room-25rv.vercel.app',
        'http://localhost:3000',
        'http://127.0.0.1:3000'
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,
];
