<!DOCTYPE html>
<html lang="en">

@include('components.header.head')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
        <button class="online-rechner-section2-btn1 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.index') }}"></a> RECHNER PFLEGEGRAD
        </button>
        <button class="online-rechner-section2-btn2 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.second') }}"></a> RECHNER PFLEGELEISTUNGEN
        </button>
        <button class="online-rechner-section2-btn3 online-rechner-section2-btn online-active-btn">
            <a href="{{ route('online.rechner.third') }}"></a> RECHNER PFLEGEGELD
        </button>
        <button class="online-rechner-section2-btn4 online-rechner-section2-btn">
            <a href="{{ route('online.rechner.fourth') }}"></a> RECHNER PFLEGEKOSTEN IM PFLEGEHEIM
        </button>
        {{-- <button class="online-rechner-section2-btn5 online-rechner-section2-btn">
            <a href="./rechner_pflegekosten_fur_ambulante_pflege.html"></a> RECHNER PFLEGEKOSTEN FÜR AMBULANTE PFLEGE
        </button>
        <button class="online-rechner-section2-btn6 online-rechner-section2-btn">
            <a href="./rechner_zuzahlungen.html"></a> RECHNER ZUZAHLUNGEN
        </button> --}}
    </div>

    <!-- ########################### Online Rechner SECTION 3 ########################### -->
    <div class="online-rechner-section3-container">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Pflegegeldrechner (ab 2024)</div>
            <div class="online-rechner-section3-sub-heading">
                Pflegegeldansprüche einfach berechnen – unser Pflegegeldrechner
            </div>

            <div class="online-rechner-content">
                Mit unserem Pflegegeldrechner können Sie schnell und unkompliziert ermitteln, wie hoch Ihr
                Pflegegeldanspruch bei Kombipflege ausfällt. Wenn Sie beispielsweise einen ambulanten Pflegedienst in
                Anspruch nehmen und Ihren Anspruch nicht vollständig ausschöpfen, können Sie den verbleibenden Betrag
                als Pflegegeld erhalten. Der Rechner hilft Ihnen dabei, diese Kombination aus Sachleistungen und
                Pflegegeld optimal zu berechnen und das Maximum aus Ihren Ansprüchen herauszuholen. <br>
                <br>
                Nutzen Sie unseren Pflegegeldrechner, um sich einen klaren Überblick über Ihre finanziellen
                Möglichkeiten zu verschaffen und die für Ihre Pflegesituation beste Lösung zu finden.
            </div>
            <br />




            <!-- ######################## Online Rechner Section 3 Form ######################## -->

            <!-- ######################## MODULE 1 FORM ######################## -->
            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>
            <form action="{{ route('online.rechner.calculationForThirdPage') }}" method="POST" id="pflegegeldForm">
                @csrf
                <div class="online-rechner-section3-form" style="display: block" id="module1Form">
                    <div class="online-rechner-section3-form-heading">Wie hoch ist das Pflegegeld, was Ihnen monatlich
                        zusteht? </div>
                    <div class="online-rechner-section3-form-sub-heading mt-4 mb-4">Geben Sie hier Ihren Pflegegrad und
                        Ihre Nutzung eines ambulanten Pflegedienstes ein.</div>

                    <div class="online-rechner-page2-section3-input-div" style="margin-bottom: 1rem; display: flex;">
                        <label style="margin-right: 1rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Pflegegrad</label>
                        <select name="pflegegrad" id="pflegegrad" style="width: 100px;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <label id="pflegegeldtext" class="online-rechner-page2-section3-heading"
                        for="online-rechner-input1"></label>

                    <div id="pflegegeldDescription" class="online-rechner-section3-form-sub-heading ">

                    </div>


                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top"
                            for="online-rechner-input1">Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 125
                            EUR)</label>
                        <input type="number" class="ambulants" id="ambulant2" min="1" max="125"
                            value="0" style="width: 50%;" name="ambulant">
                    </div>

            </form>
            <div style="display: flex; justify-content: center;"><button id="submit2"
                    class="online-rechner-page2-section3-btn"
                    style="border: none; text-transform: uppercase;">Pflegegeld berechnen</button></div>
        </div>


        <!-- ######################## Online Rechner Section 3 bottom ######################## -->
        <div class="online-rechner-section3-bottom">
            {{-- <div class="online-rechner-section3-bottom-heading">Ergebnis</div> --}}
            <div class="online-rechner-section3-heading-bottom">
                <div>Ergebnis</div>
            </div>

            <div
                class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2 online-rechner-section3-inner-bottom22">

                <div style="padding-top: 0; color: white; font-weight: 600;">
                    <span class="span1">Pflegegeldanspruch</span>
                    <span class="span2">Anspruch teilstationäre Pflege</span>
                    <span class="span3">Anspruch vollstationäre Pflege</span>
                </div>
                <div>
                    <span id="pflegegeldanspruchtext" class="span1">
                        {{ session('pflegegrad') ? number_format(session('pflegegrad'), 2, ',', '.') : '0,00' }} EUR
                    </span>

                    <span id="teilstattext" class="span2">
                        {{ session('teilstat') ? number_format(session('teilstat'), 2, ',', '.') : '0,00' }} EUR

                    </span>
                    <span id="vollstattext" class="span3">
                        {{ session('vollstat') ? number_format(session('vollstat'), 2, ',', '.') : '0,00' }} EUR

                    </span>
                </div>
            </div>
            {{-- <div style="display: flex; justify-content: center; margin-top: 1rem;"> <button
                    class="online-rechner-page2-section3-btn"
                    style="border: none;background-color: #000000; width: 200px;">Zurück</button></div> --}}
        </div>
    </div>
    </div>


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Online_rechner_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')


    <script>
        var pflegegradoutput, pflegegradDescription, ambulantmaxtext;
        var pflegegrad = $('select#pflegegrad').val();
        if (pflegegrad == 1) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 1</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 125 EUR der Kosten durch die Pflegekasse ersetzt.<br />Denn für Pflegegrad 1 gewährt die Pflegekasse den Entlastungsbetrag gemäß § 45b in Höhe von monatlich 125 Euro ausnahmsweise auch für die Sachleistung durch den Pflegedienst (Grundpflege). Zudem stehen Pflege­bedürftigen mit Pflegegrad 1 zwei kostenlose Pflegeberatungsbesuche pro Jahr zu.";
            pflegegradDescription = '';
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 125 EUR)";
        } else if (pflegegrad == 2) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 2</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 761 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 332 EUR. Wird z.B die maximale Kassenleistung in Höhe von 761 EUR durch den Pflegedienst zu 60% (= 456,60 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 332 EUR (= 132,80 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 761 EUR)";
        } else if (pflegegrad == 3) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 3</strong><br />Sie können einen häuslichen Pflege­dienst in Anspruch nehmen und bekommen monatlich bis zu 1.432 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 573 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.432 EUR durch den Pflegedienst zu 60% (= 859,20 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 573 EUR (= 229,20 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.432 EUR)";
        } else if (pflegegrad == 4) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 4</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 1.778 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 765 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.778 EUR durch den Pflegedienst zu 60% (= 1.066,80 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 765 EUR (= 306,00 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.778 EUR)";
        } else if (pflegegrad == 5) {
            pflegegradoutput =
                "<strong>Ausgewählter Pflegegrad: 5</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 2.200 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 947 EUR. Wird z.B die maximale Kassenleistung in Höhe von 2.200 EUR durch den Pflegedienst zu 60% (= 1.320,00 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 947 EUR (= 378,80 EUR) ausgezahlt.";
            ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 2.200 EUR)";
        }
        $("#pflegegeldtext").html(pflegegradoutput);
        $("#ambulantmaxtext").html(ambulantmaxtext);

        $('body').on('change', '#pflegegrad', function() {
            var pflegegrad = $('select#pflegegrad').val();
            if (pflegegrad == 1) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 1</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 125 EUR der Kosten durch die Pflegekasse ersetzt.<br />Denn für Pflegegrad 1 gewährt die Pflegekasse den Entlastungsbetrag gemäß § 45b in Höhe von monatlich 125 Euro ausnahmsweise auch für die Sachleistung durch den Pflegedienst (Grundpflege). Zudem stehen Pflege­bedürftigen mit Pflegegrad 1 zwei kostenlose Pflegeberatungsbesuche pro Jahr zu.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 125 EUR)";
            } else if (pflegegrad == 2) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 2</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 761 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 332 EUR. Wird z.B die maximale Kassenleistung in Höhe von 761 EUR durch den Pflegedienst zu 60% (= 456,60 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 332 EUR (= 132,80 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 761 EUR)";
            } else if (pflegegrad == 3) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 3</strong><br />Sie können einen häuslichen Pflege­dienst in Anspruch nehmen und bekommen monatlich bis zu 1.432 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 573 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.432 EUR durch den Pflegedienst zu 60% (= 859,20 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 573 EUR (= 229,20 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.432 EUR)";
            } else if (pflegegrad == 4) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 4</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 1.778 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 765 EUR. Wird z.B die maximale Kassenleistung in Höhe von 1.778 EUR durch den Pflegedienst zu 60% (= 1.066,80 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 765EUR (= 306,00 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 1.778 EUR)";
            } else if (pflegegrad == 5) {
                pflegegradoutput =
                    "<strong>Ausgewählter Pflegegrad: 5</strong><br />Sie können einen häuslichen Pflegedienst in Anspruch nehmen und bekommen monatlich bis zu 2.200 EUR der Kosten durch die Pflegekasse ersetzt.<br />Sofern diese Leistung nicht oder nur teilweise in Anspruch genommen wird, besteht für die Eigenleistung ein Anspruch auf anteilige Auszahlung von Pflegegeld bis zu 947 EUR. Wird z.B die maximale Kassenleistung in Höhe von 2.200 EUR durch den Pflegedienst zu 60% (= 1.320,00 EUR) aufgezehrt, so bleibt ein Anteil von 40% des maximalen Pflegegelds als Ausgleich für die Eigenleistungen. Es werden 40% von 947 EUR (= 378,80 EUR) ausgezahlt.";
                ambulantmaxtext = "Mtl. Inanspruchnahme Ambulanter Pflegedienst (max. 2.200 EUR)";
            }
            $("#pflegegeldtext").html(pflegegradoutput);
            $("#ambulantmaxtext").html(ambulantmaxtext);
        });
    </script>
</body>

</html>
