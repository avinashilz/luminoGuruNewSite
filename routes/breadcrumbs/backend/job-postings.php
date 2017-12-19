<?php

Breadcrumbs::register('admin.job-postings.index', function ($breadcrumbs) {
    $breadcrumbs->push('Job Postings', route('admin.job-postings.index'));
});

Breadcrumbs::register('admin.job-postings.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.job-postings.index');
    $breadcrumbs->push('Add Job Posting', route('admin.job-postings.create'));
});

Breadcrumbs::register('admin.job-postings.edit', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.job-postings.index');
    $breadcrumbs->push('Edit Job Posting');
});