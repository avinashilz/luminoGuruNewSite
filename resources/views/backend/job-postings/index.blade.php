@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>All Job Postings</strong>
            </div><!--card-header-->
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobPostings as $jobPosting)
                        <tr>
                            <td>{{ $jobPosting->title }}</td>
                            <td>{{ config('constant.departments')[$jobPosting->department] }}</td>
                            <td>{{ config('constant.positions')[$jobPosting->position] }}</td>
                            <td>
                                <a class="badge badge-warning" href="{{ route('admin.job-postings.edit', $jobPosting->id) }}">Edit</a>
                                <a class="badge badge-danger" href="{{route('admin.job-postings.destroy', $jobPosting->id)}}" data-method="delete" name="delete_item">Delete</a>
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