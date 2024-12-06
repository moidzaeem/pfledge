<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg blog-header-bg">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Tipps, Ratgeber und aktuelle Informationen für Pflegebedürftige und Angehörige</span>
            <div>Blog</div>
        </div>
    </div>

    <div class="service-section1-container">
        Unser Blog bietet Ihnen wertvolle Einblicke, praxisnahe Informationen und inspirierende Geschichten aus dem
        Alltag der Pflege. <br>Gemeinsam möchten wir die Pflege menschlicher, einfacher und verständlicher gestalten.
        Begleiten Sie uns auf diesem Weg!</span>
    </div>

    <div class="blog-section1-container">
        <div class="row">
            <div class="col-lg-4 blog-left">
                <div class="blog-search-container">
                    <div class="blog-search-sub-container">
                        <input type="search" id="searchInput" placeholder="Suchbegriff"
                            onkeyup="filterMarketplaces()" />
                        <img src="{{ asset('assets/Images/Blog_search_icon.svg') }}" alt="" />
                    </div>

                    <div
                        style="
                display: flex;
                justify-content: space-between;
                width: 100%;
                align-items: center;
                margin-top: 2rem;
              ">
                        <div class="blog-search-main-heading">Kategorien</div>
                        <div class="d-flex d-lg-none">
                            <img class="hide-show-btn" style="cursor: pointer"
                                src="{{ asset('assets/Images/Blog_caret_down.svg') }}" alt="" />
                        </div>
                    </div>
                    <div class="hide-show-content" id="categoryList">
                        @foreach ($uniqueCategories as $category)
                            <div class="blog-search-sub-heading category-item">
                                <a style="text-decoration: none;color:black"
                                    href="{{ route('blogs.index', ['category' => $category->name]) }}">{{ $category->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="">

                    <div class="row">
                        @forelse ($blogs as $blog)
                            <div class="col-lg-6 marketplace-item"" data-name="{{ $blog->name }}"
                                data-content="{{ $blog->data }}">
                                <div class="blog-card" style="width: 94%;">
                                    <div class="blog-card-img">
                                        <img src="{{ Storage::url($blog->image) }}" alt="" />
                                    </div>
                                    <div class="blog-card-body">
                                        <span class="blog-date">{{ $blog->created_at->format('d.m.Y') }}</span>
                                        <div class="blog-kate">
                                            Kategorie:
                                            @if ($blog->category1_name)
                                                <span class="blog-kate">{{ $blog->category1_name }}</span>
                                                @if ($blog->category2_name || $blog->category3_name || $blog->category4_name)
                                                    ,
                                                @endif
                                            @endif
                                        
                                            @if ($blog->category2_name)
                                                <span class="blog-kate">{{ $blog->category2_name }}</span>
                                                @if ($blog->category3_name || $blog->category4_name)
                                                    ,
                                                @endif
                                            @endif
                                        
                                            @if ($blog->category3_name)
                                                <span class="blog-kate">{{ $blog->category3_name }}</span>
                                                @if ($blog->category4_name)
                                                    ,
                                                @endif
                                            @endif
                                        
                                            @if ($blog->category4_name)
                                                <span class="blog-kate">{{ $blog->category4_name }}</span>
                                            @endif
                                        </div>
                                        
                                        <div class="blog-card-heading">
                                            {{ $blog->title }}
                                        </div>
                                        <div class="blog-card-sub-heading">
                                            Die Pflege von Menschen mit seltenen Erkrankungen stellt eine besondere
                                            Herausforderung
                                            dar, die oft über das hinausgeht, was in der allgemeinen Pflege gelehrt und
                                            erwartet
                                            wird. Seltene Krankheiten sind oft komplex, erfordern spezialisierte Pflege
                                            und
                                            haben
                                            tiefgreifende Auswirkungen auf das Leben der Betroffenen und ihrer Familien.
                                            Dieser
                                            Blogartikel beleuchtet die Herausforderungen und Besonderheiten der Pflege
                                            von
                                            Menschen
                                            mit seltenen Erkrankungen und zeigt auf, welche Rolle Pflegekräfte in diesem
                                            sensiblen
                                            Bereich spielen.
                                        </div>
                                    </div>
                                    <a style="text-decoration: none" href="{{ route('blogs.show', $blog->slug) }}">
                                        <button class="blog-card-btn">Weiterlesen</button>
                                    </a>
                                </div>
                            </div>
                        @empty
                            No Blogs Available
                        @endforelse


                        {{-- <button class="blog-card-btn2  text-center mt-5">Mehr laden</button> --}}

                    </div>

                </div>





            </div>
        </div>
    </div>
    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/blog_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

    <script>
        function filterMarketplaces() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase(); // Get input value
            const marketplaceItems = document.querySelectorAll('.marketplace-item'); // Get all marketplace items

            marketplaceItems.forEach(function(item) {
                const name = item.getAttribute('data-name').toLowerCase(); // Get marketplace name
                const content = item.getAttribute('data-content').toLowerCase(); // Get marketplace content
                // const categories = item.getAttribute('data-categories').toLowerCase(); // Get marketplace categories

                // If search term is found in name or content, show the item, otherwise hide it
                if (name.indexOf(searchInput) > -1 || content.indexOf(searchInput) > -1) {
                    item.style.display = ''; // Show the marketplace item
                } else {
                    item.style.display = 'none'; // Hide the marketplace item
                }
            });
        }
    </script>

</body>

</html>
