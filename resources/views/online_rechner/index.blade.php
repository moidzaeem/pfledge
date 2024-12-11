<!DOCTYPE html>
<html lang="en">

@include('components.header.head')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    strong {
        color: #b22222;
        font-weight: 800;
    }

    #tooltip {
        text-align: left;
        color: #fff;
        background: #111;
        position: absolute;
        z-index: 100;
        padding: 15px;
        font-size: 1.0rem;
    }

    #tooltip:after

    /* triangle decoration */
        {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #111;
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        margin-left: -10px;
    }

    #tooltip.top:after {
        border-top-color: transparent;
        border-bottom: 10px solid #111;
        top: -20px;
        bottom: auto;
    }

    #tooltip.left:after {
        left: 10px;
        margin: 0;
    }

    #tooltip.right:after {
        right: 10px;
        left: auto;
        margin: 0;
    }
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
        <button class="online-rechner-section2-btn5 online-rechner-section2-btn">
            <a
            href="{{route('online.rechner.fifth')}}"
             
            ></a>
            RECHNER PFLEGEKOSTEN FÜR AMBULANTE PFLEGE
          </button>
          <button class="online-rechner-section2-btn6 online-rechner-section2-btn">
            <a href="{{route('online.rechner.sixth')}}"></a>
            RECHNER ZUZAHLUNGEN
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
            <div class="online-rechner-section3-bottom-heading mb-3">Ergebnis</div>

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
                            <label for="online-rechner-input1"
                                title="Einnehmen von verschiedenen Positionen im Bett, Drehen um die Längsachse, Aufrichten aus dem Liegen<br /><strong>Selbständig:</strong> Selbständig ist auch eine Person, die ihre Position unter Nutzung von Hilfsmitteln (Aufrichthilfe, Bettseitenteil, Strickleiter, elektrisch verstellbares Bett) allein verändern kann.<br /><strong>Überwiegend selbständig:</strong> Die Person kann beispielsweise nach Anreichen eines Hilfsmittels oder Reichen der Hand ihre Lage im Bett verändern.<br /><strong>Überwiegend unselbständig:</strong> Die Person kann beim Positionswechsel nur wenig mithelfen, z. B. auf den Rücken rollen, am Bettgestell festhalten, Aufforderungen folgen wie z. B. Bitte die Arme vor der Brust verschränken und den Kopf auf die Brust legen.<br /><strong>Unselbständig:</strong> Die Person kann sich beim Positionswechsel nicht oder nur minimal beteiligen."
                                rel="tooltip">1.1 Positionswechsel im Bett</label>
                            <select name="modul1_1" id="online-rechner-input1">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input2"
                                title="Sich auf einem Bett, Stuhl oder Sessel aufrecht halten.<br /><strong>Selbständig:</strong> Selbständig ist eine Person auch dann, wenn sie beim Sitzen gelegentlich ihre Sitzposition korrigieren muss.<br /><strong>Überwiegend selbständig:</strong> Die Person kann sich nur kurz, z. B. für die Dauer einer Mahlzeit oder eines Waschvorgangs selbständig in der Sitzposition halten, darüber hinaus benötigt sie aber personelle Unterstützung zur Positionskorrektur.<br /><strong>Überwiegend unselbständig:</strong> Die Person kann sich wegen eingeschränkter Rumpfkontrolle auch mit Rücken- und Seitenstütze nicht in aufrechter Position halten und benötigt auch während der Dauer einer Mahlzeit oder eines Waschvorgangs personelle Unterstützung zur Positionskorrektur.<br /><strong>Unselbständig:</strong> Die Person kann sich nicht in Sitzposition halten. Bei fehlender Rumpf- und Kopfkontrolle kann die Person nur im Bett oder Lagerungsstuhl liegend gelagert werden."
                                rel="tooltip">1.2 Halten einer stabilen Sitzposition</label>
                            <select name="modul1_2" id="online-rechner-input2">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label
                                for="online-rechner-input3"title="Von einer erhöhten Sitzfläche, Bettkante, Stuhl, Sessel, Bank, Toilette etc., aufstehen und sich auf einen Rollstuhl, Toilettenstuhl, Sessel o.ä. umsetzen<br />
                            <strong>Selbständig:</strong> Selbständig ist jemand auch dann, wenn er keine Personenhilfe benötigt, aber ein Hilfsmittel oder einen anderen Gegenstand zum Festhalten oder Hochziehen (z. B. Griffstangen) benutzt oder sich auf Tisch, Armlehnen oder sonstigen Gegenständen abstützen muss, um aufzustehen. Als selbständig ist auch zu bewerten, wer zwar nicht stehen kann, aber sich mit Armkraft ohne personelle Hilfe umsetzen kann (z. B. Bett – Rollstuhl, Rollstuhl – Toilette).
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann aus eigener Kraft aufstehen oder sich umsetzen, wenn sie eine Hand oder einen Arm gereicht bekommt.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Pflegeperson muss beim Aufstehen, Umsetzen (erheblichen) Kraftaufwand aufbringen (hochziehen, halten, stützen, heben). Die beeinträchtigte Person hilft jedoch in geringem Maße mit, kann z. B. kurzzeitig stehen.
                            <br />
                            <strong>Unselbständig:</strong> Die Person muss gehoben oder getragen werden, Mithilfe ist nicht möglich."
                                rel="tooltip">1.3 Umsetzen</label>
                            <select name="modul1_3" id="online-rechner-input3">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input4"
                                title="Sich innerhalb einer Wohnung oder im Wohnbereich einer Einrichtung zwischen den Zimmern sicher bewegen. Als Anhaltsgröße für übliche Gehstrecken innerhalb einer Wohnung werden mindestens acht Meter festgelegt. Die Fähigkeiten zur räumlichen Orientierung und zum Treppensteigen sind im Modul 2 Ziffer 2 bzw. Modul 1 Ziffer 5 zu berücksichtigen.
                            <br />
                            <strong>Selbständig:</strong> Die Person kann sich ohne Hilfe durch andere Personen fortbewegen. Dies kann ggf. unter Nutzung von Hilfsmitteln, z. B. Rollator, Rollstuhl oder sonstigen Gegenständen, z. B. Stock oder Möbelstück geschehen.
                            <br />
                            <strong>Überwiegend selbständig:</strong> Die Person kann die Aktivität überwiegend selbständig durchführen. Personelle Hilfe ist beispielsweise erforderlich im Sinne von Bereitstellen von Hilfsmitteln (z. B. Rollator oder Gehstock), Beobachtung aus Sicherheitsgründen oder gelegentlichem Stützen, Unterhaken.
                            <br />
                            <strong>Überwiegend unselbständig:</strong> Die Person kann nur wenige Schritte gehen oder sich mit dem Rollstuhl nur wenige Meter fortbewegen oder kann nur mit Stützung oder Festhalten einer Pflegeperson gehen. Die ausschließliche Fähigkeit der Fortbewegung durch Krabbeln oder Robben ist generell als „überwiegend unselbständig“ zu bewerten.
                            <br />
                            <strong>Unselbständig:</strong> Die Person muss getragen oder vollständig im Rollstuhl geschoben werden."
                                rel="tooltip">1.4 Fortwegen innerhalb des Wohnbereichs</label>
                            <select name="modul1_4" id="online-rechner-input4">
                                <option value="0">Selbstständig</option>
                                <option value="1">Überwiegend selbstständig</option>
                                <option value="2">Überwiegend unselbstständig</option>
                                <option value="3">Unselbstständig</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input5"
                                title="Überwinden von Treppen zwischen zwei Etagen. Treppensteigen ist unabhängig von der individuellen Wohnsituation zu bewerten.
