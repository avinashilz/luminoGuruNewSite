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
                <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
            </div><!--card-header-->
            <div class="card-block">
                {!! __('strings.backend.welcome') !!}
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection