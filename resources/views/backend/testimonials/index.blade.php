@extends('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.edit'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <strong>All Testimonials</strong>
            </div><!--card-header-->
            <div class="card-block">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Client Company Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->client_name }}</td>
                            <td>{{ $testimonial->client_company_name }}</td>
                            <td><img src="{{ route('frontend.getFileEntry', $testimonial->image->filename) }}" style="width:80px;"></td>
                            <td>
                                <a class="badge badge-warning" href="{{ route('admin.testimonials.edit', $testimonial->id) }}">Edit</a>
                                <a class="badge badge-danger" href="{{route('admin.testimonials.destroy', $testimonial->id)}}" data-method="delete" name="delete_item">Delete</a>
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