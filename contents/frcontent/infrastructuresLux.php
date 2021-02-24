<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;1,100;1,300;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/normalSiteStyle.css">
    <link rel="stylesheet" href="../../css/visitIndex.css">
    <link rel="stylesheet" href="../../css/grid.css">
    <link rel="stylesheet" href="../../css/cards.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/navigationDropDownStyle.css">
    <title>Visit MLG 2020</title>
</head>

<body>



    <div class="contentContainer blueBackground">

        <!-- NAVIGATION -->

        <?php 
        include "../phpElements/NavigationBar.php";
        ?>

        <!-- NAVIGATION END-->


        <!--TITRE-->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitleBig">Eis Infrastrukturen</h2>





        </div>

        <!--TITRE -->

        <!--cards -->

        <div class="containerPadding greenBackground2 contentCentered">

            <div class="grid-2-col">
                <div class="cardBlue">
                    <img src="../../assets/images/placeholderImages/BC.jpg" class="cardImage">
                    <div class="container">
                        <h4><b>Salle des fêtes</b></h4>
                        <p>Lorem ipsum dolor sit </p>
                    </div>
                </div>

                <div class="cardBlue">
                    <img src="../../assets/images/placeholderImages/BC.jpg" class="cardImage">
                    <div class="container">
                        <h4><b>Restaurant / Cafétéria</b></h4>
                        <p>Lorem ipsum dolor sit </p>
                    </div>
                </div>

                <div class="cardBlue">
                    <img src="../../assets/images/placeholderImages/BC.jpg" class="cardImage">
                    <div class="container">
                        <h4><b>Bilbiothèque</b></h4>
                        <p>Lorem ipsum dolor sit </p>
                    </div>
                </div>

                <div class="cardBlue">
                    <img src="../../assets/images/placeholderImages/BC.jpg" class="cardImage">
                    <div class="container">
                        <h4><b>Hall Sportif</b></h4>
                        <p>Lorem ipsum dolor sit </p>
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>

                    <?php 
                    include "../phpElements/backButton.php";
                    ?>


        </div>
        <!--cards end -->

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlue.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>