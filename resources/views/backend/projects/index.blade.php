@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>All Projects</strong>
            </div><!--card-header-->
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Short Description</th>
                            <th>Date registered</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->short_description }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>
                                <a class="badge badge-warning" href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                                <a class="badge badge-danger" href="{{route('admin.projects.destroy', $project->id)}}" data-method="delete" name="delete_item">Delete</a>
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