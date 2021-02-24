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

            <h2 class="permanentMarkerTitleBig">4<sup>e</sup> générale (ESG)</h2>
            
        </div>

        <!--TITRE END -->

        <!--INSCRIPTION 4ESG -->

        <div class="containerPadding greenBackground2 contentCentered">
            <div class="grid-2-col50">
                <div>    
                    <h3 class="blueText textLeft">Aschreiwungsmodalitéiten</h3>
                    <br>
                        <div class="textOnSitehalf">
                        D'Aschreiwunge fir d'4<sup>ième</sup> si vu Méindes, den 20. Juli bis Mëttwochs, den 22. Juli 2020.
                        <br> 
                        All Demande fir eng Aschreiwung muss mat Hëllef vum &laquo;Formulaire d'inscription&raquo;, deen der hei drënner fannt, un den Direkter vum Lycée geriicht ginn.
                        </div>
                    <br>
                    <br>
                    <h3 class="blueText">Néideg Dokumenter:</h3>
                    <br>
                    <br>
                    <ul class="listMLGborder">

                        <li>Ausgefëllte <i>Fiche d'inscription</i></li>
                        <li>Lettre de motivation</li>
                        <li>Kopie vun den Zensure vun den zwee leschte Joeren</li>
                        <li>Fir d'Aschreiwung op eng 4<sup>e</sup>G muss den <i>Avis d'orientation</i> vun der 5<sup>e</sup> agereecht ginn.</li>
                        <li>Kopie vun der Krankekeesskaart</li>
                        <li>Fiche de départ aus dem fréiere Lycée</li>
                
                    </ul>
                </div>
                
                    <img src="../../assets/images/sections/inscription4e.jpeg" alt="4G" class="imgonSiteCenteredHorizontal">
                
            </div>

            
            <div class="contentCentered">
                <br>
       
            
                <?php 
                include "../phpElements/formulaireInscription.php";
                ?>
                <br>
                <br>   
            </div>
        </div>

       
        <!--INSCRIPTIONS END-->

        <!--cards -->

        <div class="containerPadding contentCentered">

            <div class="grid-4-col">

                <?php 
                            include "../frContentArray/4eGeneraleArray.php";

                            for ($i = 0; $i < (count($mainPageArray)); $i++) {

                                $linkAdress = $mainPageArray[$i][0];
                                $imgAdress = $mainPageArray[$i][1];
                                $Title = $mainPageArray[$i][2];
                                $Text = $mainPageArray[$i][3];
                                include "../phpElements/CardGreen.php";

                            };
                           

               
                ?>

              
            </div>

            
            <br>
            <br>
            <br>
            <?php 
            include "../phpElements/backButtonLux.php";
            ?>


        </div>
        <!--cards end -->

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterGreen.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>