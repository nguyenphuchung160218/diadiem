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
    'facebook' => [
    'client_id'     => '254990979651713',
    'client_secret' => 'b1127f48ca97f8603cad5daca764335d',
    'redirect'      => 'http://localhost:81/diadiem/public/oauth/facebook/callback',
    ],

    'google' => [
    'client_id'     => '709969517325-1h6l43lohqr2a9qubo458hvmj3klpoih.apps.googleusercontent.com',
    'client_secret' => '8EDwe6ylDG9IHn_fWUDqHqiT',
    'redirect'      => 'http://localhost:81/diadiem/public/oauth/google/callback',
],

];
