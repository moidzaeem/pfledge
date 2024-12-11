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
        <button class="online-rechner-section2-btn3 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.third') }}"></a> RECHNER PFLEGEGELD
        </button>
        <button class="online-rechner-section2-btn4 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.fourth') }}"></a> RECHNER PFLEGEKOSTEN IM PFLEGEHEIM
        </button>
        <button class="online-rechner-section2-btn5 online-rechner-section2-btn ">
            <a href="{{ route('online.rechner.fifth') }}"></a>
            RECHNER PFLEGEKOSTEN FÜR AMBULANTE PFLEGE
        </button>
        <button class="online-rechner-section2-btn6 online-rechner-section2-btn online-active-btn">
            <a href="{{ route('online.rechner.sixth') }}"></a>
            RECHNER ZUZAHLUNGEN
        </button>
    </div>
    <div class="online-rechner-section3-container">
        <div class="online-rechner-section3-sub-container">
            <div class="online-rechner-section3-heading">Zuzahlungsrechner</div>

            <div class="online-rechner-content mt-3 mb-5">
                Im Rahmen der gesetzlichen Krankenversicherung gelten verschiedene Zuzahlungsregelungen für Leistungen
                wie Arznei-, Heil- und Hilfsmittel sowie Krankenhausaufenthalte, Vorsorge- und Rehabilitationsmaßnahmen,
                häusliche Krankenpflege, Haushaltshilfe und Fahrkosten. Mit unserem Zuzahlungsrechner können Sie schnell
                und einfach ermitteln, bis zu welchem Betrag Sie von Zuzahlungen befreit werden können und welchen
                Höchstbetrag Sie maximal selbst tragen müssen. Geben Sie einfach das Berechnungsjahr und einige
                grundlegende Angaben ein, um Ihre individuelle Zuzahlungsgrenze zu berechnen.

            </div>

            <!-- ######################## MODULE 1 FORM ######################## -->
            <div class="online-rechner-section3-heading-bottom">
                <div>Erfassung</div>
            </div>
            <form action="" id="zuzahlungen">
                <div class="online-rechner-section3-form" style="display: block" id="module1Form">

                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Berechnung für</label>
                        <select name="" id="jahr" style="width: 50%;">
                            <option value="0">2023</option>
                            <option value="1">2022</option>

                        </select>
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">ALG II- oder Sozialhilfeempfänger</label>
                        <select name="" id="alg" style="width: 50%;">
                            <option value="0">Nein</option>
                            <option value="1">Ja</option>>
                        </select>
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Chronisch krank oder Pflegegrad 3 bis 5</label>
                        <select name="" id="chronisch" style="width: 50%;">
                            <option value="0">Nein</option>
                            <option value="1">Ja</option>
                        </select>
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between;">
                        <label style="margin-top: -0.67rem;" class="online-rechner-page2-section3-heading "
                            for="online-rechner-input1">Verheiratet oder eingetragene Lebenspartnerschaft</label>
                        <select name="" id="verheiratet" style="width: 50%;">
                            <option value="0">Nein</option>
                            <option value="1">Ja</option>
                        </select>
                    </div>



                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top"
                            for="online-rechner-input1">Anzahl der Kinder</label>
                        <input id="kinder" type="number" min="0" max="2" class="ambulants2"
                            value="0" style="width: 50%;">
                    </div>
                    <div class="online-rechner-page2-section3-input-div"
                        style="margin-bottom: 1rem; display: flex; align-items: center;justify-content: space-between; margin-top: 1rem;">
                        <label style="margin-top: -0.67rem;"
                            class="online-rechner-page2-section3-heading input-margin-top"
                            for="online-rechner-input1">Familien-Bruttoeinkommen</label>
                        <input id="brutto" type="number" min="0" max="2" class="ambulants3"
                            value="0" style="width: 50%;">
                    </div>

            </form>
            <div style="display: flex; justify-content: center;"><button id="zuzahlungen-btn"
                    class="online-rechner-page2-section3-btn"
                    style="border: none; text-transform: uppercase;">Berechnen</button></div>
        </div>


        <!-- ######################## Online Rechner Section 3 bottom ######################## -->
        <div class="online-rechner-section3-bottom">
            <div class="online-rechner-section3-bottom-heading">Ergebnis</div>
            <div class="online-rechner-section3-heading-bottom">
                <div>Ergebnis</div>
            </div>

            <div class="online-rechner-section3-inner-bottom online-rechner-section3-inner-bottom2">
                <div style="padding-top: 0"><span class="span1">Familieneinkommen</span> <span class="span2">0,00
                        EUR
                    </span> </div>
                <div> <span class="span1">- Freibetrag Partner</span> <span class="span2">0,00 EUR</span> </div>
                <div> <span class="span1">- Freibetrag Kinder</span> <span class="span2">0,00 EUR</span> </div>
                <div> <span class="span1">Pflegegeld Höchstbetrag</span> <span class="span2">0,00 %</span> </div>
                <div> <span class="span1">= Berechnungsgrundlage</span> <span class="span2">0,00 EUR</span> </div>
                <div> <span class="span1">Belastungsgrenze</span> <span class="span2">1% davon</span> </div>

                <div style="border-bottom: none; color: #ffffffbd;">In diesem Jahr müssen Sie demnach maximal 0,00 EUR
                    für Zuzahlungen aufbringen.</div>

            </div>
            <div style="display: flex; justify-content: center; margin-top: 1rem;"> <button
                    class="online-rechner-page2-section3-btn"
                    style="border: none;background-color: #000000; width: 200px;">Zurück</button></div>
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
