<?php

Breadcrumbs::register('admin.testimonials.index', function ($breadcrumbs) {
    $breadcrumbs->push('Testimonials', route('admin.testimonials.index'));
});

Breadcrumbs::register('admin.testimonials.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.testimonials.index');
    $breadcrumbs->push('Add Testimonial', route('admin.testimonials.create'));
});

Breadcrumbs::register('admin.testimonials.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.testimonials.index');
    $breadcrumbs->push('Edit Testimonial');
});