<?php

    $db = mysqli_connect("Localhost", "root", "root", "Wert" );



    $objektart = $_POST["objektart"];
    $wohnungstyp = $_POST["wohnungstyp"];
    $wohnflaeche = $_POST["wohn"];
    $grundstueck = $_POST["grund"];
    $etagen = $_POST["etage"];
    $zimmer = $_POST["zimmer"];
    $jahr = $_POST["jahr"];
    $austattung = $_POST["austattung"];

    $garten = 0;
    $balkon = 0;
    $garage = 0;
    $stellplatz = 0;



    if (isset($_POST["garten"]))
    {
        $garten = 1;
    }

    if (isset($_POST["balkon"]))
    {
        $balkon = 1;
    }

    if (isset($_POST["garage"]))
    {
        $garage = 1;
    }

    if (isset($_POST["stellplatz"]))
    {
        $stellplatz = 1;
    }

    $renovieren = $_POST["renovierungsbedürftig"];
    $plz = $_POST["plz"];
    $verkaufen = $_POST["verkauf"];
    $geschlecht = $_POST["wer"];
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];

    $eintragen = mysqli_query($db, "INSERT INTO wert1 (Objektart, Wohnungstyp, Wohnflaeche, Grundstueckflaeche, Etagen, Zimmer, Jahr, Austattung, Garten, Balkon, Garage, Stellplatz, Renovierungsbeduerftig, Plz, Verkauf, Geschlecht, Vorname, Nachname, Email, Telefonnummer) VALUES ('$objektart', '$wohnungstyp', '$wohnflaeche', '$grundstueck', '$etagen', '$zimmer','$jahr','$austattung', '$garten', '$balkon', '$garage', '$stellplatz', '$renovieren', '$plz', '$verkaufen', '$geschlecht', '$vorname', '$nachname', '$email', '$telefon')");


    $empfaenger = $_POST ['email'];
    $betreff = "Wertermittlung";
    $from = "From: Lucian Schurr <lsc@becklyn.com>";
    $text = "Hallo $vorname $nachname, Ihre Anfrage ist bei uns eingegangen. Wir melden uns sobald wir Ihre Immobilie ausgewertet haben!
    Hier nochmal ihre Auswahl:
    
    Objektart: $objektart
    Wohnungstyp: $wohnungstyp
    Wohnfläche: $wohnflaeche
    Grundstückfläche: $grundstueck
    Etagen: $etagen
    Zimmer: $zimmer
    Baujahr: $jahr
    Austattung: $austattung
    Garten: $garten
    Balkon: $balkon
    Garage: $garage
    Stellplatz: $stellplatz
    Renovierungsbedürftig: $renovieren
    Plz: $plz
    Geschlecht: $geschlecht
    
    
   Liebe Grüße, Ihr Becklyn Studios Team";


mail($empfaenger, $betreff, $from, $text);


?>




<!DOCTYPE html>

<html lang="de">

