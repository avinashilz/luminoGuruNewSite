<?php

Breadcrumbs::register('admin.slider-images.index', function ($breadcrumbs) {
    $breadcrumbs->push('Job Postings', route('admin.slider-images.index'));
});

Breadcrumbs::register('admin.slider-images.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.slider-images.index');
    $breadcrumbs->push('Add Slider Image', route('admin.slider-images.create'));
});

Breadcrumbs::register('admin.slider-images.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.slider-images.index');
    $breadcrumbs->push('Edit Slider Image');
});