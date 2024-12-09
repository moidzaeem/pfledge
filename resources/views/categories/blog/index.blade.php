@extends('layouts.app')

<!-- Use the latest jQuery version -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>

    {{-- DATATABLE --}}
    <div class="page-content-wrapper mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <h4 class="mt-0 header-title">{{ __('Alle Blogartikel Kategory') }}</h4>
                                <a href="{{ route('admin.blog.category.create') }}"
                                    class="btn btn-primary mb-5">{{ __('logartikel erstellen') }}</a>
                            </div>

                            @if (!empty($blogCategories))
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" cellspacing="0"
                                    width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Description') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($blogCategories as $blog)
                                            <tr>
                                                <!-- Display the blog ID -->
                                                <td>{{ $blog->id }}</td>

                                                <!-- Display the name of the blog -->
                                                <td>{{ $blog->name ?? 'N/A' }}</td>
                                                <td>{{ $blog->description }}</td>


                                                <!-- Display actions like Edit or Delete -->
                                                <td>
                                                    <!-- Edit Button -->
                                                    <a href="{{ route('admin.blog.category.edit', $blog->id) }}"
                                                        class="btn btn-link p-0" title="Edit">
                                                        <i class="mdi mdi-pencil text-primary"></i>
                                                    </a>

                                                    <!-- Delete Button -->
                                                    <form action="{{ route('admin.blog.category.destroy', $blog->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="color: red" type="submit" class="btn btn-link p-0"
                                                            onclick="return confirm('Are you sure you want to delete this blog?')">
                                                            <i style="color: red" class="mdi mdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 class="text-center">No Blogs Kategory Available</h4>
                            @endif
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container-fluid -->
    </div>
@endsection
