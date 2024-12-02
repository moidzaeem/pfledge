@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{ __('Add Marketplace') }}</h4>
                            <p class="text-muted m-b-30 font-14">{{ __('Fill This instructions Carefully') }}.</p>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="p-20">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <!-- Name Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Name') }}</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" 
                                                    name="name" value="{{ old('name') }}" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <!-- Link Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Link') }}</label>
                                                <input id="link" type="url"
                                                    class="form-control @error('link') is-invalid @enderror" 
                                                    name="link" value="{{ old('link') }}">
                                                @error('link')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <!-- Image Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Image') }}</label>
                                                <input id="image" type="file" onchange="readURL(this);"
                                                    class="form-control @error('image') is-invalid @enderror" 
                                                    name="image">
                                                <p class="text-danger">
                                                    *{{ __('Please upload a .PNG or .JPG file no larger than 2 MB') }}</p>
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <!-- Preview Image -->
                                        <div class="col-lg-6">
                                            <img style="float: right" src="" alt="" id="imagePlacement">
                                        </div>
                                
                                        <!-- Submit and Cancel Buttons -->
                                        <div class="col-lg-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    {{ __('Submit') }}
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    {{ __('Cancel') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container-fluid -->


    </div>
@endsection