<br />
<strong>Selbständig:</strong> Die Person kann ohne Hilfe durch andere Personen in aufrechter Position eine Treppe steigen.
<br />
<strong>Überwiegend selbständig:</strong> Die Person kann eine Treppe alleine steigen, benötigt aber Begleitung wegen eines Sturzrisikos.
<br />
<strong>Überwiegend unselbständig:</strong> Treppensteigen ist nur mit Stützen oder Festhalten der Person möglich.
<br />
<strong>Unselbständig:</strong> Person muss getragen oder mit Hilfsmitteln transportiert werden, keine Eigenbeteiligung."
                                rel="tooltip">1.5 Treppensteigen</label>
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
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
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
                            <label for="online-rechner-input21"
                                title="Fähigkeit, Personen aus dem näheren Umfeld wiederzuerkennen, d. h. Menschen, zu denen im Alltag regelmäßig ein direkter Kontakt besteht. Dazu gehören z. B. Familienmitglieder, Nachbarn aber auch Pflegekräfte eines ambulanten Dienstes oder einer stationären Pflegeeinrichtung.
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person erkennt andere Personen aus ihrem näheren Umfeld unmittelbar.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person erkennt bekannte Personen beispielsweise erst nach einer längeren Zeit des Kontaktes in einem Gespräch oder sie hat Schwierigkeiten wenn auch nicht täglich, aber doch in regelmäßigen Abständen, vertraute Personen zu erkennen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die aus dem näheren Umfeld stammenden Personen werden nur selten erkannt oder die Fähigkeit hängt ggf. von der Tagesform ab, d. h. die Fähigkeit unterliegt im Zeitverlauf erheblichen Schwankungen.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Auch Familienmitglieder werden nicht oder nur ausnahmsweise erkannt."
                                rel="tooltip">2.1 Erkennen von Personen aus dem näheren
                                Umfeld</label>
                            <select name="module2_1" id="online-rechner-input21">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input22"
                                title="Fähigkeit, sich in der räumlichen Umgebung zurechtzufinden, andere Orte gezielt anzusteuern und zu wissen, wo man sich befindet
                            <br />
                            <strong>Fähigkeit vorhanden:</strong> Die Person weiß in welcher Stadt, auf welchem Stockwerk und ggf. in welcher Einrichtung sie sich befindet. Sie kennt sich in den regelmäßig genutzten Räumlichkeiten aus. Ein Verirren in den Räumlichkeiten der eigenen Wohnung oder unmittelbar im Wohnbereich einer Einrichtung kommt nicht vor und die Person findet sich auch in der näheren außenhäuslichen Umgebung zurecht. Sie weiß beispielsweise, wie sie zu benachbarten Geschäften, zu einer Bushaltestelle oder zu einer anderen nahe gelegenen Örtlichkeit gelangt.
                            <br />
                            <strong>Fähigkeit größtenteils vorhanden:</strong> Es bestehen Schwierigkeiten, sich in der außenhäuslichen Umgebung zu orientieren, beispielsweise nach Verlassen des Hauses wieder den Weg zurück zu finden. In den eigenen Wohnräumen existieren solche Schwierigkeiten hingegen nicht.
                            <br />
                            <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person hat auch in einer gewohnten Wohnumgebung Schwierigkeiten sich zurechtzufinden. Regelmäßig genutzte Räumlichkeiten und Wege in der Wohnumgebung werden nicht immer erkannt.
                            <br />
                            <strong>Fähigkeit nicht vorhanden:</strong> Selbst in der eigenen Wohnumgebung ist die Person regelmäßig auf Unterstützung angewiesen, um sich zurechtzufinden."
                                rel="tooltip">2.2 Örtliche Orientierung</label>
                            <select name="module2_2" id="online-rechner-input22">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input23"
                                title="Fähigkeit, zeitliche Strukturen zu erkennen. Dazu gehören Uhrzeit, Tagesabschnitte (Vormittag, Nachmittag, Abend etc.), Jahreszeiten und die zeitliche Abfolge des eigenen Lebens. Aufschluss über die Fähigkeit zur zeitlichen Orientierung geben Antworten auf die Frage nach der Jahreszeit, dem Jahr, dem Wochentag, dem Monat oder der Tageszeit.
<br />
<strong>Fähigkeit vorhanden:</strong> Die zeitliche Orientierung ist ohne nennenswerte Beeinträchtigungen vorhanden.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person ist die meiste Zeit über zeitlich orientiert, aber nicht durchgängig. Sie hat z. B. Schwierigkeiten, ohne äußere Orientierungshilfen (Uhr, Dunkelheit etc.) den Tagesabschnitt zu bestimmen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die zeitliche Orientierung ist die meiste Zeit nur in Ansätzen vorhanden. Die Person ist auch unter Nutzung äußerer Orientierungshilfen zumeist nicht in der Lage, Tageszeiten zu erkennen, zu denen regelmäßig bestimmte Ereignisse stattfinden (z. B. Mittagessen).
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Das Verständnis für zeitliche Strukturen und Abläufe ist kaum oder nicht vorhanden."
                                rel="tooltip">2.3 Zeitliche Orientierung</label>
                            <select name="module2_3" id="online-rechner-input23">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input24"
                                title="Fähigkeit, sich an kurz und auch länger zurückliegende Ereignisse oder Beobachtungen zu erinnern. Dazu gehört, dass die Person z. B. weiß, was sie zum Frühstück gegessen hat oder mit welchen Tätigkeiten sie den Vormittag verbracht hat. Im Hinblick auf das Langzeitgedächtnis geht es bei Erwachsenen z. B. um die Kenntnis des Geburtsjahres, des Geburtsorts oder wichtiger Bestandteile des Lebensverlaufs wie Eheschließung und Berufstätigkeit.
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person kann über kurz zurückliegende Ereignisse Auskunft geben oder durch Handlungen und Gesten signalisieren, dass sie sich erinnert.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person hat Schwierigkeiten, sich an manche kurz zurückliegende Ereignisse zu erinnern oder muss hierzu länger nachdenken, sie hat aber keine nennenswerten Probleme, sich an Ereignisse aus der eigenen Lebensgeschichte zu erinnern.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person vergisst kurz zurückliegende Ereignisse häufig. Nicht alle, aber wichtige Ereignisse aus der eigenen Lebensgeschichte sind (noch) präsent.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Die Person ist nicht (oder nur selten) in der Lage, sich an Ereignisse, Dinge oder Personen aus der eigenen Lebensgeschichte zu erinnern."
                                rel="tooltip">2.4 Erinnern an wesentliche Ereignisse oder
                                Beobachtungen</label>
                            <select name="module2_4" id="online-rechner-input24">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input25"
                                title="Fähigkeit, zielgerichtete Handlungen des Lebensalltags, die eine Abfolge von Teilschritten umfassen, zu steuern. Die Betonung liegt in diesem Fall auf dem Begriff Alltagshandlungen. Gemeint sind zielgerichtete Handlungen, die diese Person täglich oder nahezu täglich im Lebensalltag durchführt oder durchgeführt hat, wie z. B. das komplette Ankleiden, Kaffeeköchen oder Tischdecken.
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person ist in der Lage, die erforderlichen Handlungsschritte selbständig in der richtigen Reihenfolge auszuführen oder zu steuern, so dass das angestrebte Ergebnis der Handlung erreicht wird.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person verliert manchmal den Faden und vergisst, welcher Handlungsschritt der nächste ist. Erhält sie dabei eine Erinnerungshilfe, kann sie die Handlung aber selbständig fortsetzen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person hat erhebliche Schwierigkeiten. Sie verwechselt regelmäßig die Reihenfolge der einzelnen Handlungsschritte oder vergisst einzelne, notwendige Handlungsschritte.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Mehrschrittige Alltagshandlungen werden erst gar nicht begonnen oder nach den ersten Versuchen aufgegeben."
                                rel="tooltip">2.5 Steuern von mehrschrittigen
                                Alltagshandlungen</label>
                            <select name="module2_5" id="online-rechner-input25">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input26"
                                title="Fähigkeit, folgerichtige und geeignete Entscheidungen im Alltagsleben zu treffen. Dazu gehört z. B. die dem Wetter angepasste Auswahl von Kleidung, die Entscheidung über die Durchführung von Aktivitäten wie Einkaufen, Familienangehörige oder Freunde anrufen, einer Freizeitbeschäftigung nachzugehen. Zu klären ist hier die Frage, ob die Entscheidungen folgerichtig sind, d. h. geeignet sind, das angestrebte Ziel zu erreichen oder ein gewisses Maß an Sicherheit und Wohlbefinden oder Bedürfnisbefriedigung zu gewährleisten, z. B. warme Kleidung.
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person kann auch in unbekannten Situationen folgerichtige Entscheidungen treffen, beispielsweise beim Umgang mit unbekannten Personen, die an der Haustür klingeln.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Im Rahmen der Alltagsroutinen oder zuvor besprochenen Situationen können Entscheidungen getroffen werden, die Person hat aber Schwierigkeiten in unbekannten Situationen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person trifft zwar Entscheidungen, diese Entscheidungen sind jedoch in der Regel nicht geeignet, ein bestimmtes Ziel zu erreichen. Dies ist beispielsweise der Fall, wenn die Person mit nur leichter Bekleidung bei winterlichen Temperaturen im Freien spazieren gehen will. Weiterhin liegt eine schwere Beeinträchtigung vor, wenn die Person nur mit Unterstützung in Form von Anleitung, Aufforderung, Aufzeigen von Handlungsalternativen in der Lage ist, Entscheidungen zu treffen.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Die Person kann Entscheidungen auch mit Unterstützung nicht mehr oder nur selten treffen. Sie zeigt keine deutbare Reaktion auf das Angebot mehrerer Entscheidungsalternativen)."
                                rel="tooltip">2.6 Treffen von Entscheidungen im Alltagsleben</label>
                            <select name="module2_6" id="online-rechner-input26">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input27"
                                title="Fähigkeit, Sachverhalte zu verstehen und Informationen inhaltlich einordnen zu können. Hier geht es um Ereignisse und Inhalte, die Bestandteil des Alltagslebens der meisten Menschen sind. Gemeint ist etwa die Fähigkeit, zu erkennen, dass man sich in einer bestimmten Situation befindet, z. B. gemeinschaftliche Aktivitäten mit anderen Menschen, Versorgung durch eine Pflegekraft, MD-Begutachtung sowie die Fähigkeit, Informationen zum Tagesgeschehen aus den Medien z. B. Fernsehgerät, Tageszeitung aufzunehmen und inhaltlich zu verstehen. Gleiches gilt für mündlich von anderen Personen übermittelte Informationen.
                            <br />
                            <strong>Fähigkeit vorhanden:</strong> Die Person kann Sachverhalte und Informationen aus dem Alltagsleben ohne nennenswerte Probleme verstehen.
                            <br />
                            <strong>Fähigkeit größtenteils vorhanden:</strong> Die Person kann einfache Sachverhalte und Informationen nachvollziehen, hat bei komplizierteren jedoch Schwierigkeiten.
                            <br />
                            <strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann auch einfache Informationen häufig nur nachvollziehen, wenn sie wiederholt erklärt werden. Eine schwere Beeinträchtigung liegt auch dann vor, wenn das Verständnis sehr stark von der Tagesform abhängt.
                            <br />
                            <strong>Fähigkeit nicht vorhanden:</strong> Die Person gibt weder verbal noch nonverbal zu erkennen, dass sie Situationen und übermittelte Informationen verstehen kann."
                                rel="tooltip">2.7 Verstehen von Sachverhalten und
                                Informationen</label>
                            <select name="module2_7" id="online-rechner-input27">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input28"
                                title="Fähigkeit, Risiken und Gefahren zu erkennen. Dazu gehören Gefahren wie Strom- und Feuerquellen, Barrieren und Hindernisse auf dem Fußboden bzw. auf Fußwegen, eine problematische Beschaffenheit des Bodens (z. B. Glätte) oder Gefahrenzonen in der außerhäuslichen Umgebung (z. B. verkehrsreiche Straßen, Baustellen).
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person kann solche Risiken und Gefahrenquellen im Alltagsleben ohne weiteres erkennen, auch wenn sie ihnen aus anderen Gründen (z. B. aufgrund von somatischen Beeinträchtigungen) nicht aus dem Weg gehen kann.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person erkennt meist nur solche Risiken und Gefahren, die sich in der vertrauten innenhäuslichen Wohnumgebung wiederfinden. Es bestehen aber beispielsweise Schwierigkeiten, Risiken im Straßenverkehr angemessen einzuschätzen oder Gefährdungen in ungewohnter Umgebung zu erkennen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann auch Risiken und Gefahren, denen sie häufig auch in der Wohnumgebung begegnet, oft nicht als solche erkennen.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Die Person kann Risiken und Gefahren so gut wie gar nicht erkennen."
                                rel="tooltip">2.8 Erkennen von Risiken und Gefahren</label>
                            <select name="module2_8" id="online-rechner-input28">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input29"
                                title="Fähigkeit, elementare Bedürfnisse verbal oder nonverbal mitzuteilen. Das beinhaltet sich bei Hunger oder Durst, Schmerzen oder Frieren bemerkbar zu machen. Bei Sprachstörungen kann dies ggf. durch Laute, Mimik oder Gestik bzw. unter Nutzung von Hilfsmitteln erfolgen.
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person kann Bedürfnisse äußern.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person kann auf Nachfrage elementare Bedürfnisse äußern. Die Person äußert Bedürfnisse aber nicht immer von sich aus.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Elementare Bedürfnisse sind nur aus nonverbalen Reaktionen (Mimik, Gestik, Lautäußerungen) ableitbar, ggf. nach oder durch entsprechende(r) Stimulation; oder die Person äußert von sich aus keine elementaren Bedürfnisse, muss dazu ständig angeleitet werden, kann aber Zustimmung oder Ablehnung deutlich machen.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Die Person äußert nicht oder nur sehr selten Bedürfnisse, auch nicht in nonverbaler Form. Sie kann weder Zustimmung noch Ablehnung deutlich machen."
                                rel="tooltip">2.9 Mitteilen von elementaren Bedürfnissen</label>
                            <select name="module2_9" id="online-rechner-input29">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="online-rechner-input210"
                                title="Fähigkeit, Aufforderungen in Hinblick auf alltägliche Grundbedürfnisse zu verstehen. Zu den alltäglichen Grundbedürfnissen gehören z. B. Essen, Trinken, sich kleiden, sich beschäftigen.
<br />
<strong>Fähigkeit vorhanden:</strong> Aufforderungen und Bitten zu alltäglichen Grundbedürfnissen werden ohne weiteres verstanden.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Einfache Bitten und Aufforderungen, wie z. B. „Setz dich bitte an den Tisch!“, „Zieh dir die Jacke über!“, „Komm zum Essen!“, „Prosit!“ werden verstanden, Aufforderungen in nicht alltäglichen Situationen müssen erklärt werden. Ggf. sind besonders deutliche Ansprache, Wiederholungen, Zeichensprache, Gebärdensprache oder Schrift erforderlich, um Aufforderungen verständlich zu machen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann Aufforderungen und Bitten meist nicht verstehen, wenn diese nicht wiederholt geäußert und erläutert werden. Das Verständnis ist sehr von der Tagesform abhängig. Sie zeigt aber Zustimmung oder Ablehnung gegenüber nonverbalen Aufforderungen, z. B. Berührungen oder Geleiten an den Esstisch.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Die Person kann Anleitung und Aufforderungen kaum oder nicht verstehen."
                                rel="tooltip">2.10 Verstehen von Aufforderungen</label>
                            <select name="module2_10" id="online-rechner-input210">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="online-rechner-input211"
                                title="Fähigkeit, in einem Gespräch Gesprächsinhalte aufzunehmen, sinngerecht zu antworten und zur Weiterführung des Gesprächs Inhalte einzubringen
