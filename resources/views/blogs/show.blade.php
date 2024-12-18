<!DOCTYPE html>
<html lang="en">
@include('components.header.head')
<style>
   

    .blog-kate span:not(:last-child)::after {
        content: ', ';
    }
    </style>
<body>
    <div style="position: relative" class="header-container service-header-bg blog-header-bg">
        @include('components.header.header')

        <!-- ########################### KATEGORIE HEADER TOP IMAGE ########################### -->

        <div class="header-top-image-lg">
            @if ($blog->image)
                <img class="img-fluid" src="{{ Storage::url($blog->image) }}" alt="Blog Image" />
            @endif
        </div>

        <!-- Mobile Image -->
        <div class="header-top-image-sm d-block d-md-none">
            @if ($blog->image)
                <img class="img-fluid" src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" />
            @endif
        </div>
    </div>

    <!-- ############################ KATEGORIE CONTENT ######################### -->

    <div class="kategorie-content">
        <span class="kategorie-date">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d.m.Y') }}</span>
        <div class="kategorie">Kategorie:
            @if ($blog->category1Model?->name)
                <span class="blog-kate">{{ $blog->category1Model->name }}</span>
            @endif

            @if ($blog->category2Model?->name)
                <span class="blog-kate">{{ $blog->category2Model->name }}</span>
            @endif
            @if ($blog->category3Model?->name)
                <span class="blog-kate">{{ $blog->category3Model->name }}</span>
            @endif
            @if ($blog->category4Model?->name)
                <span class="blog-kate">{{ $blog->category4Model->name }}</span>
            @endif

        </div>

        <div class="kategorie-main-heading">
            {{ $blog->title }} </div>
        <div class="kategorie-data">
            {!! $blog->data !!} <!-- Render HTML content -->

        </div>


        <div class="kategorie-btn">
            <a href="{{ route('blogs.index') }}">
                <button>Zurück</button>
            </a>
        </div>
    </div>

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Blog_bottom.svg') }}" alt="" />
    </div>

    <!-- ######################### FOOTER SECTION ######################### -->
    @include('components.footer.footer_second')
</body>

</html>
