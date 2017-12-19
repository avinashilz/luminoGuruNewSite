@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>{{ isset($workFlow) ? 'Edit' : 'Add' }} Work Flow Step</strong>
            </div><!--card-header-->
            <div class="card-block">
                @if(isset($workFlow))
                {{ html()->modelForm($workFlow, 'PUT', route('admin.work-flows.update', $workFlow->id))->class('form-horizontal')->acceptsFiles()->open() }}
                @else
                {{ html()->form('POST', route('admin.work-flows.store'))->class('form-horizontal')->acceptsFiles()->open() }}
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
                    <label class="col-md-3 form-control-label" for="file">Image</label>
                    <div class="col-md-4">
                        {{ html()->file('file')->class('form-control') }}
                    </div>
                    <div class="col-md-5">
                        @if(isset($workFlow))
                        {{ html()->hidden('file_id')->value($workFlow->image->id) }}
                        <img src="{{route('frontend.getFileEntry', $workFlow->image->filename)}}">
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