<?php

/*
|--------------------------------------------------------------------------
| Register Namespaces And Routes
|--------------------------------------------------------------------------
|
| When a module starting, this file will executed automatically. This helps
| to register some namespaces like translator or view. Also this file
| will load the routes file for each module. You may also modify
| this file as you want.
|
*/

if (!app()->routesAreCached()) {
    //require __DIR__ . '/Http/routes.php';
    Route::group([
        'middleware' => ['web', 'auth.admin'], 
        'prefix' => 'admin', 
        'namespace' => 'Modules\Admin\Http\Controllers'
    ], 
    function()
    {
        foreach(glob(__DIR__ . '/Routes/*.php') as $file) {
            require($file);
        }
    });
}
