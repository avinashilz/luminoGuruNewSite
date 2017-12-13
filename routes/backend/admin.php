<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('team', 'TeamController');

Route::get('work_flow', 'DashboardController@workFlow')->name('workFlow');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
