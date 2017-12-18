@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($testimonial) ? 'Edit' : 'Add' }} Testimonial</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($testimonial))
                {{ html()->modelForm($testimonial, 'PUT', route('admin.testimonials.update', $testimonial->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.testimonials.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Client Name</label>
                    <div class="col-md-9">
                        {{ html()->text('client_name')->placeholder('Client Name')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="client_company_name">Client Company Name</label>
                    <div class="col-md-9">
                        {{ html()->text('client_company_name')->placeholder('Client Company Name')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="description">Description</label>
                    <div class="col-md-9">
                        {{ html()->text('description')->placeholder('Description')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="file">Client Logo</label>
                    <div class="col-md-4">
                        {{ html()->file('file')->class('form-control') }}
                    </div>
                    <div class="col-md-5">
                        @if(isset($testimonial))
                        {{ html()->hidden('file_id')->value($testimonial->image->id) }}
                        <img src="{{route('frontend.getFileEntry', $testimonial->image->filename)}}">
                        @endif
                    </div>
                </div>
                {{ html()->submit('Submit')->class('pull-right') }}
                {{ html()->form()->close() }}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection