<?php

Breadcrumbs::register('admin.services.index', function ($breadcrumbs) {
    $breadcrumbs->push('Services', route('admin.services.index'));
});

Breadcrumbs::register('admin.services.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.services.index');
    $breadcrumbs->push('Add Service', route('admin.services.create'));
});

Breadcrumbs::register('admin.services.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.services.index');
    $breadcrumbs->push('Edit Service');
});