<br />
<strong>Fähigkeit vorhanden:</strong> Die Person kommt sowohl in Einzel- als auch in Gesprächen kleiner Gruppen gut zurecht. Sie zeigt im Gespräch Eigeninitiative, Interesse und beteiligt sich, wenn vielleicht auch nur auf direkte Ansprache hin. Ihre Äußerungen passen zu den Inhalten des Gesprächs.
<br />
<strong>Fähigkeit größtenteils vorhanden:</strong> Die Person kommt in Gesprächen mit einer Person gut zurecht, in Gruppen ist sie jedoch meist überfordert und verliert den Faden. Wortfindungsstörungen treten ggf. regelmäßig auf. Die Person ist häufig auf besonders deutliche Ansprache oder Wiederholung von Worten, Sätzen angewiesen.
<br />
<strong>Fähigkeit in geringem Maße vorhanden:</strong> Die Person kann auch einem Gespräch nur mit einer Person kaum folgen oder sie kann sich nur wenig oder mit einzelnen Worten beteiligen. Die Person zeigt nur wenig Eigeninitiative, reagiert aber auf Ansprache oder Fragen mit wenigen Worten, z. B. mit ja oder nein; Die Person beteiligt sich am Gespräch, weicht aber in aller Regel vom Gesprächsinhalt ab (führt mehr ein Selbstgespräch) oder es besteht leichte Ablenkbarkeit durch Umgebungseinflüsse.
<br />
<strong>Fähigkeit nicht vorhanden:</strong> Ein Gespräch mit der Person, das über einfache Mitteilungen hinausgeht, ist auch unter Einsatz bonverbaler Kommunikation kaum oder nicht möglich."
                                rel="tooltip">2.11 Beteiligen an einem Gespräch</label>
                            <select name="module2_11" id="online-rechner-input211">
                                <option value="0">Vorhanden / unbeeinträchtigt</option>
                                <option value="1">Größenteils vorhanden</option>
                                <option value="2">In geringem Maße vorhanden</option>
                                <option value="3">Nicht vorhanden</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
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
                            <label for="online-rechner-input31"
                                title="Dieses Kriterium fasst verschiedene Verhaltensweisen zusammen. Dazu gehören vor allem das (scheinbar) ziellose Umhergehen in der Wohnung oder der Einrichtung und der Versuch desorientierter Personen, ohne Begleitung die Wohnung, Einrichtung zu verlassen oder Orte aufzusuchen, die für diese Person unzugänglich sein sollten, z. B. Treppenhaus, Zimmer anderer Bewohner. Ebenso zu berücksichtigen ist allgemeine Rastlosigkeit in Form von ständigem Aufstehen und Hinsetzen oder Hin- und Herrutschen auf dem Sitzplatz oder im und aus dem Bett."
                                rel="tooltip">3.1 Motorisch geprägte
                                Verhaltensauffälligkeiten</label>
                            <select name="modul3_1" id="online-rechner-input31">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input32"
                                title="Gemeint sind hier nächtliches Umherirren oder nächtliche Unruhephasen bis hin zur Umkehr des Tag-, Nachtrhythmus im Sinne von aktiv sein in der Nacht und schlafen während des Tages.
                            <br /><br />
                            Zu bewerten ist, wie häufig Anlass für personelle Unterstützung zur Steuerung des Schlaf-Wach-Rhythmus bestehen, z. B. wieder ins Bett bringen und beruhigen. Schlafstörungen wie Einschlafschwierigkeiten am Abend oder Wachphasen während der Nacht sind nicht zu werten. Andere nächtliche Hilfen, z. B. Aufstehen, zu Bett bringen bei Nykturie oder Lagerungen sind im Modul 6 Ziffer 2 zu werten."
                                rel="tooltip">3.2 Nächtliche Unruhe</label>
                            <select name="modul3_2" id="online-rechner-input32">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input33"
                                title="Selbstschädigendes und autoaggressives Verhalten kann z. B. darin bestehen, sich selbst durch Gegenstände zu verletzen, ungenießbare Substanzen zu essen und zu trinken, sich selbst schlagen und sich selbst mit den Fingernägeln oder Zähnen verletzen."
                                rel="tooltip">3.3 Selbstschädigendes und autoaggressives
                                Verhalten</label>
                            <select name="modul3_3" id="online-rechner-input33">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input34"
                                title="Gemeint sind hier aggressive, auf Gegenstände gerichtete Handlungen wie Gegenstände wegstoßen oder wegschieben, gegen Gegenstände schlagen, das Zerstören von Dingen sowie das Treten nach Gegenständen."
                                rel="tooltip">3.4 Beschädigen von Gegenständen</label>
                            <select name="modul3_4" id="online-rechner-input34">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input35"
                                title="Physisch aggressives Verhalten gegenüber anderen Personen kann z. B. darin bestehen, nach Personen zu schlagen oder zu treten, andere mit Zähnen oder Fingernägeln zu verletzen, andere zu stoßen oder wegzudrängen oder in Verletzungsversuchen gegenüber anderen Personen mit Gegenständen."
                                rel="tooltip">3.5 Physisch aggressives Verhalten</label>
                            <select name="modul3_5" id="online-rechner-input35">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input36"
                                title="Verbale Aggression kann sich z. B. in verbalen Beschimpfungen oder in der Bedrohung anderer Personen ausdrücken."
                                rel="tooltip">3.6 Verbale Aggression</label>
                            <select name="modul3_6" id="online-rechner-input36">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input37"
                                title="Andere pflegerelevante vokale Auffälligkeiten können sein: Lautes Rufen, Schreien, Klagen ohne nachvollziehbaren Grund, vor sich hin schimpfen, fluchen, seltsame Laute von sich geben, ständiges Wiederholen von Sätzen und Fragen."
                                rel="tooltip">3.7 Andere pflegerelevante vokale
                                Auffälligkeiten</label>
                            <select name="modul3_7" id="online-rechner-input37">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input38"
                                title="Hier ist die Abwehr von Unterstützung, z. B. bei der Körperpflege, die Verweigerung der Nahrungsaufnahme, der Medikamenteneinnahme oder anderer notwendiger Verrichtungen sowie die Manipulation an Vorrichtungen wie z. B. an Kathetern, Infusionen oder Sondenernährung gemeint. Dazu gehört nicht die willentliche (selbstbestimmte) Ablehnung bestimmter Maßnahmen."
                                rel="tooltip">3.8 Abwehr pflegerischer Maßnahmen</label>
                            <select name="modul3_8" id="online-rechner-input38">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input39"
                                title="Wahnvorstellungen beziehen sich z. B. auf die Vorstellung, mit Verstorbenen oder imaginären Personen in Kontakt zu stehen oder auf die Vorstellung, verfolgt, bedroht oder bestohlen zu werden."
                                rel="tooltip">3.9 Wahnvorstellungen</label>
                            <select name="modul3_9" id="online-rechner-input39">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input310"
                                title="Die Person hat starke Ängste oder Sorgen, sie erlebt Angstattacken unabhängig von der Ursache."
                                rel="tooltip">3.10 Ängste</label>
                            <select name="modul3_10" id="online-rechner-input310">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input311"
                                title="Antriebslosigkeit bei depressiver Stimmungslage zeigt sich z. B. daran, dass die Person kaum Interesse an der Umgebung hat, kaum Eigeninitiative aufbringt und Motivierung durch andere benötigt, um etwas zu tun. Sie wirkt traurig oder apathisch, möchte am liebsten das Bett nicht verlassen. Hier ist nicht gemeint, dass Menschen mit rein kognitiven Beeinträchtigungen, z. B. bei Demenz Impulse benötigen, um eine Handlung zu beginnen oder fortzuführen."
                                rel="tooltip">3.11 Antriebslosigkeit</label>
                            <select name="modul3_11" id="online-rechner-input311">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="online-rechner-input312"
                                title="Sozial inadäquate Verhaltensweisen sind z. B. distanzloses Verhalten, auffälliges Einfordern von Aufmerksamkeit, sich vor anderen in unpassenden Situationen auskleiden, unangemessenes Greifen nach Personen oder unangemessene körperliche oder verbale sexuelle Annäherungsversuche."
                                rel="tooltip">3.12 Sozial inadäquate Verhaltensweisen</label>
                            <select name="modul3_12" id="online-rechner-input312">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="online-rechner-input313"
                                title="Sonstige pflegerelevante inadäquate Handlungen sind z. B. Nesteln an der Kleidung, ständiges Wiederholen der gleichen Handlung (Stereotypien), planlose Aktivitäten, Verstecken oder Horten von Gegenständen, Kotschmieren, Urinieren in die Wohnung."
                                rel="tooltip">3.13 Sonstige inadäquate Handlungen</label>
                            <select name="modul3_13" id="online-rechner-input313">
                                <option value="0">Nie oder sehr selten</option>
                                <option value="1">Selten</option>
                                <option value="2">Häufig</option>
                                <option value="3">Täglich</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
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
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
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
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
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
                        <button class="online-rechner-section3-form-btn active-btn2 " type="submit"
                            style="background-color: #b22222">
                            Pflegegrad berechnen
                        </button>
                    </div>
                </div>

            </form>

            <div class="online-rechner-section3-bottom">
                {{-- <div class="online-rechner-section3-heading-bottom">Ergebnis</div> --}}
                {{-- <div class="online-rechner-section3-heading-bottom" style="background: white;color:black">
                    <div class="">Module</div>
                    <div class="">Summe Einzelpunkte</div>
                    <div class="">
                        Gewichtete Punkte
                    </div>
                </div> --}}
                <div class=" online-rechner-section3-heading-bottom" style="background: white;color:black">
                    <div class="col-lg-8">
                        <div style="padding-top: 0">Module</div>
                    </div>
                    <div class="col-lg-2">
                        <div class="pt-0">Summe Einzelpunkte</div>
                    </div>
                    <div class="col-lg-2">
                        <div style="padding-top: 0">Gewichtete Punkte</div>
                    </div>
                </div>

                <div class="online-rechner-section3-inner-bottom">
                        @if (session('Sonderfall') === true)
                        <div class="" style="color: white"></div>
                            <strong style="color: white">Sonderfall:</strong>
                            <span style="color: white">
                            Wenn beide Arme und Beine gebrauchsunfähig sind (also wenn die pflegebedürftige Person weder
                            in der Lage ist Arme noch Beine zu verwenden), ist eine vollständige Beantwortung aller
                            Fragen nicht erforderlich. Es ist Pflegegrad 5 zu bewilligen.</span>
                        </div>
                @else
                    @foreach (session('modul1_punkte', []) as $moduleName => $moduleValues)
                        <div class="row">
                            <div class="col-lg-8">
                                <div style="padding-top: 0">{{ $loop->iteration }} - {{ $moduleName }}</div>
                            </div>
                            <div class="col-lg-2">
                                <div class="pt-0">{{ $moduleValues['punkte'] ?? '---' }}</div>
                            </div>
                            <div class="col-lg-2">
                                <div style="padding-top: 0">{{ $moduleValues['gewichtet'] ?? '---' }}</div>
                            </div>
                        </div>
                    @endforeach

                    <div class="online-rechner-section3-bottom-heading2">
                        PFLEGEGRAD:{{ session('pflegegrad', '') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div style="width: 100%">
        <img class="page-bottom-img" style="width: 100%; object-fit: cover; height: 100%"
            src="{{ asset('assets/Images/Online_rechner_bottom.svg') }}" alt="" />
    </div>

    @include('components.footer.footer_second')

    <script>
        $(function() {
            var targets = $('[rel~=tooltip]'),
                target = false,
                tooltip = false,
                title = false;

            targets.bind('mouseenter', function() {
                console.log('waow');
                target = $(this);
                tip = target.attr('title');
                tooltip = $('<div id="tooltip"></div>');

                if (!tip || tip == '')
                    return false;

                target.removeAttr('title');
                tooltip.css('opacity', 0)
                    .html(tip)
                    .appendTo('body');

                var init_tooltip = function() {
                    if ($(window).width() < tooltip.outerWidth() * 1.5)
                        tooltip.css('max-width', $(window).width() / 2);
                    else
                        tooltip.css('max-width', 340);

                    var pos_left = target.offset().left + (target.outerWidth() / 2) - (tooltip
                            .outerWidth() / 2),
                        pos_top = target.offset().top - tooltip.outerHeight() - 20;

                    if (pos_left < 0) {
                        pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                        tooltip.addClass('left');
                    } else
                        tooltip.removeClass('left');

                    if (pos_left + tooltip.outerWidth() > $(window).width()) {
                        pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() /
                            2 + 20;
                        tooltip.addClass('right');
                    } else
                        tooltip.removeClass('right');

                    if (pos_top < 0) {
                        var pos_top = target.offset().top + target.outerHeight();
                        tooltip.addClass('top');
                    } else
                        tooltip.removeClass('top');

                    tooltip.css({
                            left: pos_left,
                            top: pos_top
                        })
                        .animate({
                            top: '+=10',
                            opacity: 1
                        }, 50);
                };

                init_tooltip();
                $(window).resize(init_tooltip);

                var remove_tooltip = function() {
                    tooltip.animate({
                        top: '-=10',
                        opacity: 0
                    }, 50, function() {
                        $(this).remove();
                    });

                    target.attr('title', tip);
                };

                target.bind('mouseleave', remove_tooltip);
                tooltip.bind('click', remove_tooltip);
            });
        });
    </script>
</body>

</html>
