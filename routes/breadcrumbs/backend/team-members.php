<?php

Breadcrumbs::register('admin.team_members.index', function ($breadcrumbs) {
    $breadcrumbs->push('Team Members', route('admin.team_members.index'));
});

Breadcrumbs::register('admin.team_members.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team_members.index');
    $breadcrumbs->push('Add Team Member', route('admin.team_members.create'));
});

Breadcrumbs::register('admin.team_members.show', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team_members.index');
    $breadcrumbs->push('Show Team Member', route('admin.team_members.show', 1));
});