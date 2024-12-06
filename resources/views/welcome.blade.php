<!DOCTYPE html>
<html lang="en">

@include('components.header.head')
<style>
    .blog-card-img {
        width: 100%;
        /* Ensure image fills the width of the container */
        /* Use flexbox to center the image */
        justify-content: center;
        /* Center the image horizontally */
        align-items: center;
        /* Center the image vertically */
        /* You can adjust the height of the image container */
    }

    .blog-card-img img {
        max-width: 100%;
        /* Ensure the image doesn't overflow */
        height: auto;
        /* Maintain aspect ratio */
    }
</style>

<body>
    <div class="header-container">
        @include('components.header.header')
        <div class="header-sub-container">
            <img class="header-img" src="{{ asset('assets/Images/header_img.svg') }}" alt="Header Image" />
            <div class="header-heading">PflegePur</div>
            <div class="header-sub-heading">
                Ihr Partner für umfassende Pflege und Gesundheit
            </div>
            <div class="header-light-heading">
                Tauchen Sie ein in eine Welt voller wertvoller Informationen,
                praktischer Hilfen und inspirierender Inhalte rund um Pflege und
                Gesundheit.
            </div>
            <button style="position: relative;"> <a
                    style=" width: 100%; position: absolute;top: 0;left: 0;
        border-radius: 10px;height: 100%;"
                    href="{{ route('aboutus') }}"></a>Mehr erfahren</button>
        </div>
    </div>

    <!-- ###################### SECTION 1 #######################  -->

    <div class="container-fluid section1-container">
        <div class="row" style="height: 100%">
            <div class="section1-right col-lg-5 d-block d-lg-none mb-4">
                <img src="{{ asset('assets/Images/Section1_img.svg') }}" alt="" />
            </div>

            <div class="section1-left col-lg-7">
                <span class="section1-top1">Willkommen bei PflegePur!</span>
                <div class="section1-top2">Willkommen bei PflegePur!</div>
                <div class="section1-top3">
                    Ihr Partner für umfassende Pflege und Gesundheit
                </div>
                <div class="section1-top4">
                    Ob Sie nach aktuellen Blogbeiträgen, fundierten Büchern, hilfreichen
                    Online-Rechnern oder praktischen Checklisten suchen – bei PflegePur
                    finden Sie alles, was Sie brauchen. <br /><br />
                    Entdecken Sie unsere Academy, hören Sie in unseren Podcast rein, und
                    bleiben Sie immer auf dem Laufenden mit unserem kostenlosen
                    Newsletter und der PflegePur-App. <br /><br />
                    Wir begleiten Sie auf Ihrem Weg – kompetent, zuverlässig und
                    persönlich.
                </div>
                <div>
                    <button style="position: relative;"><a
                            style=" position: absolute; top: 0; left: 0; width: 100%;height: 100%;border-radius: 10px;"
                            href="https://pflegepur.de/newsletter.php" target="_blank"></a>Abonnieren Sie unseren
                        Newsletter</button>
                </div>
            </div>
            <div class="section1-right col-lg-5 d-none d-lg-block">
                <img src="{{ asset('assets/Images/Section1_img.svg') }}" alt="" />
            </div>
        </div>
    </div>

    <!-- ####################### SERVICE SECTION ###################### -->
    <div class="service-section-container">
        <div class="service-content">
            <div class="service-heading">Services</div>
            <div class="service-sub-heading">
                Bei PflegePur möchten wir Sie in allen Bereichen des Pflegealltags
                unterstützen. In unserem Servicebereich finden Sie eine Vielzahl
                hilfreicher Werkzeuge, die Ihnen den Umgang mit bürokratischen und
                organisatorischen Herausforderungen erleichtern. <br /><br />Nutzen
                Sie unsere <span style="font-weight: 700">Checklisten</span> , um den
                Überblick zu bewahren, greifen Sie auf unsere
                <span style="font-weight: 700">Online-Rechner zu</span>, um
                finanzielle Aspekte der Pflege einfach zu berechnen, und verwenden Sie
                unsere <span style="font-weight: 700">Musteranschreiben</span>, um
                wichtige Anträge und Dokumente schnell und korrekt zu erstellen.
                <br /><br />
                Alles, was Sie brauchen – kompakt und kostenlos an einem Ort!
            </div>
        </div>
        <!-- Desktop view: Flexbox layout for products -->
        <div class="service-product-container d-none d-sm-flex">
            <div class="service-product">
                <a href="{{ route('checklisten') }}"><img src="{{ asset('assets/Images/Service_img1.svg') }}"
                        alt="Product 1" /></a>
            </div>
            <div class="service-product">
                <a href="./online_rechner.html"><img src="{{ asset('assets/Images/Service_img2.svg') }}"
                        alt="Product 2" /></a>
            </div>
            <div class="service-product">
                <a href="{{ route('musteranschreiben') }}"><img src="{{ asset('assets/Images/Service_img3.svg') }}"
                        alt="Product 3" /></a>
            </div>
            <div class="section1-black-bg d-none d-sm-block"></div>
        </div>
        <!-- #################### FOR MOBILE ################### -->
        <div class="service-product-slider d-block d-sm-none">
            <div class="slider-container">
                <div class="service-slide" style="margin-left: 2rem">
                    <a href="./checklisten.html"><img src={{ asset('assets/Images/Service_img1.svg') }}"
                            alt="Product 1" /></a>
                </div>
                <div class="service-slide">
                    <a href="./onlineRechner.html"><img src="{{ asset('assets/Images/Service_img2.svg') }}"
                            alt="Product 2" /></a>
                </div>
                <div class="service-slide" style="margin-right: 2rem">
                    <a href="./musteranschreiben.html"><img src="{{ asset('assets/Images/Service_img3.svg') }}"
                            alt="Product 3" /></a>
                </div>
            </div>
            <div class="section1-black-bg d-block d-sm-none"></div>
        </div>

        <button style="position: relative;"><a
                style="position: absolute;font-weight:bold; display: block;width: 100%; height: 100%; top: 0; left: 0; border-radius: 10px;"
                href="{{ route('services') }}"></a><span style="font-weight: bold"> Zu unseren Services</span></button>
    </div>

    <!-- ########################### SECTION 2 BUTTONS ########################### -->

    <div class="newsund-ratgeber-section1" style="margin-bottom: 4rem">
        <div class="newsund-ratgeber-btn-top">
            <div class="newsund-btn1 newsund-btn">
                <button style="color: #ffffff">News</button>
            </div>
            <div class="newsund-btn2 newsund-btn">
                <button>
                    <a style="color: #b22222" href="{{ route('ratgeber') }}">Ratgeber</a>
                </button>
            </div>
        </div>
        <div class="newsund-ratgeber-btn-bottom">
            <div style="display: flex; gap: 0.7rem">
                <div class="newsund-btn3 newsund-btn">
                    <button class="index-news-top-btn index-news-active-btn" id="index-new-top-btn1">
                        Ärztezeitung
                    </button>
                </div>
                <div class="newsund-btn4 newsund-btn">
                    <button class="index-news-top-btn" id="index-new-top-btn2">
                        Ärztenachrichtendienst
                    </button>
                </div>
            </div>
            <div class="newsund-btn5 newsund-btn text-center">
                <button class="index-news-top-btn" id="index-new-top-btn3">
                    Bundesministerium für Gesundheit (BMG)
                </button>
            </div>
        </div>
    </div>

    <!-- ########################### SECTION 2 CARDS ########################### -->

    <div class="newund-section2-row">
        <div class="col-12">
            <div class="row index-news-bottom" id="index-news-bottom1">
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            LSG Potsdam: Tabletten holen ist meist Privatsache
                        </div>
                        <div class="newsund-section2-card-content">
                            Weil sie Tabletten im Auto vergessen hatte, machte die Klägerin
                            eine Arbeitspause – und stürzte auf dem Rückweg. Das Gericht
                            lehnte eine Entschädigung als Arbeitsunfall ab.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 29.10.2024<br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Tuberkulose löst COVID als tödlichste Infektionskrankheit wieder
                            ab
                        </div>
                        <div class="newsund-section2-card-content">
                            Ohne Behandlung stirbt annähernd jeder zweite Infizierte an der
                            bakteriellen Infektion Tuberkulose. Der Leiter des Globalen
                            Fonds zur Bekämpfung von Infektionskrankheiten Peter Sands
                            fordert mehr Mittel.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 29.10.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Pneumonie bei Kindern: Antibiotika wohl nicht immer erforderlich
                        </div>
                        <div class="newsund-section2-card-content">
                            In einer Studie nahm sich ein amerikanisches Team der Frage an,
                            ob sofortige Antibiotikagabe bei allen Kindern mit ambulant
                            behandelter Lungenentzündung tatsächlich nötig sei.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 29.10.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row index-news-bottom" id="index-news-bottom2">
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Optimierte Therapie für Kreuzbandverletzungen
                        </div>
                        <div class="newsund-section2-card-content">
                            Derzeit beruht die Therapieplanung von Knieverletzungen auf
                            statischen Bildgebungen wie MRT, CT oder Röntgen. Eine im
                            Projekt Plank entwickelte Simulation ermöglicht es nun, die
                            optimale Position zur Fixierung des Kreuzbandes auf Basis
                            dynamischer Modellierungen zu finden – dadurch würden
                            Folgeschäden verhindert.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 29.10.2024<br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Kontinuierliches Glukosemanagement auch bei Diabetes Typ 2 ab
                        </div>
                        <div class="newsund-section2-card-content">
                            Technische Lösungen wie das kontinuierliche Glukosemanagement
                            (CGM) sollten auch bei Menschen mit Diabetes Typ 2 verstärkt
                            eingesetzt werden. Dafür setzte sich der Hamburger Diabetologe
                            Dr. Jens Kröger auf einer Online-Pressekonferenz der Deutschen
                            Diabetes Hilfe ein.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 29.10.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Wie männliches Geschlecht das kardiovaskuläre Risiko beeinflusst
                        </div>
                        <div class="newsund-section2-card-content">
                            Soziokulturelle Normen und daraus entstehender Druck kann
                            individuelles Verhalten, Vorlieben und Vorstellungen
                            beeinflussen – so die These. Diese haben Forschende untersucht,
                            indem sie den Zusammenhang zwischen dem Ausdruck männlicher
                            Geschlechtsidentität und dem Umgang mit kardiovaskulärer
                            Erkrankungen analysierten.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 29.10.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row index-news-bottom" id="index-news-bottom3">
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Lauterbach: Reform der Notfallversorgung rettet Menschenleben
                        </div>
                        <div class="newsund-section2-card-content">
                            „Jeden Tag sterben in Deutschland Menschen, die nicht sterben
                            müssten, wenn wir ein besseres Notfallsystem hätten“, so
                            Bundesgesundheitsminister Prof. Karl Lauterbach bei der 1.
                            Lesung im Bundestag zur Reform der Notfallversorgung. Lesen Sie
                            hier die gesamte Rede.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 09.10.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Lauterbach: Durchbruch bei der Krankenhausreform
                        </div>
                        <div class="newsund-section2-card-content">
                            Nach intensiven Verhandlungen haben sich die
                            Regierungsfraktionen und das Bundesgesundheitsministerium auf
                            die letzte Fassung der Krankenhausreform geeinigt. „Von den
                            Grundzügen der Reform machen wir keine Abstriche. Wir halten
                            unser Qualitätsversprechen und haben sinnvolle Anregungen,
                            insbesondere zur ambulanten Facharztversorgung in ländlichen
                            Gebieten und der Kinderbehandlung, aufgenommen“, erklärt
                            Bundesgesundheitsminister Prof. Lauterbach. Damit ist der Weg
                            für die Verabschiedung im Bundestag Ende Oktober frei.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 08.10.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newsund-section2-card">
                        <div class="newsund-section2-card-heading">
                            Lauterbach: Alle Gesundheitsdaten auf einen Blick zu haben, wird
                            die Behandlung entscheidend verbessern
                        </div>
                        <div class="newsund-section2-card-content">
                            Gut 100 Tage vor dem Start der „ePA für alle“ startet das
                            Bundesministerium für Gesundheit eine Aufklärungskampagne zur
                            elektronischen Patientenakte. „Die elektronische Patientenakte
                            bringt nur Vorteile: bessere Therapie, weniger
                            Behandlungsfehler, bessere Forschung, weniger Bürokratie.
                            Darüber wollen wir mit den Menschen ins Gespräch kommen“, so
                            Bundesgesundheitsminister Prof. Karl Lauterbach.
                        </div>
                        <div class="newsund-section2-card-bottom">
                            <div class="newsund-section2-card-date">
                                Datum: 30.09.2024 <br />
                                Quelle:
                                <a href="https://bundesgesundheitsministerium.de"
                                    target="_blank">www.aerztezeitung.de</a>
                            </div>
                            <div>
                                <button>
                                    <a href="https://www.bundesgesundheitsministerium.de/presse/reden/rede/gvsg-bt-1-lesung.html"
                                        target="_blank"></a>Weiterlesen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="Weitere-btn">
            <a href="{{ route('achrichten') }}"></a>Weitere Nachrichten und Ratgeber
        </button>
    </div>

    <!-- ################### BLOG SECTION ################### -->

    <div class="blog-container">
        <div class="blog-heading">Blog</div>
        <div class="blog-sub-heading">
            Unser Blog bietet Ihnen wertvolle Einblicke, praxisnahe Informationen
            und inspirierende Geschichten aus dem Alltag der Pflege.
            <br /><br />Gemeinsam möchten wir die Pflege menschlicher, einfacher und
            verständlicher gestalten. <br /><br />Begleiten Sie uns auf diesem Weg!
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <!-- Blog Card Container -->
                    <div class="blog-card">
                        <div class="blog-card-img">
                            <img src="{{ Storage::url($blog->image) }}" alt="" class="img-fluid" />
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-kate">Kategorie: @if ($blog->category1_name)
                                    <span class="blog-kate">{{ $blog->category1_name }}</span>
                                @endif
                                @if ($blog->category2_name)
                                    <span class="blog-kate">{{ $blog->category2_name }}</span>
                                @endif
                                @if ($blog->category3_name)
                                    <span class="blog-kate">{{ $blog->category3_name }}</span>
                                @endif
                                @if ($blog->category4_name)
                                    <span class="blog-kate">{{ $blog->category4_name }}</span>
                                @endif
                            </div>
                            <div class="blog-card-heading">
                                {{ $blog->title }} <!-- Dynamically display marketplace name -->
                            </div>
                            <div class="blog-card-sub-heading">
                                {{ Str::limit($blog->description, 150) }}
                                <!-- Limit the content text for a preview -->
                            </div>
                        </div>
                        <a style="text-decoration: none" href="{{ route('blogs.show', $blog->slug) }}">
                            <button class="blog-card-btn">Weiterlesen</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- ################### For Mobile ################### -->
        <div class="blog-card-container-sm d-none">
            <div class="blog-card-sm">
                <div class="blog-card-img">
                    <img src="{{ asset('assets/Images/blog_img_.webp') }}" alt="" />
                </div>
                <div class="blog-card-body">
                    <span class="blog-date">04.10.2024 </span>
                    <div class="blog-kate">Kategorie: Pflegewissen & Ratgeber </div>
                    <div class="blog-card-heading">
                        Pflege bei speziellen Bedürfnissen: Fokus auf seltene Erkrankungen
                    </div>
                    <div class="blog-card-sub-heading">
                        Die Pflege von Menschen mit seltenen Erkrankungen stellt eine besondere Herausforderung dar, die
                        oft über das hinausgeht, was in der allgemeinen Pflege gelehrt und erwartet wird. Seltene
                        Krankheiten sind oft komplex, erfordern spezialisierte Pflege und haben tiefgreifende
                        Auswirkungen auf das Leben der Betroffenen und ihrer Familien. Dieser Blogartikel beleuchtet die
                        Herausforderungen und Besonderheiten der Pflege von Menschen mit seltenen Erkrankungen und zeigt
                        auf, welche Rolle Pflegekräfte in diesem sensiblen Bereich spielen.

                    </div>
                </div>
                <button class="blog-card-btn">Weiterlesen</button>

            </div>
            <div class="blog-card-sm">
                <div class="blog-card-img">
                    <img src="./Images/blog_img_2.webp" alt="" />
                </div>
                <div class="blog-card-body">
                    <span class="blog-date">15.09.2024</span>
                    <div class="blog-kate">Kategorie: Recht & Pflegeversicherung </div>
                    <div class="blog-card-heading">
                        Pflege und Ethik: Tägliche Entscheidungen mit Tragweite
                    </div>
                    <div class="blog-card-sub-heading">
                        Die Pflege ist ein Beruf, der tief in menschlichen Beziehungen verwurzelt ist. Pflegende stehen
                        täglich vor Herausforderungen, die nicht nur fachliches Wissen, sondern auch ein hohes Maß an
                        ethischem Bewusstsein erfordern. Entscheidungen, die im Pflegealltag getroffen werden, haben oft
                        weitreichende Folgen für das Leben der Patient*innen und deren Angehörige. Dieser Artikel
                        beleuchtet die ethischen Aspekte der Pflege und zeigt, welche Rolle ethische Prinzipien im
                        Alltag von Pflegefachkräften spielen.

                    </div>
                </div>
                <button class="blog-card-btn">Weiterlesen</button>

            </div>
            <div class="blog-card-sm">
                <div class="blog-card-img">
                    <img src="./Images/blog_img_3.webp" alt="" />
                </div>
                <div class="blog-card-body">
                    <span class="blog-date">08.09.2024 </span>
                    <div class="blog-kate">Kategorie: Pflegende Angehörige </div>
                    <div class="blog-card-heading">
                        Aggressivität in der Pflege: Umgang mit schwierigen Situationen
                    </div>
                    <div class="blog-card-sub-heading">
                        Die Pflege ist ein anspruchsvoller Beruf, der Geduld, Empathie und Fachkompetenz erfordert.
                        Pflegekräfte begegnen dabei nicht nur körperlichen Herausforderungen, sondern auch emotionalen
                        und psychischen Belastungen. Eine dieser Belastungen ist die Aggressivität, die bei
                        Pflegebedürftigen auftreten kann. Aggression in der Pflege kann viele Ursachen haben, von
                        Schmerzen und Krankheit bis hin zu kognitiven Einschränkungen wie Demenz. Der Umgang mit
                        aggressivem Verhalten ist für Pflegekräfte eine schwierige, aber unvermeidbare Aufgabe. In
                        diesem Artikel wird beleuchtet, warum Aggressionen in der Pflege auftreten, wie Pflegekräfte
                        damit umgehen können und welche präventiven Maßnahmen getroffen werden können, um solche
                        Situationen zu entschärfen.

                    </div>
                </div>
                <button class="blog-card-btn">Weiterlesen</button>

            </div>
        </div>
        <button style="position: relative;"><a
                style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                href="{{ route('blogs.index') }}"></a>Zu unserem Blog</button>
    </div>

    <!-- ################### Marktplatz SECTION ################### -->

    <div class="marktplatz-container" style="background-color: #b222221a; padding: 1rem 0">
        <div class="blog-container">
            <div class="blog-heading">Marktplatz</div>
            <div class="blog-sub-heading">
                Unser Marktplatz bietet Ihnen eine sorgfältig ausgewählte Vielfalt an
                Produkten und Dienstleistungen rund um die Themen Pflege, Gesundheit
                und Wohlbefinden. <br /><br />Wir arbeiten mit vertrauenswürdigen
                Partnern zusammen, um Ihnen hochwertige Lösungen anzubieten, die Ihren
                Alltag erleichtern und die bestmögliche Versorgung Ihrer Liebsten
                unterstützen.
            </div>

            <!-- ###################### For Desktop ################### -->
            <div class="row">
                @foreach ($marketplaces as $marketplace)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <!-- Blog Card Container -->
                        <div class="blog-card">
                            <div class="blog-card-img">
                                @if (strpos($marketplace->image, 'https') === 0)
                                    <!-- Check if the image is an external URL -->
                                    <img src="{{ $marketplace->image }}" alt="" class="img-fluid" />
                                @else
                                    <img src="{{ asset('storage/' . $marketplace->image) }}" alt=""
                                        class="img-fluid" />
                                @endif
                            </div>
                            <div class="blog-card-body">
                                <div class="blog-kate">Kategorie: @if ($marketplace->category1_name)
                                        <span class="blog-kate">{{ $marketplace->category1_name }}</span>
                                    @endif
                                    @if ($marketplace->category2_name)
                                        <span class="blog-kate">{{ $marketplace->category2_name }}</span>
                                    @endif
                                    @if ($marketplace->category3_name)
                                        <span class="blog-kate">{{ $marketplace->category3_name }}</span>
                                    @endif
                                    @if ($marketplace->category4_name)
                                        <span class="blog-kate">{{ $marketplace->category4_name }}</span>
                                    @endif
                                </div>
                                <div class="blog-card-heading">
                                    {{ $marketplace->name }} <!-- Dynamically display marketplace name -->
                                </div>
                                <div class="blog-card-sub-heading">
                                    {{ Str::limit($marketplace->content_text, 150) }}
                                    <!-- Limit the content text for a preview -->
                                </div>
                            </div>
                            <a href="{{ $marketplace->link }}"
                                target="{{ $marketplace->external_link === 'ja' ? '_blank' : '' }}"
                                style="text-decoration: none">
                                <button class="blog-card-btn">Weiterlesen</button>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>



            <button style="position: relative;"><a style="position: relative;"><a
                        style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                        href="{{ route('marketplace.index') }}"></a>Zum Marktplatz</button>
        </div>
    </div>

    <!-- ################### BUCHER SECTION ################### -->

    <div class="blog-container">
        <div class="blog-heading">Bücher</div>
        <div class="blog-sub-heading">
            Die Seite "Bücher" befindet sich noch im Aufbau. Hier werden wir Ihnen
            Bücher zum Thema Pflege und Gesundheit präsentieren.
        </div>


        <!-- ###################### For Desktop ################### -->
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="https://amzn.to/46e0eKE" target="_blank"></a><img
                            src="{{ asset('assets/Images/Bucher_img1.svg') }}" alt="" />
                    </div>
                    <div class="blog-card-body">
                        <div class="bucher-card-heading">
                            Wenn das Leben um Hilfe ruft: Angehörige zwischen Hingabe,
                            Pflichtgefühl und Verzweiflung
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="https://amzn.to/3W4UAG4" target="_blank"></a> <img
                            src="{{ asset('assets/Images/Bucher_img2.svg') }}" alt="" />
                    </div>
                    <div class="blog-card-body">
                        <div class="bucher-card-heading">
                            Pflege organisieren und finanzieren: Eine Orientierungshilfe für
                            Angehörige
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="https://amzn.to/4cFjZ05" target="_blank"></a> <img
                            src="{{ asset('assets/Images/Bucher_img3.svg') }}" alt="" />
                    </div>
                    <div class="blog-card-body">
                        <div class="bucher-card-heading">
                            Pflege zu Hause: Was Angehörige wissen müssen
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button style="position: relative;"><a style="position: relative;"><a
                    style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                    href="{{ route('buecher') }}"></a>Zu den Büchern</button>
    </div>

    <!-- ###################### ACADEMY SECTION #######################  -->

    <div class="academy-container"
        style="
        background-color: #b222221a;
        padding-top: 2rem;
        padding-bottom: 4rem;
      ">
        <div class="container-fluid section1-container" style="width: 85%">
            <div class="row" style="height: 100%">
                <div class="section1-right col-md-5 mb-4 mb-md-0">
                    <img style="border-radius: 20px; width: 100%; object-fit: cover"
                        src="{{ asset('assets/Images/Academy_img.svg') }}" alt="" />
                </div>
                <div class="section1-left col-md-7">
                    <span class="section1-top1">Online-Kurse für Pflegebedürftige und pflegende Angehörige</span>
                    <div class="section1-top2 text-md-start text-center">Academy</div>
                    <div class="section1-top4">
                        Die PflegePur-Academy ist Ihr kompetenter Partner in der
                        Weiterbildung rund um das Thema Pflege. Unser Angebot richtet sich
                        an pflegebedürftige Personen, pflegende Angehörige und
                        professionelle Pflegekräfte. In unseren Online-Kursen vermitteln
                        wir praxisnahes Wissen, das Sie in Ihrem Alltag unterstützt, um
                        bestmögliche Pflege zu gewährleisten. Wir bieten Ihnen eine
                        Vielzahl an Themen, von der grundsätzlichen Pflege bis hin zu
                        spezialisierten Bereichen wie der Pflege von Menschen mit Demenz,
                        der Palliativpflege und der Pflege von Menschen mit speziellen
                        Krankheitsbildern.
                    </div>
                    <div>
                        <button style="position: relative;"><a style="position: relative;"><a
                                    style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                                    href="https://pflegepur.myelopage.com/"></a>Zu unserer Academy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ###################### SECTION 3 #######################  -->

    <div class="container-fluid section1-container" style="width: 85%; margin-bottom: 2.5rem">
        <div class="row" style="height: 100%">
            <div class="section1-left col-md-7">
                <div class="text-start text-md-end">
                    <span class="section1-top1">Partner von PflegePur</span>
                </div>
                <div class="section1-top2 text-md-start text-md-end text-center">
                    Seien Sie Teil von etwas Größerem!
                </div>
                <div class="section1-top4 text-md-end text-start">
                    Möchten Sie Partner oder Mitmacher von PflegePur werden? <br />
                    Gemeinsam können wir einen echten Unterschied im Leben vieler
                    Menschen machen. <br /><br />Bei PflegePur bieten wir Ihnen
                    vielfältige Möglichkeiten, sich zu engagieren, Ihr Know-how
                    einzubringen und gemeinsam mit uns die Pflege zukunftssicher zu
                    gestalten. <br /><br />
                    Ob als Partner in Projekten oder als tatkräftiger Mitmacher im
                    Alltag – Ihre Ideen und Ihr Einsatz sind bei uns herzlich
                    willkommen. <br />Lassen Sie uns zusammen neue Wege gehen und Pflege
                    neu denken! <br />
                    Ihr PflegePur-Team
                </div>
                <div>
                    <div class="text-center text-md-end">
                        <button style="position: relative;"><a style="position: relative;"><a
                                    style="position: absolute;top: 0; width: 100%; height: 100%;left: 0;
      border-radius: 10px;"
                                    href="{{ route('partner') }}"></a>Erfahren Sie hier mehr!</button>
                    </div>
                </div>
            </div>

            <div class="section1-right col-md-5 mb-4 mb-md-0 mt-4 mt-md-0">
                <img style="border-radius: 20px; width: 100%; object-fit: cover"
                    src="{{ asset('assets/Images/Section3_img.svg') }}" alt="" />
            </div>
        </div>
    </div>

    @include('components.footer.footer_first')

    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/index-bottom-img.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

</body>

</html>
