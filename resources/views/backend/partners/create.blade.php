@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($partner) ? 'Edit' : 'Add' }} Partner</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($partner))
                {{ html()->modelForm($partner, 'PUT', route('admin.partners.update', $partner->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.partners.store'))->class('form-horizontal')->acceptsFiles()->open() }}
                @endif
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Name</label>
                    <div class="col-md-9">
                        {{ html()->text('name')->placeholder('Full Name')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="alt">Alt Text for partner logo</label>
                    <div class="col-md-9">
                        {{ html()->text('alt')->placeholder('img alt text')->class('form-control')->required(true) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="file">Client Logo Image</label>
                    <div class="col-md-4">
                        {{ html()->file('file')->class('form-control') }}
                    </div>
                    <div class="col-md-5">
                        @if(isset($partner))
                        {{ html()->hidden('file_id')->value($partner->image->id) }}
                        <img src="{{route('frontend.getFileEntry', $partner->image->filename)}}">
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