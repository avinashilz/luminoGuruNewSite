@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('breadcrumb-links')
@include('backend.team.includes.breadcrumb-links')
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>Add Team Member</strong>
            </div><!--card-header-->
            <div class="card-block">
                {{ html()->form('POST', route('admin.team.create'))->class('form-horizontal')->open() }}
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Name</label>
                    <div class="col-md-9">
                        {{ html()->email('name')->placeholder('Full Name')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="email">Email</label>
                    <div class="col-md-9">
                        {{ html()->email('email')->placeholder('Email')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="designation">Designation</label>
                    <div class="col-md-9">
                        {{ html()->email('designation')->placeholder('Designation')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="department">Department</label>
                    <div class="col-md-9">
                        {{ html()->email('department')->placeholder('Department')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="fbid">Facebook ID</label>
                    <div class="col-md-9">
                        {{ html()->email('fbid')->placeholder('Facebook Profile Link')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="linkinid">Linkedin ID</label>
                    <div class="col-md-9">
                        {{ html()->email('linkinid')->placeholder('Linkedin Profile Link')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="twitterid">Twitter ID</label>
                    <div class="col-md-9">
                        {{ html()->email('twitterid')->placeholder('Twitter Profile Link')->class('form-control') }}
                    </div>
                </div>
                @for($x = 0; $x < 3; $x ++)
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="profileImage{{$x}}">Image {{$x+1}}</label>
                    <div class="col-md-9">
                        <input type="file" id="profileImage{{$x}}" name="images[{{$x}}][file]">
                    </div>
                </div>
                @endfor
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection