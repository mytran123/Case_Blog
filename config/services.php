<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [

        'client_id' => '53734942646-4ed31trisb7nfd396gq7mv3e496c7ctf.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],

    'github' => [

        'client_id' => '0a1e88ead829188b84b6',
        'client_secret' => '8f6fd182f31a710b2577e5bcbd343ef3b57d4e87',
        'redirect' => 'http://127.0.0.1:8000/callback/github',
    ],
];
