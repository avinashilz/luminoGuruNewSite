@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($jobPosting) ? 'Edit' : 'Add' }} Job Posting</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($jobPosting))
                {{ html()->modelForm($jobPosting, 'PUT', route('admin.job-postings.update', $jobPosting->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.job-postings.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="title">Title</label>
                    <div class="col-md-9">
                        {{ html()->text('title')->placeholder('Title')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="department">Department</label>
                    <div class="col-md-9">
                        {{ html()->select('department')->options(config('constant.departments'))->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="position">Position</label>
                    <div class="col-md-9">
                        {{ html()->select('position')->options(config('constant.positions'))->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="description">Job Description</label>
                    <div class="col-md-9">
                        {{ html()->textarea('description')->placeholder('Description')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="salary_min">Salary minimum</label>
                    <div class="col-md-9">
                        {{ html()->input('number', 'salary_min')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="salary_max">Salary maximum</label>
                    <div class="col-md-9">
                        {{ html()->input('number', 'salary_max')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="experience">Experience</label>
                    <div class="col-md-9">
                        {{ html()->input('number', 'experience')->class('form-control')->required(true) }}
                        <small>Enter number of months</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="description">Keywords</label>
                    <div class="col-md-9">
                        {{ html()->text('keywords')->placeholder('Enter comma seperated keywords')->class('form-control')->required(true) }}
                    </div>
                </div>
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection