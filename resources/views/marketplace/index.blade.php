<!DOCTYPE html>
<html lang="en">
@include('components.header.head')

<body>
    <div class="header-container service-header-bg"
        style="background-image: url('{{ asset('assets/Images/Bucher_header_bg.svg') }}') !important">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Ihr zentraler Anlaufpunkt für Pflege- und Gesundheitsprodukte</span>
            <div>Marktplatz</div>
        </div>
    </div>


    <!-- ######################## MARKTPLATZ PAGE SECTION 1 ######################## -->
    <div class="academy-page-section1-container">
        <div class="row">
            <div class="col-md-6 academy-page-section1-top mb-3 mb-md-0 pe-md-4">
                Unser Marktplatz bietet Ihnen eine sorgfältig ausgewählte Vielfalt an
                Produkten und Dienstleistungen rund um die Themen Pflege, Gesundheit
                und Wohlbefinden. Wir arbeiten mit vertrauenswürdigen Partnern
                zusammen, um Ihnen hochwertige Lösungen anzubieten, die Ihren Alltag
                erleichtern und die bestmögliche Versorgung Ihrer Liebsten
                unterstützen.
                <br /><br />
                Bei einigen Angeboten verwenden wir Affiliate-Links. Das bedeutet,
                dass wir eine kleine Provision vom Anbieter erhalten, wenn Sie über
                diese Links ein Produkt oder eine Dienstleistung erwerben. Für Sie
                bleibt der Preis jedoch unverändert – es entstehen keine zusätzlichen
                Kosten.
            </div>
            <div class="col-md-6 academy-page-section1-top ps-md-4">
                Unser Ziel ist es, Ihnen die besten und nützlichsten Angebote
                bereitzustellen. Wo und wann Sie ein Produkt oder eine Dienstleistung
                kaufen, liegt ganz bei Ihnen. Mit Ihrem Einkauf unterstützen Sie uns
                dabei, weiterhin wertvolle Inhalte und Ressourcen für die
                Pflege-Community anzubieten.
                <br /><br />
                Entdecken Sie unser umfangreiches Angebot und finden Sie genau das,
                was Sie brauchen!
            </div>
        </div>
    </div>

    <!-- ############################ MARKTPLATZ PAGE SECTION 2 ######################## -->
    <div class="row bucher-card-container" style="width: 90% !important">
        <div class="col-lg-4 blog-left">
            <div class="blog-search-container">
                <div class="blog-search-sub-container">
                    <input type="search" placeholder="Suchbegriff" />
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
                <div class="hide-show-content">
                    <div class="blog-search-sub-heading">Pflegehilfsmittel</div>
                    <div class="blog-search-sub-heading">Inkontinenzprodukte</div>
                    <div class="blog-search-sub-heading">
                        Ernährung & Nahrungsergänzung
                    </div>
                    <div class="blog-search-sub-heading">Hygiene & Körperpflege</div>
                    <div class="blog-search-sub-heading">Technologie & E-Health</div>
                    <div class="blog-search-sub-heading">Mobilitätshilfen</div>
                    <div class="blog-search-sub-heading">Barrierefreies Wohnen</div>
                    <div class="blog-search-sub-heading">Rehabilitation & Therapie</div>
                    <div class="blog-search-sub-heading">
                        Beratung & Dienstleistungen
                    </div>
                    <div class="blog-search-sub-heading">
                        Pflegebekleidung & Schutzkleidung
                    </div>
                    <div class="blog-search-sub-heading">Freizeit & Wohlbefinden</div>
                    <div class="blog-search-sub-heading">
                        Hauswirtschaft & Alltagshilfen
                    </div>
                    <div class="blog-search-sub-heading">
                        Pflegeversicherungen & Finanzdienstleistungen
                    </div>
                    <div class="blog-search-sub-heading">
                        Medikamente & Gesundheitsprodukte
                    </div>
                    <div class="blog-search-sub-heading">
                        Barrierefreie Freizeitgestaltung
                    </div>
                    <div class="blog-search-sub-heading">
                        Haushaltshilfen & Reinigung
                    </div>
                    <div class="blog-search-sub-heading">Transport & Fahrdienste</div>
                    <div class="blog-search-sub-heading">Pflegekurse & Schulungen</div>
                    <div class="blog-search-sub-heading">
                        Notfallausrüstung & Sicherheitsprodukte
                    </div>
                    <div class="blog-search-sub-heading">
                        Angebote für pflegende Angehörige
                    </div>
                    <div class="blog-search-sub-heading">
                        Psychologische Unterstützung & Seelsorge
                    </div>
                    <div class="blog-search-sub-heading">
                        Naturheilkunde & alternative Heilmethoden
                    </div>
                    <div class="blog-search-sub-heading">Sonstiges</div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-12 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-md-6 bucher-card">
                            <div class="bucher-card-img">
                                <img src="{{ asset('assets/Images/Marktplatz_section1_img1.svg') }}" alt="" />
                            </div>
                            <div class="bucher-card-content">Sanicare Versandapotheke</div>
                        </div>
                        <div class="col-md-6 bucher-card">
                            <div class="bucher-card-img">
                                <img src="{{asset('assets/Images/Marktplatz_section1_img2.svg')}}" alt="" />
                            </div>
                            <div class="bucher-card-content">sani25 Pflegebox</div>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="margin-top: 1.5rem">
                    <div class="row">
                        <div class="col-md-6 bucher-card">
                            <div class="bucher-card-img">
                                <img src="{{asset('assets/Images/Marktplatz_section1_img3.svg')}}" alt="" />
                            </div>
                            <div class="bucher-card-content">Sanicare Versandapotheke</div>
                        </div>
                        <div class="col-md-6 bucher-card">
                            <div class="bucher-card-img">
                                <img src="{{asset('assets/Images/Marktplatz_section1_img1.svg')}}" alt="" />
                            </div>
                            <div class="bucher-card-content">sani25 Pflegebox</div>
                        </div>
                    </div>
                </div>

                <div class="col-12" style="margin-top: 1.5rem">
                    <div class="row">
                        <div class="col-md-6 bucher-card">
                            <div class="bucher-card-img">
                                <img src="{{asset('assets/Images/Marktplatz_section1_img1.svg')}}" alt="" />
                            </div>
                            <div class="bucher-card-content">Sanicare Versandapotheke</div>
                        </div>
                        <div class="col-md-6 bucher-card">
                            <div class="bucher-card-img">
                                <img src="{{asset('assets/Images/Marktplatz_section1_img2.svg')}}" alt="" />
                            </div>
                            <div class="bucher-card-content">sani25 Pflegebox</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Bucher_bottom_img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
