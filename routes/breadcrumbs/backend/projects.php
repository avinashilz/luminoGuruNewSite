<?php

Breadcrumbs::register('admin.team-members.index', function ($breadcrumbs) {
    $breadcrumbs->push('Team Members', route('admin.team-members.index'));
});

Breadcrumbs::register('admin.team-members.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team-members.index');
    $breadcrumbs->push('Add Team Member', route('admin.team-members.create'));
});

Breadcrumbs::register('admin.team-members.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team-members.index');
    $breadcrumbs->push('Edit Team Member');
});

Breadcrumbs::register('admin.team-members.show', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team-members.index');
    $breadcrumbs->push('Show Team Member');
});