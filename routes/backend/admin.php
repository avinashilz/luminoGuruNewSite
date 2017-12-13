<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('team_members', 'TeamController');

Route::resource('projects', 'ProjectController');

Route::resource('work_flows', 'WorkFlowController');

Route::resource('partners', 'PartnerController');

Route::resource('testimonials', 'TestimonialController');

Route::resource('careers', 'CareerController');

Route::resource('contacts', 'ContactController');

Route::resource('slide_images', 'SliderImageController');
