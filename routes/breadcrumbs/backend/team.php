<?php

Breadcrumbs::register('admin.teams', function ($breadcrumbs) {
    $breadcrumbs->push('Team Members', route('admin.teams.index'));
});

Breadcrumbs::register('admin.teams.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.teams');
    $breadcrumbs->push('Add Team Member', route('admin.teams.create'));
});