<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'filterauth'    => \App\Filters\FilterAuth::class,
        'filterpanitia' => \App\Filters\FilterPanitia::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            'filterauth' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                'Detail_lomba', 'Detail_lomba/*',
                'pendaftaran', 'pendaftaran/*',
                '/',
            ]],

            'filterpanitia' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                'Detail_lomba', 'Detail_lomba/*',
                'pendaftaran', 'pendaftaran/*',
                '/',
            ]],
        ],
        'after' => [
            'filterauth' => ['except' => [
                'admin', 'admin/*',
                'home', 'home/*',
                'Detail_lomba', 'Detail_lomba/*',
                'pendaftaran', 'pendaftaran/*',
                '/',
                'user', 'user/*',
                'desainmaskot', 'desainmaskot/*',
                'desainweb', 'desainweb/*',
                'desainposter', 'desainposter/*',
                'photography', 'photography/*',
            ]],
            'filterpanitia' => ['except' => [
                'admin', 'admin/*',
                'home', 'home/*',
                'Detail_lomba', 'Detail_lomba/*',
                'pendaftaran', 'pendaftaran/*',
                '/',
                'desainmaskot', 'desainmaskot/*',
                'desainweb', 'desainweb/*',
                'desainposter', 'desainposter/*',
                'photography', 'photography/*',
            ]],
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
