<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('team-members', 'TeamMemberController');

Route::resource('projects', 'ProjectController');

Route::resource('work-flows', 'WorkFlowController');

Route::resource('services', 'ServiceController');

Route::resource('job-postings', 'JobPostingController');

Route::resource('partners', 'PartnerController');

Route::resource('testimonials', 'TestimonialController');

Route::resource('careers', 'CareerController');

Route::resource('contacts', 'ContactController');

Route::resource('slider-images', 'SliderImageController');
