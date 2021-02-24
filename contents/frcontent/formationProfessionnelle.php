<!DOCTYPE html>
<html lang="en">

        <?php 
        include "../phpElements/Header.php";
        ?>

<body>

    <div class="contentContainer blueBackground">

        <!-- NAVIGATION -->
        
        <?php 
        include "../phpElements/NavigationBarLux.php";
        ?>

        <!-- NAVIGATION END-->


        <!--TITRE -->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitleBig">D'Beruffsausbildung (<i>Formation professionnelle</i>)</h2>
        
        </div>

        <!--TITRE END -->

        <!--cards -->

        <div class="containerPadding greenBackground2 contentCentered">

            <div class="grid-3-col">

                <?php 
                            include "../frContentArray/formationProfArray.php";

                            for ($i = 0; $i < (count($mainPageArray)); $i++) {

                                $linkAdress = $mainPageArray[$i][0];
                                $imgAdress = $mainPageArray[$i][1];
                                $Title = $mainPageArray[$i][2];
                                $Text = $mainPageArray[$i][3];
                                include "../phpElements/CardBlue.php";

                            };
                           

                ?>

              
            </div>


            <br>
            <br>
            


        </div>
        <!--cards end -->

        <!--INSCRIPTION -->

        <div class="containerPadding contentCentered">

             <h3 class="greenText textLeft">Aschreiwungsmodalitéiten</h3>
           
             <div class="textOnSitehalf ">
             All Demande fir eng Aschreiwung muss mat Hëllef vum &laquo;Formulaire d'inscription&raquo;, deen der hei drënner fannt, un den Direkter vum Lycée geriicht ginn.
            <br>
            <br>
            Néideg Dokumenter:
            <br>
            <br>
            <ul class="listMLGborder">
                    <li>ausgefëllte <i>Formulaire de demande d'inscription</i></li>
                    <li>Lettre de motivation</li>
                    <li>Kopie vun den Zensure vun den zwee leschte Joeren</li>
                    <li>Avis d'orientation vun der 5<sup>e</sup></li>
                    <li>Kopie vun der Krankekeesskaart</li>
                    <li><i>Fiche de départ</i> vum ale Lycée</li>
                    <br>
                    <li>fir d'DAP-Klassen ënnert dem <b>régime concomitant</b> (bei deenen d'Formatioun deels beim Patron an deels am Lycée absolvéiert gëtt) muss bis zum <b>31.12.2020</b> eng Attestatioun vum Patron agereecht ginn, fir dass d'Inscriptioun definitiv gëtt.
                    <br>
                    No der Zoustëmmung vum Lycée soll eng <i>Fiche de départ</i> vum ale Lycée agereecht ginn.</li>
                    </ul>
            </div>
            <br>
            <br>
            <?php 
                include "../phpElements/formulaireInscription.php";
                ?>
            <br>
            <?php 
            include "../phpElements/backButtonLux.php";
            ?>
            <br>
           
        </div>

       
        <!--INSCRIPTIONS END-->

        

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterGreen.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>