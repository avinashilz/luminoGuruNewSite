<?php

Breadcrumbs::register('admin.team', function ($breadcrumbs) {
    $breadcrumbs->push('Team Members', route('admin.team.index'));
});

Breadcrumbs::register('admin.team.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team');
    $breadcrumbs->push('Add Team Member', route('admin.team.create'));
});