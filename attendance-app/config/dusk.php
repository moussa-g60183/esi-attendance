<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Dusk Driver
    |--------------------------------------------------------------------------
    |
    | The driver to use when running Dusk tests. You can choose from the
    | following options: "chrome", "firefox", or "remote".
    |
    */

    'driver' => env('DUSK_DRIVER', 'chrome'),

    /*
    |--------------------------------------------------------------------------
    | Chrome Driver
    |--------------------------------------------------------------------------
    |
    | The path to the ChromeDriver executable. You can download the
    | ChromeDriver executable from the official Chromium website.
    |
    */

    'chrome' => [
        'driver' => storage_path('dusk/chromedriver'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Firefox Driver
    |--------------------------------------------------------------------------
    |
    | The path to the GeckoDriver executable. You can download the
    | GeckoDriver executable from the official Mozilla website.
    |
    */

    'firefox' => [
        'driver' => storage_path('dusk/geckodriver'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Remote Driver
    |--------------------------------------------------------------------------
    |
    | The URL to the remote Selenium server.
    |
    */

    'remote' => [
        'url' => env('DUSK_REMOTE_URL'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Wait Time
    |--------------------------------------------------------------------------
    |
    | The amount of time, in seconds, that Dusk will wait for an element
    | to be available before throwing a timeout exception.
    |
    */

    'wait' => 5,

    /*
    |--------------------------------------------------------------------------
    | Browser Size
    |--------------------------------------------------------------------------
    |
    | The default browser size to use when running Dusk tests.
    |
    */

    'browser' => [
        'width' => 1920,
        'height' => 1080,
    ],
];
