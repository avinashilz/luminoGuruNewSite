@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>All Partners</strong>
            </div><!--card-header-->
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partners as $partner)
                        <tr>
                            <td>{{ $partner->name }}</td>
                            <td>{{ route('frontend.getFileEntry', $partner->image->filename) }}</td>
                            <td>
                                <a class="badge badge-warning" href="{{ route('admin.projects.edit', $partner->id) }}">Edit</a>
                                <a class="badge badge-danger" href="{{route('admin.projects.destroy', $partner->id)}}" data-method="delete" name="delete_item">Delete</a>
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