<?php 

Route::get('listMenu', 'MenuController@listMenuAction');

Route::post('createMenu', 'MenuController@createMenuAction');

Route::match(['get', 'post'], 'editMenu', 'MenuController@editMenuAction');

Route::post('removeMenu', 'MenuController@removeMenuAction');

Route::post('sortMenu', 'MenuController@sortMenuAction');

Route::post('controlMenu', 'MenuController@controlMenuAction');