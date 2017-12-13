<?php

Breadcrumbs::register('admin.team_members', function ($breadcrumbs) {
    $breadcrumbs->push('Team Members', route('admin.team_members.index'));
});

Breadcrumbs::register('admin.team_members.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.team_members');
    $breadcrumbs->push('Add Team Member', route('admin.team_members.create'));
});