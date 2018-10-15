<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id'     => '640026763195-t1hvstj86s08tab0ioelq99fdliv29gv.apps.googleusercontent.com',
        'client_secret' => 'Ily2wCZrP0ucHLEgTYbjfSdI',
        'redirect'      => 'http://localhost:8000/googleCallback'
    ],

    'facebook' => [
        'client_id'     => '2248533545431133',
        'client_secret' => '6dc74700169cba8a484cb5e54f5c36a9',
        'redirect'      => 'http://localhost:8000/callback'
    ],


];
