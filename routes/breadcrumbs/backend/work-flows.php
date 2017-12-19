<?php

Breadcrumbs::register('admin.work-flows.index', function ($breadcrumbs) {
    $breadcrumbs->push('Work Flow Steps', route('admin.work-flows.index'));
});

Breadcrumbs::register('admin.work-flows.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.work-flows.index');
    $breadcrumbs->push('Add Work Flow Step', route('admin.work-flows.create'));
});

Breadcrumbs::register('admin.work-flows.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.work-flows.index');
    $breadcrumbs->push('Edit Work Flow Step');
});