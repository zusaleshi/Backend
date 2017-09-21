<?php

Route::match(['get', 'post'], 'user/login', 'AdminController@loginAction');
