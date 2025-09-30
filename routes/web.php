<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    /**
     * @var \Illuminate\Cache\Repository $cache
     */
    $cache = app('cache');
    $cache->put('key', 'value', 3600);
    dd($cache->get('key'));
    return 'Cache cleared';
});
