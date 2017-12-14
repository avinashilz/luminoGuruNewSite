<?php

Breadcrumbs::register('admin.partners.index', function ($breadcrumbs) {
    $breadcrumbs->push('Partners', route('admin.partners.index'));
});

Breadcrumbs::register('admin.partners.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.partners.index');
    $breadcrumbs->push('Add Partner', route('admin.partners.create'));
});

Breadcrumbs::register('admin.partners.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.partners.index');
    $breadcrumbs->push('Edit Partner');
});