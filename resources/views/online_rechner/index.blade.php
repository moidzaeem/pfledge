<!DOCTYPE html>
<html lang="en">

@include('components.header.head')

<style>

</style>

<body>
    <div class="header-container service-header-bg"
        style="
    background-image: url('{{ asset('assets/Images/Online-rechner_header_bg.svg') }}') !important;">
        @include('components.header.header')


        <div class="service-header-content">
            <span>Für Pflegegrad, Pflegekosten und mehr - schnell, einfach,
                präzise</span>
            <div>Online-Rechner</div>
        </div>
    </div>

    <!-- ########################### Online Rechner SECTION 1 ########################### -->

    <div class="uberuns-container">
        <div class="uberuns-row row">
            <div class="col-md-6 uberuns-left d-none d-md-block">
                <img src="{{ asset('assets/Images/Online_rechner_section1_img.svg') }}" alt="" />
            </div>
            <div class="col-md-6 uberuns-left d-block d-md-none">
                <img src="{{ asset('assets/Images/Online_rechner_section1_img_sm.svg') }}" alt="" />
            </div>
            <div class="col-md-6 uberuns-right">
                <div class="col-12 uberuns-section1-content">
                    Bei uns finden Sie eine Vielzahl an Online-Rechnern, die Ihnen dabei
                    helfen, schnell und unkompliziert wichtige Informationen zu Ihren
                    individuellen Pflegesituationen zu erhalten. Ob es um die Einstufung
                    in einen Pflegegrad, die Berechnung von Pflegeleistungen oder die
                    Kostenübersicht für stationäre und ambulante Pflege geht – unsere
                    Tools unterstützen Sie dabei, den Überblick zu behalten und
                    fundierte Entscheidungen zu treffen. <br />
                    <div class="mt-2 mb-2">Unsere verfügbaren Rechner:</div>
                    <ul class="mb-4">
                        <li>
                            Rechner Pflegegrad: Ermitteln Sie Ihren oder den Pflegegrad
                            Ihrer Angehörigen einfach und schnell.
                        </li>
                        <li>
                            Rechner Pflegeleistungen: Finden Sie heraus, welche
                            Pflegeleistungen Ihnen zustehen und wie viel Unterstützung Sie
                            erwarten können.
                        </li>
                        <li>
                            Rechner Pflegegeld: Berechnen Sie die Höhe des Pflegegeldes, das
                            Sie in Anspruch nehmen können.
                        </li>
                        <li>
                            Rechner Pflegekosten im Pflegeheim: Verschaffen Sie sich
                            Klarheit über die anfallenden Kosten bei der stationären Pflege.
                        </li>
                        <li>
                            Rechner Pflegekosten für ambulante Pflege: Kalkulieren Sie die
                            Kosten für pflegerische Unterstützung zu Hause.
                        </li>
                        <li>
                            Rechner Zuzahlungen: Ermitteln Sie, welche Zuzahlungen Sie für
                            verschiedene Pflegeleistungen leisten müssen.
                        </li>
                    </ul>
                    PflegePur steht für einfache Handhabung, präzise Ergebnisse und
                    zuverlässige Informationen. Nutzen Sie unsere Online-Rechner, um
                    Ihre Pflegefragen zu klären und die bestmögliche Unterstützung zu
                    finden. Wir sind hier, um Ihnen den Weg durch das komplexe
                    Pflegesystem zu erleichtern.
                    <br />
                    <div class="mt-1">
                        Starten Sie jetzt und entdecken Sie, wie PflegePur Ihnen helfen
                        kann!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ########################### Online Rechner SECTION 2 ########################### -->

    <div class="online-rechner-section2">
        <button class="online-rechner-section2-btn1 online-rechner-section2-btn online-active-btn">
            <a href="{{ route('online.rechner.index') }}"></a> RECHNER PFLEGEGRAD
        </button>
        <button class="online-rechner-section2-btn2 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.second') }}"></a> RECHNER PFLEGELEISTUNGEN
        </button>
        <button class="online-rechner-section2-btn3 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.third') }}"></a> RECHNER PFLEGEGELD
        </button>
        <button class="online-rechner-section2-btn4 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.fourth') }}"></a> RECHNER PFLEGEKOSTEN IM PFLEGEHEIM
        </button>
    </div>

    <!-- ########################### Online Rechner SECTION 3 ########################### -->
    <div class="online-rechner-section3-container">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegegradrechner</div>
            <div class="online-rechner-section3-sub-heading">
                Ihr schneller Weg zur ersten Pflegegrad-Einschätzung – unser
                Pflegegradrechner
            </div>

            <div class="online-rechner-content">
                Mit unserem Pflegegradrechner können Sie eine erste Orientierung
                erhalten, ob und in welchem Umfang ein Pflegegrad beantragt werden
                kann. Dieser Rechner ist speziell für erwachsene Pflegebedürftige
                entwickelt worden und basiert auf den aktuellen Richtlinien des
                Begutachtungsinstruments gemäß dem Elften Buch des Sozialgesetzbuches.
                Nehmen Sie sich etwas Zeit und füllen Sie die einzelnen
                Bewertungskriterien sorgfältig aus. Je genauer die Angaben, desto
                realistischer ist das Ergebnis.
            </div>
            <br />
            <div class="online-rechner-section3-content-bottom">
                Bitte beachten Sie: Der Pflegegradrechner dient als Orientierungshilfe
                und ersetzt nicht den persönlichen Antrag bei den zuständigen Stellen.
                Die endgültige Entscheidung über den Pflegegrad trifft der
                Medizinische Dienst (MD). Verwenden Sie den Rechner, um sich
                bestmöglich auf den Antrag vorzubereiten und eine fundierte
                Einschätzung zu erhalten.
            </div>

            <!-- ######################## Online Rechner Section 3 Buttons ######################## -->

            <div class="online-rechner-section3-buttons">
                <button id="module1-btn" class="online-rechner-section3-btn1 online-rechner-section3-btn active-btn2">
                    Modul 1
                </button>
                <button class="online-rechner-section3-btn" id="module2-btn">
                    Modul 2
                </button>
                <button class="online-rechner-section3-btn" id="module3-btn">
                    Modul 3
                </button>
                <button class="online-rechner-section3-btn" id="module4-btn">
                    Modul 4
                </button>
                <button class="online-rechner-section3-btn" id="module5-btn">
                    Modul 5
                </button>
                <button class="online-rechner-section3-btn" id="module6-btn">
                    Modul 6
                </button>
            </div>

            <!-- ######################## Online Rechner Section 3 Form ######################## -->
            <form action="{{ route('online.rechner.calculate') }}" method="POST">
                @csrf
                <!-- ######################## MODULE 1 FORM ######################## -->
                <div class="online-rechner-section3-form" style="display: block" id="module1Form">
                    <div class="online-rechner-section3-form-heading">1. Mobilität</div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Die Gutachterin oder der Gutachter schaut sich die körperliche
                        Beweglichkeit an. Zum Beispiel: Kann die betroffene Person alleine
                        aufstehen und vom Bett ins Badezimmer gehen? Kann sie sich
                        selbstständig in den eigenen vier Wänden bewegen, ist Treppensteigen
                        möglich?
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input1">1.1 Positionswechsel im Bett</label>
                            <select name="modul1_1" id="online-rechner-input1">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input2">1.2 Halten einer stabilen Sitzposition</label>
                            <select name="modul1_2" id="online-rechner-input2">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input3">1.3 Umsetzen</label>
                            <select name="modul1_3" id="online-rechner-input3">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input4">1.4 Fortwegen innerhalb des Wohnbereichs</label>
                            <select name="modul1_4" id="online-rechner-input4">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input5">1.5 Treppensteigen</label>
                            <select name="modul1_5" id="online-rechner-input5">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input6">1.6 Gebrauchsfähigkeit beider Arme und Beine</label>
                            <select name="modul1_6" id="online-rechner-input6">
                                <option value="0">Ja</option>
                                <option value="1">Nein</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>
                <!-- ######################## MODULE 2 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module2Form">
                    <div class="online-rechner-section3-form-heading">
                        2. Kognitive & kommunikative Fähigkeiten
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Dieser Bereich umfasst das Verstehen und Reden. Zum Beispiel: Kann
                        sich die betroffene Person zeitlich und räumlich orientieren?
                        Versteht sie Sachverhalte, erkennt sie Risiken und kann sie
                        Gespräche mit anderen Menschen führen?
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input21">2.1 Erkennen von Personen aus dem näheren
                                Umfeld</label>
                            <select name="module2_1" id="online-rechner-input21">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input22">2.2 Örtliche Orientierung</label>
                            <select name="module2_2" id="online-rechner-input22">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input23">2.3 Zeitliche Orientierung</label>
                            <select name="module2_3" id="online-rechner-input23">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input24">2.4 Erinnern an wesentliche Ereignisse oder
                                Beobachtungen</label>
                            <select name="module2_4" id="online-rechner-input24">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input25">2.5 Steuern von mehrschrittigen
                                Alltagshandlungen</label>
                            <select name="module2_5" id="online-rechner-input25">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input26">2.6 Treffen von Entscheidungen im Alltagsleben</label>
                            <select name="module2_6" id="online-rechner-input26">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input27">2.7 Verstehen von Sachverhalten und
                                Informationen</label>
                            <select name="module2_7" id="online-rechner-input27">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input28">2.8 Erkennen von Risiken und Gefahren</label>
                            <select name="module2_8" id="online-rechner-input28">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input29">2.9 Mitteilen von elementaren Bedürfnissen</label>
                            <select name="module2_9" id="online-rechner-input29">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="online-rechner-input210">2.10 Verstehen von Aufforderungen</label>
                            <select name="module2_10" id="online-rechner-input210">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="online-rechner-input211">2.11 Beteiligen an einem Gespräch</label>
                            <select name="module2_11" id="online-rechner-input211">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 3 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module3Form">
                    <div class="online-rechner-section3-form-heading">
                        3. Verhaltensweisen & psychische Problemlagen
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Hierunter fallen unter anderem Unruhe in der Nacht oder Ängste und
                        Aggressionen, die für die pflegebedürftige Person, aber auch für
                        ihre Angehörigen, belastend sind. Auch wenn Abwehrreaktionen bei
                        pflegerischen Maßnahmen bestehen, wird dies hier berücksichtigt.
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input31">3.1 Motorisch geprägte
                                Verhaltensauffälligkeiten</label>
                            <select name="modul3_1" id="online-rechner-input31">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input32">3.2 Nächtliche Unruhe</label>
                            <select name="modul3_2" id="online-rechner-input32">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input33">3.3 Selbstschädigendes und autoaggressives
                                Verhalten</label>
                            <select name="modul3_3" id="online-rechner-input33">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input34">3.4 Beschädigen von Gegenständen</label>
                            <select name="modul3_4" id="online-rechner-input34">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input35">3.5 Physisch aggressives Verhalten</label>
                            <select name="modul3_5" id="online-rechner-input35">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input36">3.6 Verbale Aggression</label>
                            <select name="modul3_6" id="online-rechner-input36">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input37">3.7 Andere pflegerelevante vokale
                                Auffälligkeiten</label>
                            <select name="modul3_7" id="online-rechner-input37">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input38">3.8 Abwehr pflegerischer Maßnahmen</label>
                            <select name="modul3_8" id="online-rechner-input38">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input39">3.9 Wahnvorstellungen</label>
                            <select name="modul3_9" id="online-rechner-input39">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input310">3.10 Ängste</label>
                            <select name="modul3_10" id="online-rechner-input310">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input311">3.11 Antriebslosigkeit</label>
                            <select name="modul3_11" id="online-rechner-input311">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input312">3.12 Sozial inadäquate Verhaltensweisen</label>
                            <select name="modul3_12" id="online-rechner-input312">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="online-rechner-input313">3.13 Sonstige inadäquate Handlungen</label>
                            <select name="modul3_13" id="online-rechner-input313">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 4 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module4Form">
                    <div class="online-rechner-section3-form-heading">
                        4. Selbstversorgung
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Kann sich die Antragstellerin oder der Antragsteller sich zum Beispiel waschen und anziehen,
                        kann
                        sie oder er selbstständig die Toilette aufsuchen sowie essen und trinken?
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="module4_1">4.1 Waschen des vorderen Oberkörpers</label>
                            <select name="module4_1" id="module4_1" aria-label="Waschen des vorderen Oberkörpers">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_2">4.2 Körperpflege im Bereich des Kopfes</label>
                            <select name="module4_2" id="module4_2" aria-label="Körperpflege im Bereich des Kopfes">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_3">4.3 Waschen des Intimbereichs</label>
                            <select name="module4_3" id="module4_3" aria-label="Waschen des Intimbereichs">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_4">4.4 Duschen und Baden einschließlich Waschen der Haare</label>
                            <select name="module4_4" id="module4_4"
                                aria-label="Duschen und Baden einschließlich Waschen der Haare">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_5">4.5 An- und Auskleiden des Oberkörpers</label>
                            <select name="module4_5" id="module4_5" aria-label="An- und Auskleiden des Oberkörpers">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_6">4.6 An- und Auskleiden des Unterkörpers</label>
                            <select name="module4_6" id="module4_6" aria-label="An- und Auskleiden des Unterkörpers">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_7">4.7 Mundgerechtes Zubereiten der Nahrung und Eingießen von
                                Getränken</label>
                            <select name="module4_7" id="module4_7"
                                aria-label="Mundgerechtes Zubereiten der Nahrung und Eingießen von Getränken">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_8">4.8 Essen</label>
                            <select name="module4_8" id="module4_8" aria-label="Essen">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_9">4.9 Trinken</label>
                            <select name="module4_9" id="module4_9" aria-label="Trinken">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module4_10">4.10 Benutzen einer Toilette oder eines Toilettenstuhls</label>
                            <select name="module4_10" id="module4_10"
                                aria-label="Benutzen einer Toilette oder eines Toilettenstuhls">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input411">4.11 Bewältigen der Folgen einer Harninkontinenz und
                                Umgang mit
                                Dauerkatheter und Urostoma</label>
                            <select name="module4_11" id="">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input412">4.12 Bewältigen der Folgen einer Stuhlinkontinenz und
                                Umgang
                                mit Stoma</label>
                            <select name="module4_12" id="">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="online-rechner-input413">4.13 Versorgung mit Hilfe - Ernährung parenteral oder
                                über
                                Sonde</label>
                            <select name="module4_13" id="">
                                <option value="0">
                                    Entfällt, selbstständig, Versorgung mit Hilfe (aber nicht
                                    täglich, nicht auf Dauer)
                                </option>
                                <option value="1">
                                    Ausschließlich oder nahezu ausschließlich
                                </option>
                                <option value="2">
                                    Täglich, zusätzlich zu oraler Ernährung
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn" type="submit">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## MODULE 5 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module5Form">
                    <div class="online-rechner-section3-form-heading">
                        5. Bewältigung von & selbstständiger Umgang mit krankheits-/therapiebedingten Anforderungen
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Die Gutachterin oder der Gutachter schaut, ob die betroffene Person zum Beispiel Medikamente
                        selbst
                        einnehmen, den Blutzucker eigenständig messen, mit Hilfsmitteln wie Prothesen oder Rollator
                        umgehen
                        und eine Ärztin beziehungsweise einen Arzt aufsuchen kann.
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="module5_1">5.1 Medikation</label>
                            <select name="module5_1" id="module5_1">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_2">5.2 Injektionen</label>
                            <select name="module5_2" id="module5_2">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_3">5.3 Versorgung intravenöser Zugänge (Port)</label>
                            <select name="module5_3" id="module5_3">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_4">5.4 Absaugen und Sauerstoffgabe</label>
                            <select name="module5_4" id="module5_4">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_5">5.5 Einreibungen oder Kälte- und Wärmeanwendungen</label>
                            <select name="module5_5" id="module5_5">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_6">5.6 Messung und Deutung von Körperzuständen</label>
                            <select name="module5_6" id="module5_6">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_7">5.7 Körpernahe Hilfsmittel</label>
                            <select name="module5_7" id="module5_7">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich ergänzend</option>
                                <option value="0.03">1 x pro Monat</option>
                                <option value="0.07">2 x pro Monat</option>
                                <option value="0.1">3 x pro Monat</option>
                                <option value="0.17">4 x pro Monat (1 x pro Woche)</option>
                                <option value="0.29">2 x pro Woche</option>
                                <option value="0.43">3 x pro Woche</option>
                                <option value="0.57">4 x pro Woche</option>
                                <option value="0.71">5 x pro Woche</option>
                                <option value="0.86">6 x pro Woche</option>
                                <option value="1">7 x pro Woche (1 x pro Tag)</option>
                                <option value="2">2 x pro Tag</option>
                                <option value="3">3 x pro Tag</option>
                                <option value="4">4 x pro Tag</option>
                                <option value="5">5 x pro Tag</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="module5_8">5.8 Arztbesuche</label>
                            <select name="module5_8" id="module5_8">
                                <option value="0">Nie oder seltener als einmal wöchentlich</option>
                                <option value="1">ein- bis mehrmals wöchentlich</option>
                                <option value="2" selected="">ein- bis zweimal täglich</option>
                                <option value="3">mindestens dreimal täglich</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="online-rechner-input59">5.9 Versorgung mit Stoma</label>
                            <select name="module5_9"id="">
                                <option value="0">Nie oder seltener als einmal wöchentlich</option>
                                <option value="1">ein- bis mehrmals wöchentlich</option>
                                <option value="2">ein- bis zweimal täglich</option>
                                <option value="3">mindestens dreimal täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input510">5.10 Regelmäßige Einmalkatheterisierung und Nutzung
                                von
                                Abführmethoden</label>
                            <select name="module5_10" id="">
                                <option value="0">Nie oder seltener als einmal wöchentlich</option>
                                <option value="1">ein- bis mehrmals wöchentlich</option>
                                <option value="2">ein- bis zweimal täglich</option>
                                <option value="3">mindestens dreimal täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input511">5.11 Therapiemaßnahmen in häuslicher Umgebung</label>
                            <select name="module5_11" id="">
                                <option value="0">
                                    Nie oder seltener als einmal wöchentlich
                                </option>
                                <option value="1">ein- bis mehrmals wöchentlich</option>
                                <option value="2">ein- bis zweimal täglich</option>
                                <option value="3">mindestens dreimal täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input512">5.12 Zeit- und technikintensive Maßnahmen in
                                häuslicher
                                Umgebung</label>
                            <select name="module5_12" id="">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">Täglich</option>
                                <option value="2">1 x pro Monat</option>
                                <option value="3">2 x pro Monat</option>
                                <option value="4">3 x pro Monat</option>
                                <option value="5">4 x pro Monat (1 x pro Woche)</option>
                                <option value="6">2 x pro Woche</option>
                                <option value="7">3 x pro Woche</option>
                                <option value="8">4 x pro Woche</option>
                                <option value="9">5 x pro Woche</option>
                                <option value="10">6 x pro Woche</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input513">5.13 Arztbesuche</label>
                            <select name="module5_13" id="">
                                <option value="0">Entfällt</option>
                                <option value="1">1 x pro Monat</option>
                                <option value="2">2 x pro Monat</option>
                                <option value="3">3 x pro Monat</option>
                                <option value="4">4 x pro Monat (1 x pro Woche)</option>
                                <option value="5">2 x pro Woche</option>
                                <option value="6">3 x pro Woche</option>
                                <option value="7">4 x pro Woche</option>
                                <option value="8">5 x pro Woche</option>
                                <option value="9">6 x pro Woche</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input514">5.14 Besuch anderer medizinischer oder thera
                                peutischer
                                Einrichtungen (bis zu 3 Std)</label>
                            <select name="module5_14" id="">
                                <option value="0">Entfällt</option>
                                <option value="1">1 x pro Monat</option>
                                <option value="2">2 x pro Monat</option>
                                <option value="3">3 x pro Monat</option>
                                <option value="4">4 x pro Monat (1 x pro Woche)</option>
                                <option value="5">2 x pro Woche</option>
                                <option value="6">3 x pro Woche</option>
                                <option value="7">4 x pro Woche</option>
                                <option value="8">5 x pro Woche</option>
                                <option value="9">6 x pro Woche</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input515">5.15 Zeitlich ausgedehnte Besuche anderer
                                medizinischer
                                oder
                                therapeutischer Einrichtungen (länger als 3 Std.)</label>
                            <select name="module5_15" id="">
                                <option value="0">Entfällt</option>
                                <option value="1">1 x pro Monat</option>
                                <option value="2">2 x pro Monat</option>
                                <option value="3">3 x pro Monat</option>
                                <option value="4">4 x pro Monat (1 x pro Woche)</option>
                                <option value="5">2 x pro Woche</option>
                                <option value="6">3 x pro Woche</option>
                                <option value="7">4 x pro Woche</option>
                                <option value="8">5 x pro Woche</option>
                                <option value="9">6 x pro Woche</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="online-rechner-input516">5.16 Einhaltung einer Diät und anderer krankheits-
                                oder
                                therapiebedingter Verhaltensvorschriften, und zwar:</label>
                            <select name="module5_16" id="">
                                <option value="0">Entfällt oder selbstständig</option>
                                <option value="1">
                                    Überwiegend selbstständig (Erinnerung/Anleitung ist mindestens
                                    einmal täglich notwendig)
                                </option>
                                <option value="2">
                                    Überwiegend unselbstständig (benötigt meistens
                                    Anleitung/Beaufsichtigung mehrmals täglich)
                                </option>
                                <option value="3">
                                    Unselbstständig (benötigt immer Anleitung/Beaufsichtigung)
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- ######################## MODULE 6 FORM ######################## -->
                <div class="online-rechner-section3-form" id="module6Form">
                    <div class="online-rechner-section3-form-heading">
                        6. Gestaltung des Alltagslebens und sozialer Kontakte
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Kann die betroffene Person zum Beispiel ihren Tagesablauf
                        selbstständig gestalten? Kann sie mit anderen Menschen in direkten
                        Kontakt treten oder die Skatrunde ohne Hilfe besuchen?
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="online-rechner-input61">6.1 Gestaltung des Alltagslebens und Anpassung an
                                Veränderungen</label>
                            <select name="module6_1" id="module6_1">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input62">6.2 Ruhen und Schlafen</label>
                            <select name="module6_2" id="">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input63">6.3 Sich beschäftigen</label>
                            <select name="module6_3" id="">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input64">6.4 Vornehmen von in die Zukunft gerichteten
                                Planungen</label>
                            <select name="module6_4" id="">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input65">6.5 Interaktion mit Personen im direkten
                                Kontakt</label>
                            <select name="module6_5" id="">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input66">6.6 Kontaktpflege zu Personen außerhalb des direkten
                                Umfeldes</label>
                            <select name="module6_6" id="">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

                <!-- ######################## Online Rechner Section 3 bottom ######################## -->
                <div class="online-rechner-section3-form" id="module6Form">
                    <div class="online-rechner-section3-form-heading">
                        6. Gestaltung des Alltagslebens und sozialer Kontakte
                    </div>
                    <div class="online-rechner-section3-form-sub-heading">
                        Kann die betroffene Person zum Beispiel ihren Tagesablauf
                        selbstständig gestalten? Kann sie mit anderen Menschen in direkten
                        Kontakt treten oder die Skatrunde ohne Hilfe besuchen?
                    </div>

                    <div class="col-md-4">
                        <label for="module6_1">6.1 Gestaltung des Alltagslebens und Anpassung an
                            Veränderungen</label>
                        <select name="module7_1" id="">
                            <option value="0">Selbstständig</option>
                            <option value="1">Überwiegend selbstständig</option>
                            <option value="2">Überwiegend unselbstständig</option>
                            <option value="3">Unselbstständig</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="module6_2">6.2 Ruhen und Schlafen</label>
                        <select name="" id="module6_2">
                            <option value="0">Selbstständig</option>
                            <option value="1">Überwiegend selbstständig</option>
                            <option value="2">Überwiegend unselbstständig</option>
                            <option value="3">Unselbstständig</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="module6_3">6.3 Sich beschäftigen</label>
                        <select name="" id="module6_3">
                            <option value="0">Selbstständig</option>
                            <option value="1">Überwiegend selbstständig</option>
                            <option value="2">Überwiegend unselbstständig</option>
                            <option value="3">Unselbstständig</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="module6_4">6.4 Vornehmen von in die Zukunft gerichteten Planungen</label>
                        <select name="" id="module6_4">
                            <option value="0">Selbstständig</option>
                            <option value="1">Überwiegend selbstständig</option>
                            <option value="2">Überwiegend unselbstständig</option>
                            <option value="3">Unselbstständig</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="module6_5">6.5 Interaktion mit Personen im direkten Kontakt</label>
                        <select name="" id="module6_5">
                            <option value="0">Selbstständig</option>
                            <option value="1">Überwiegend selbstständig</option>
                            <option value="2">Überwiegend unselbstständig</option>
                            <option value="3">Unselbstständig</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="module6_6">6.6 Kontaktpflege zu Personen außerhalb des direkten
                            Umfeldes</label>
                        <select name="" id="module6_6">
                            <option value="0">Selbstständig</option>
                            <option value="1">Überwiegend selbstständig</option>
                            <option value="2">Überwiegend unselbstständig</option>
                            <option value="3">Unselbstständig</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

            </form>

            <div class="online-rechner-section3-bottom">
                <div class="online-rechner-section3-bottom-heading">Ergebnis</div>
                <div class="online-rechner-section3-heading-bottom">
                    <div class="">Module</div>
                    <div class="">Summe Einzelpunkte</div>
                    <div class="">
                        Gewichtete Punkte
                    </div>
                </div>

                <div class="online-rechner-section3-inner-bottom">
                    @foreach (session('modul1_punkte', []) as $moduleName => $moduleValues)
                        <div class="row">
                            <div class="col-lg-4">
                                <div style="padding-top: 0">{{ $loop->iteration }} - {{ $moduleName }}</div>
                            </div>
                            <div class="col-lg-4">
                                <div class="pt-0">{{ $moduleValues['punkte'] ?? '---' }}</div>
                            </div>
                            <div class="col-lg-4">
                                <div style="padding-top: 0">{{ $moduleValues['gewichtet'] ?? '---' }}</div>
                            </div>
                        </div>
                    @endforeach

                    <div class="online-rechner-section3-bottom-heading2">
                        PFLEGEGRAD:{{ session('pflegegrad', '') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Online_rechner_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')


</body>

</html>
