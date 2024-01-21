<?php

return [
    /* Middleware that will be applied to the statistic pages */
    'middleware' => HusseinSayed\Links\Middleware\LinksMiddleware::class,

    /* Password to use if HusseinSayed\Links\Middleware\LinksMiddleware is beeing used */
    'password' => 'LinksRocks',

    /* The views layout */
    'layout' => 'links::template',

    /* The route prefix, will be applied to all of the routes. */
    'prefix' => 'links',
];
