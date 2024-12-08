@extends('layouts.app')
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="https://cdn.tiny.cloud/1/zzqkek2e8tzy91mu1adyt9xniaxyydlr7fjl26iao7zkj7gn/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>

@section('content')
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{ __('Blogartikel erstellen') }}</h4>
                            <p class="text-muted m-b-30 font-14">{{ __('Füllen Sie die Anweisungen sorgfältig aus') }}.</p>
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="p-20">
                                <form action="{{ route('admin.blogs.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input id="slug" type="hidden" name="slug">
                                        <!-- Name Field -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Blog Title</label>
                                                <input type="text" class="form-control" name="title" id="title"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Blog Date</label>
                                                <input type="date" class="form-control" name="blog_date" id=""
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="image">Blog Image</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                        </div>
                                        @foreach (range(1, 4) as $category)
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>{{ __('Kategorie') }} {{ $category }}</label>
                                                    <select name="category{{ $category }}"
                                                        class="form-control @error('category' . $category) is-invalid @enderror">
                                                        <option value="">{{ __('Bitte wählen') }}</option>
                                                        @foreach ($blogCategories as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                {{ old('category' . $category) == $cat->id ? 'selected' : '' }}>
                                                                {{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category' . $category)
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <label for="content">Description</label>
                                                <textarea class="form-control" name="description" id=""></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>{{ __('Home') }}</label>
                                                <select name="home"
                                                    class="form-control @error('home') is-invalid @enderror">
                                                    <option value="nein" {{ old('home') == 'nein' ? 'selected' : '' }}>
                                                        {{ __('Nein') }}</option>
                                                    <option value="ja" {{ old('home') == 'ja' ? 'selected' : '' }}>
                                                        {{ __('Ja') }}</option>
                                                </select>
                                                @error('home')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="content">Blog Content</label>
                                                <textarea name="content" id="myeditorinstance"></textarea>
                                            </div>
                                        </div>


                                        <!-- Submit and Reset Buttons -->
                                        <div class="col-lg-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    {{ __('Absenden') }}
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    {{ __('Abbrechen') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('title').addEventListener('input', function() {
            let title = this.value;
            let slug = generateSlug(title);
            document.getElementById('slug').value = slug; // Set the generated slug to the slug input field
        });
        // function example_image_upload_handler(blobInfo, success, failure, progress) {
        //     var xhr, formData;

        //     xhr = new XMLHttpRequest();
        //     xhr.withCredentials = false;
        //     xhr.open('POST', '/home/uplaodimage');

        //     xhr.upload.onprogress = function(e) {
        //         progress(e.loaded / e.total * 100);
        //     };

        //     xhr.onload = function() {
        //         var json;

        //         if (xhr.status === 403) {
        //             failure('HTTP Error: ' + xhr.status, {
        //                 remove: true
        //             });
        //             return;
        //         }

        //         if (xhr.status < 200 || xhr.status >= 300) {
        //             failure('HTTP Error: ' + xhr.status);
        //             return;
        //         }

        //         json = JSON.parse(xhr.responseText);

        //         if (!json || typeof json.location != 'string') {
        //             failure('Invalid JSON: ' + xhr.responseText);
        //             return;
        //         }

        //         success(json.location);
        //     };

        //     xhr.onerror = function() {
        //         failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        //     };

        //     formData = new FormData();
        //     formData.append('file', blobInfo.blob(), blobInfo.filename());

        //     xhr.send(formData);
        // };

        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media',
                'searchreplace', 'table', 'visualblocks',
                // Your account includes a free trial of TinyMCE premium features
                // Try the most popular premium features until Dec 19, 2024:
                'checklist', 'mediaembed', 'casechange', 'export', 'a11ychecker',
                'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage',
                'advtemplate', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags',
                'autocorrect', 'typography', 'inlinecss'

            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            images_file_types: 'jpg,svg,webp',
            file_picker_types: 'file image media',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            // images_upload_handler: example_image_upload_handler,
            convert_urls: false,
        });

        function generateSlug(title) {
            return title
                .toLowerCase() // Convert to lowercase
                .trim() // Remove leading/trailing spaces
                .replace(/[^a-z0-9 -]/g, '') // Remove all non-alphanumeric characters except space and hyphen
                .replace(/\s+/g, '-') // Replace spaces with hyphens
                .replace(/-+/g, '-') // Replace consecutive hyphens with a single hyphen
                .replace(/^-+/, '') // Remove hyphen from the beginning
                .replace(/-+$/, ''); // Remove hyphen from the end
        }
    </script>
@endsection

<!-- Place the first <script> tag in your HTML's <head> -->
