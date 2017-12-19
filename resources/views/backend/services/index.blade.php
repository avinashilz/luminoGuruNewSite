@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>All Services</strong>
            </div><!--card-header-->
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->serviceCategory->category }}</td>
                            <td>
                                <a class="badge badge-warning" href="{{ route('admin.services.edit', $item->id) }}">Edit</a>
                                <a class="badge badge-danger" href="{{route('admin.services.destroy', $item->id)}}" data-method="delete" name="delete_item">Delete</a>
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