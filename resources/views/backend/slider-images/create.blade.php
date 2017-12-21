@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($sliderImage) ? 'Edit' : 'Add' }} Slider Image</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($sliderImage))
                {{ html()->modelForm($sliderImage, 'PUT', route('admin.slider-images.update', $sliderImage->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.slider-images.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="title">Title</label>
                    <div class="col-md-9">
                        {{ html()->text('title')->placeholder('Title')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="description">Description</label>
                    <div class="col-md-9">
                        {{ html()->text('description')->placeholder('Description')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="link_hrf">Url for Link</label>
                    <div class="col-md-9">
                        {{ html()->text('link_hrf')->placeholder('url')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="link_text">Title for Link</label>
                    <div class="col-md-9">
                        {{ html()->text('link_text')->placeholder('Title for Link')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="order">Priority Number</label>
                    <div class="col-md-9">
                        {{ html()->input('number', 'order')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="file">Slider Image</label>
                    <div class="col-md-4">
                        {{ html()->file('file')->class('form-control') }}
                    </div>
                    <div class="col-md-5">
                        @if(isset($sliderImage))
                        {{ html()->hidden('file_id')->value($sliderImage->image->id) }}
                        <img src="{{route('frontend.getFileEntry', $sliderImage->image->filename)}}">
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