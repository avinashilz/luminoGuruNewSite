<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/team-members.php';
require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
require __DIR__.'/contacts.php';
require __DIR__.'/projects.php';
require __DIR__.'/partners.php';
require __DIR__.'/testimonials.php';
require __DIR__.'/work-flows.php';
require __DIR__.'/job-postings.php';
