@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($project) ? 'Edit' : 'Add' }} Project</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($project))
                {{ html()->modelForm($project, 'PUT', route('admin.projects.update', $project->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.projects.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Project Name</label>
                    <div class="col-md-9">
                        {{ html()->text('name')->placeholder('Full Name')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="short_description">Project Category</label>
                    <div class="col-md-9">
                        {{ html()->multiselect('project_category_id', $projectCategories)->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="short_description">Short Description</label>
                    <div class="col-md-9">
                        {{ html()->text('short_description')->placeholder('Short Description')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="long_description">Long Description</label>
                    <div class="col-md-9">
                        {{ html()->textarea('long_description')->placeholder('Long Description')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="file">Project Image</label>
                    <div class="col-md-9">
                        {{ html()->file('file')->placeholder('Project Image')->class('form-control')->required(true) }}
                    </div>
                </div>
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection