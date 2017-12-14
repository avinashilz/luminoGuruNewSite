<?php

Breadcrumbs::register('admin.projects.index', function ($breadcrumbs) {
    $breadcrumbs->push('Projects', route('admin.projects.index'));
});

Breadcrumbs::register('admin.projects.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.projects.index');
    $breadcrumbs->push('Add Project', route('admin.projects.create'));
});

Breadcrumbs::register('admin.projects.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.projects.index');
    $breadcrumbs->push('Edit Project');
});

Breadcrumbs::register('admin.projects.show', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.projects.index');
    $breadcrumbs->push('Show Project');
});