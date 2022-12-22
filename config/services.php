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
        'scheme' => 'https',
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
        'client_id' => env('2143325035838322'),
        'client_secret' =>env( '44c5bf0a0cc1d2d57e9a6c4facb6a686'),
        'redirect'      => env('https://localhost:8000/social-login/facebook/callback'),
    ],
    'google' => [
        'client_id'     => env('726831138738-ahftk5eed78007jojd3vugni1qt1rpmr.apps.googleusercontent.com'),
        'client_secret' => env('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'),
        'redirect'      => env('https://localhost:8000/social-login/google/callback'),
    ],


];
