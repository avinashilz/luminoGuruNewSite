@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($contact) ? 'Edit' : 'Add' }} Team Member</strong>
            </div><!--card-header-->
            <div class="card-block">
                {{ html()->modelForm($contact, 'PUT', route('admin.contacts.update', $contact->id))->class('form-horizontal')->acceptsFiles()->open() }}
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Address</label>
                    <div class="col-md-9">
                        {{ html()->text('address')->placeholder('Address')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Phone No</label>
                    <div class="col-md-9">
                        {{ html()->text('phone_no')->placeholder('Phone No')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="working_hour">Working Hour</label>
                    <div class="col-md-9">
                        {{ html()->text('working_hour')->placeholder('Working Hour')->class('form-control')->required(true) }}
                    </div>
                </div>
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection