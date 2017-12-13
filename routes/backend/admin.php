<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('team', 'TeamController');

Route::resource('project', 'ProjectController');

Route::resource('workFlow', 'WorkFlowController');

Route::resource('partners', 'PartnerController');

Route::resource('testimonials', 'TestimonialController');

Route::resource('career', 'CareerController');

Route::resource('contact', 'ContactController');

Route::resource('slide_images', 'SliderImageController');
