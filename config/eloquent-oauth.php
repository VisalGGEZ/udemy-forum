<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '610752618936-gr6d1erlhpho1c3l8a22vh5ihdhc76ia.apps.googleusercontent.com',
            'client_secret' => 'MYiq-zA8d2RteVjQdopUuWTz',
            'redirect_uri' => 'http://udemy-forum.dev/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => 'fdc07d4054235238e1e0',
            'client_secret' => 'c1743d4e9292ca0c2e23f682d0041498e16ef8d5',
            'redirect_uri' => 'http://udemy-forum.dev/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
