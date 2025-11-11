<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JukeDisc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <?php
    include("includes/header.php");

    $ky_1 = 4190;
    $ky_2 = 1610;
    $ky_3 = 1990;
    $ky_4 = 1690;
    $ky_5 = 5490;
    $ky_6 = 2290;

    $el_1 = 31190;
    $el_2 = 31190;
    $el_3 = 31190;
    $el_4 = 6390;
    $el_5 = 6490;
    $el_6 = 11790;
    $el_7 = 17890;

    $ba_1 = 12890;
    $ba_2 = 9990;
    $ba_3 = 46990;
    $ba_4 = 10690;

    $uk_1 = 8690;
    $uk_2 = 1550;
    $uk_3 = 2590;
    $uk_4 = 1890;
    $uk_5 = 1490;

        $př_1 = 239;
        $př_2 = 199;
        $př_3= 549;
        $př_4= 149;
    ?>
    <script>
        function myFunction1() {
            var x = document.getElementById("myDIV1");
            x.style.display = "flex";
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction2() {
            var x = document.getElementById("myDIV2");
            x.style.display = "flex";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction3() {
            var x = document.getElementById("myDIV3");
            x.style.display = "flex";
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction4() {
            var x = document.getElementById("myDIV4");
            x.style.display = "flex";
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV5");
            x.style.display = "none";
        }

        function myFunction5() {
            var x = document.getElementById("myDIV5");
            x.style.display = "flex";
            var x = document.getElementById("myDIV2");
            x.style.display = "none";
            var x = document.getElementById("myDIV3");
            x.style.display = "none";
            var x = document.getElementById("myDIV1");
            x.style.display = "none";
            var x = document.getElementById("myDIV4");
            x.style.display = "none";
        }
    </script>
    <div class="katalog">
        <div class="kategorie">
            <button onclick="myFunction1()">Klasické kytary</button>
            <button onclick="myFunction5()">Elektrické kytary</button>
            <button onclick="myFunction2()">Baskytary</button>
            <button onclick="myFunction3()">Ukulele</button>
            <button onclick="myFunction4()">Příslušenství</button>
        </div>
        <div class="katalog_main">
            <div class="parametry">
                <h1>Pracuje se na tom</h1>
            </div>
            <div class="produkty">
                <div id="myDIV1" class="ky">
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/klas/blond-sc-44s-r-nat.avif" alt="">
                            </div>
                            <h3>Blond SC-44S R NAT
                            </h3>
                            <p><?php print($ky_1) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/klas/blond-oc-44-bk.avif" alt="">
                            </div>
                            <h3>Blond OC-44 BK
                            </h3>
                            <p><?php print($ky_2) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/klas/blond-oc-34-bb.avif" alt="">
                            </div>
                            <h3>Blond OC-34 BB
                            </h3>
                            <p><?php print($ky_3) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/klas/blond-oc-34-nat.avif" alt="">
                            </div>
                            <h3>Blond OC-34 NAT
                            </h3>
                            <p><?php print($ky_4) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/klas/cort-ac-200-nat.avif" alt="">
                            </div>
                            <h3>Cort AC-200 NAT
                            </h3>
                            <p><?php print($ky_5) ?> Kč</p>
                        </div>
                    </a>
                </div>
                <div id="myDIV2" class="ba">
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/bas/cort-b5-element-optb.avif" alt="">
                            </div>
                            <h3>Cort B5 Element OPTB
                            </h3>
                            <p><?php print($ba_1) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/bas/jet-guitars-jjb-300-sb.avif" alt="">
                            </div>
                            <h3>JET Guitars JJB-300 SB
                            </h3>
                            <p><?php print($ba_2) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/bas/sandberg-california-tm-4-mt-bb-pff-adt.avif" alt="">
                            </div>
                            <h3>Sandberg California TM 4 MT BB PFF ADT
                            </h3>
                            <p><?php print($ba_3) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/bas/jet-guitars-jpb-300-sg-r.avif" alt="">
                            </div>
                            <h3>JET Guitars JPB-300 SG R
                            </h3>
                            <p><?php print($ba_4) ?> Kč</p>
                        </div>
                    </a>

                </div>
                <div id="myDIV3" class="uk">
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/uk/flight-maia-baritone-eq-a-natural.avif" alt="">
                            </div>
                            <h3>Flight Maia Baritone EQ-A Natural
                            </h3>
                            <p><?php print($uk_1) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/uk/cascha-hh-2300l-concert-mahogany-lh-black.avif" alt="">
                            </div>
                            <h3>Cascha HH 2300L Concert Mahogany LH Black
                            </h3>
                            <p><?php print($uk_2) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/uk/flight-dus-321-mah-natural.avif" alt="">
                            </div>
                            <h3>Flight DUS 321 MAH Natural
                            </h3>
                            <p><?php print($uk_3) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/uk/bamboo-u-21-crown.avif" alt="">
                            </div>
                            <h3>Bamboo U-21 Crown
                            </h3>
                            <p><?php print($uk_5) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/uk/flight-nus-350-dc.avif" alt="">
                            </div>
                            <h3>Flight NUS 350 DC
                            </h3>
                            <p><?php print($uk_4) ?> Kč</p>
                        </div>
                    </a>

                </div>
                <div id="myDIV4" class="př">
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/př/trs.avif" alt="">
                            </div>
                            <h3>Fender Aero Acrylic Picks 1.5mm
                            </h3>
                            <p><?php print($př_1) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/př/daddario-guitar-strap-black-red.avif" alt="">
                            </div>
                            <h3>D'Addario Guitar Strap Black & Red
                            </h3>
                            <p><?php print($př_2) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/př/guitto-ggs-15-brown.avif" alt="">
                            </div>
                            <h3>
                                Guitto GGS-15 Brown
                            </h3>
                            <p><?php print($př_3) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/př/ernie-ball-mute-noodle-guitar.avif" alt="">
                            </div>
                            <h3>Ernie Ball Mute Noodle - Guitar
                            </h3>
                            <p><?php print($př_4) ?> Kč</p>
                        </div>
                    </a>
                </div>
                <div id="myDIV5" class="el">
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/prs-se-silver-sky-mn-moon-white.avif" alt="">
                            </div>
                            <h3>PRS SE Silver Sky MN Moon White
                            </h3>
                            <p><?php print($el_1) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/prs-se-silver-sky-rw-laurel-green.avif" alt="">
                            </div>
                            <h3>PRS SE Silver Sky RW Laurel Green
                            </h3>
                            <p><?php print($el_2) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/prs-se-silver-sky-mn-stone-blue.avif" alt="">
                            </div>
                            <h3>PRS SE Silver Sky MN Stone Blue
                            </h3>
                            <p><?php print($el_3) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/cort-g200se-srd.avif" alt="">
                            </div>
                            <h3>Cort G200SE SRD
                            </h3>
                            <p><?php print($el_4) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/cort-g200se-acr.avif" alt="">
                            </div>
                            <h3>Cort G200SE ACR
                            </h3>
                            <p><?php print($el_5) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/jet-guitars-jj-350-bgt.avif" alt="">
                            </div>
                            <h3>JET Guitars JJ-350 BGT
                            </h3>
                            <p><?php print($el_6) ?> Kč</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="produkt">
                            <div>
                                <img src="images/produkty/el/vintage-vs6v-green-metalflake-30th-anniversary.avif" alt="">
                            </div>
                            <h3>Vintage VS6V Green Metalflake 30th Anniversary
                            </h3>
                            <p><?php print($el_7) ?> Kč</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <?php
    include("includes/footer.php")
    ?>

</body>

</html>