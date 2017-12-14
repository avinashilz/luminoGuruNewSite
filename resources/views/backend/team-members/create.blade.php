@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('breadcrumb-links')
@include('backend.team-members.includes.breadcrumb-links')
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($teamMember) ? 'Edit' : 'Add' }} Team Member</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($teamMember))
                {{ html()->modelForm($teamMember, 'PUT', route('admin.team-members.update', $teamMember->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.team-members.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Full Name</label>
                    <div class="col-md-9">
                        {{ html()->text('name')->placeholder('Full Name')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="email">Email</label>
                    <div class="col-md-9">
                        {{ html()->email('email')->placeholder('Email')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="designation">Designation</label>
                    <div class="col-md-9">
                        {{ html()->text('designation')->placeholder('Designation')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="department">Department</label>
                    <div class="col-md-9">
                        {{ html()->text('department')->placeholder('Department')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="fbid">Facebook ID</label>
                    <div class="col-md-9">
                        {{ html()->text('fbid')->placeholder('Facebook Profile Link')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="linkinid">Linkedin ID</label>
                    <div class="col-md-9">
                        {{ html()->text('linkinid')->placeholder('Linkedin Profile Link')->class('form-control') }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="twitterid">Twitter ID</label>
                    <div class="col-md-9">
                        {{ html()->text('twitterid')->placeholder('Twitter Profile Link')->class('form-control') }}
                    </div>
                </div>
                @if(isset($teamMember))
                @foreach($teamMember->images as $x => $image)
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="profileImage{{$x}}">Image {{$x+1}}</label>
                    <div class="col-md-4">
                        <input type="hidden" id="profileImage{{$x}}" name="images[{{$x}}][id]" value="{{$image->id}}">
                        <input type="file" id="profileImage{{$x}}" name="images[{{$x}}][file]">
                    </div>
                    <div class="col-md-5">
                        <img src="{{route('frontend.getFileEntry', $image->filename)}}">
                    </div>
                </div>
                @endforeach
                @else
                @for($x = 0; $x < 3; $x ++)
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="profileImage{{$x}}">Image {{$x+1}}</label>
                    <div class="col-md-9">
                        <input type="file" id="profileImage{{$x}}" name="images[{{$x}}][file]">
                    </div>
                </div>
                @endfor
                @endif
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection