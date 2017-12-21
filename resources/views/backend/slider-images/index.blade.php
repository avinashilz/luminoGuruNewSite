@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>All Slider Images</strong>
            </div><!--card-header-->
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliderImages as $sliderImage)
                        <tr>
                            <td>{{ $sliderImage->title }}</td>
                            <td>{{ $sliderImage->description }}</td>
                            <td><a href="{{ $sliderImage->link_hrf }}">{{ $sliderImage->link_text }}</a></td>
                            <td>
                                <a class="badge badge-warning" href="{{ route('admin.slider-images.edit', $sliderImage->id) }}">Edit</a>
                                <a class="badge badge-danger" href="{{route('admin.slider-images.destroy', $sliderImage->id)}}" data-method="delete" name="delete_item">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!--card-block-->
        </div><!--card-->
    </div><!--col-->
</div><!--row-->
@endsection