<head>
    <title>Wertermittlung</title>
    <link rel="stylesheet" type="text/css" href="Wertermittlung.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <h1> Wertermittlung Kompakt </h1>
    <h2> Kennen Sie schon unsere kostenlose Online Martkwertanalyse? </h2>
    <h3> Erfahren Sie sofort und unkompliziert, wie viel ihre Immobilie wert ist. </h3>
    <p> Mit nur wenigen Klicks können Sie Ihre Immobilie bewerten lassen und bekommen die individuelle Analyse direkt als Email zugesandt. </p>




    <div class="GeneratorBox">

        <div class="slideshow-container">


            <div class="prevnext">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>


            <div style="text-align:center" class="Punkte">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
                <span class="dot" onclick="currentSlide(10)"></span>
                <span class="dot" onclick="currentSlide(11)"></span>
            </div>

            <form method="post">

            <div class="mySlides fade">
                <h2> Welche Objektart möchten Sie bewerten? </h2>

                <div class="checkboxes">
                    <input type="radio" name="objektart" value="einfamilienhaus" id="r1" checked />
                    <label class="Box1 box" for="r1"><p>Einfamilienhaus</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="objektart" value="mehrfamielienhaus" id="r2" />
                    <label class="Box1-2 box" for="r2"><p>Mehrfamilienhaus</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="objektart" value="eigentumswohnung" id="r3" />
                    <label class="Box1-3 box" for="r3"><p>Eigentumswohnung</p></label>
                </div>
            </div>


            <div class="mySlides fade">
                <h2>Welchen Wohnungstyp wollen Sie bewerten?</h2>

                <div class="checkboxes">
                    <input type="radio" name="wohnungstyp" value="freistehend" id="r4" checked/>
                    <label class="Box2 box" for="r4"><p>Freistehend</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="wohnungstyp" value="doppelhaushälfte" id="r5" />
                    <label class="Box2-2 box" for="r5"><p>Doppelhaushälfte</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="wohnungstyp" value="Reihenendhaus" id="r6" />
                    <label class="Box2-3 box" for="r6"><p>Reihenendhaus</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="wohnungstyp" value="Reihenhaus" id="r7" />
                    <label class="Box2-4 box" for="r7"><p>Reihenhaus</p></label>
                </div>
            </div>


            <div class="mySlides fade">
                <h2>Wie groß ist ihre Wohnfläche?</h2>
                <div>
                    <label><input type="range" min="1" max="800" id="myRange" name="wohn"></label>
                    <p>Wohnfläche in m&sup2; <span id="zahl"></span></p>
                </div>
                <div>
                    <h2>Wie groß ist Ihre Grundstückfläche?</h2>
                    <div>
                        <label><input type="range" min="1" max="5000" id="myRange2" name="grund"></label>
                        <p> Grundstückfläche in m&sup2; <span id="zahl2"></span></p>
                    </div>
                </div>
            </div>


            <div class="mySlides fade">
                <h2>Wie viele Etagen hat das Haus?</h2>
                <h3>(Ohne Keller und Dachboden)</h3>
                <div>
                    <label><input type="range" min="1" max="7" id="myRange3" name="etage"></label>
                    <p>Etagenanzahl <span id="zahl3"></span></p>
                </div>
                <h2>Wie viele Zimmer hat das Haus?</h2>
                <h3>(Ohne Bad und Küche)</h3>
                <div>
                    <label><input type="range" min="1" max="20" id="myRange4" name="zimmer"></label>
                    <p>Zimmeranzahl <span id="zahl4"></span></p>
                </div>
            </div>


            <div class="mySlides fade">
                <h2>In welchem Jahr wurde das Haus gebaut</h2>
                <label><input type="range" min="1840" max="2019" id="myRange5" name="jahr"></label>
                <p>Baujahr <span id="zahl5"></span></p>
            </div>


            <div class="mySlides fade">
                <h2>Wie würden Sie die Austattung Ihrer Immobilie beschreiben?</h2>

                <br>

                <div class="checkboxes">
                    <input type="radio" name="austattung" value="einfach" id="r8"  />
                    <label class="austattung box" for="r8"><p>Einfach</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="austattung" value="gehoben" id="r9" checked/>
                    <label class="austattung2 box" for="r9"><p>Gehoben</p></label>
                </div>

                <div class="checkboxes">
                    <input type="radio" name="austattung" value="luxuriös" id="r10" />
                    <label class="austattung2 box" for="r10"><p>Luxuriös</p></label>
                </div>
            </div>


            <div class="mySlides fade">

                <h2>Über welche Austattung verfühg Ihre Immobilie</h2>

                <div class="checkboxes">
                    <input type="checkbox" name="garten" value="garten" id="r11" />
                    <label class="Box3 box" for="r11"><p>Garten</p></label>
                </div>

                <div class="checkboxes">
                    <input type="checkbox" name="terrasse" value="terrasse" id="r12" />
                    <label class="Box3-2 box" for="r12"><p>Balkon/ Terrasse</p></label>
                </div>

                <div class="checkboxes">
                    <input type="checkbox" name="garage" value="garage" id="r13" />
                    <label class="Box3-3 box" for="r13"><p>Garage/ Carpot</p></label>
                </div>

                <div class="checkboxes">
                    <input type="checkbox" name="stellplatz" value="stellplatz" id="r14" />
                    <label class="Box3-4 box" for="r14"><p>Stellplatz</p></label>
                </div>
            </div>


            <div class="mySlides fade">
                <h2>Ist Ihre Immobilie renovierungsbedürftig?</h2>
                <div class="renovierungsbedürftigBox">
                    <label><input type="radio" name="renovierungsbedürftig" value="Ja" checked> Ja</label>
                </div>
                <div class="renovierungsbedürftigBox2">
                    <label><input type="radio" name="renovierungsbedürftig" value="Nein"> Ne</label>
                </div>
            </div>


            <div class="mySlides fade">
                <h2>Wo befindet sich Ihre Immobilie?</h2>
                <h3>Bitte geben Sie Ihre Postleitzahl an.</h3>
                <label><input type="text" class="plz" placeholder="PLZ" name="plz"></label>
            </div>


            <div class="mySlides fade">
                <h2>Erwägen Sie den Verkauf Ihrer Immobilie?</h2>
                <label><input type="radio" name="verkauf" value="Ja" checked> Ja, in den nächsten 6 Monaten.</label><br><br>
                <label><input type="radio" name="verkauf" value="später"> Ja, zu einem späteren Zeitpunkt.</label><br><br>
                <label><input type="radio" name="verkauf" value="nein">Nein, ich möchte mich nur informieren.</label><br><br>
            </div>


            <div class="mySlides fade">
                <h2>Der Marktwert Ihrer Immobilie wird nun berechnet.</h2>
                <h2>Wer soll die Auswertung erhalten?</h2>
                <div class="wer">
                    <label><input type="radio" name="wer" value="Herr" checked>Herr</label>
                </div>

                <div class="wer2">
                    <label><input type="radio" name="wer" value="Frau">Frau</label>
                </div>





                    <div class="adresse">
                        <input type="text" name="vorname" class="name"  placeholder="Vorname">
                        <input type="text" name="nachname" class="name"  placeholder="Nachname">
                        <br><br>
                        <input type="email" name="email" class="email"  placeholder="Email">
                        <br><br>
                        <input type="text" name="telefon" class="email" placeholder="Telefonnummer">
                        <br>
                        <button type="submit" class="Startbutton">Absenden</button>
                    </div>

                </form>



            </div>



        </div>



    </div>


    <script type="text/javascript">

    let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";

        }







        const slider = document.getElementById("myRange");
        const output = document.getElementById("zahl");
        output.innerHTML = slider.value;

        slider.oninput = function(){
            output.innerHTML = this.value;
        };

        const slider2 = document.getElementById("myRange2");
        const output2 = document.getElementById("zahl2");
        output2.innerHTML = slider2.value;

        slider2.oninput = function(){
            output2.innerHTML = this.value;
        };

        const slider3 = document.getElementById("myRange3");
        const output3 = document.getElementById("zahl3");
        output3.innerHTML = slider3.value;

        slider3.oninput = function(){
            output3.innerHTML = this.value;
        };

        const slider4 = document.getElementById("myRange4");
        const output4 = document.getElementById("zahl4");
        output4.innerHTML = slider4.value;

        slider4.oninput = function(){
            output4.innerHTML = this.value;
        };

        const slider5 = document.getElementById("myRange5");
        const output5 = document.getElementById("zahl5");
        output5.innerHTML = slider5.value;

        slider5.oninput = function(){
            output5.innerHTML = this.value;
        };


    </script>

</body>

</html>
