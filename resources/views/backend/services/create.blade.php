@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($service) ? 'Edit' : 'Add' }} Service</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($service))
                {{ html()->modelForm($service, 'PUT', route('admin.services.update', $service->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.services.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="title">Title</label>
                    <div class="col-md-9">
                        {{ html()->text('title')->placeholder('Title')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="service_category_id">Position</label>
                    <div class="col-md-9">
                        {{ html()->select('service_category_id')->options($serviceCategories)->class('form-control')->required(true) }}
                    </div>
                </div>
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection