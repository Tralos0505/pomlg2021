<!DOCTYPE html>
<html lang="en">

        <?php 
        include "../phpElements/Header.php";
        ?>

<body>

    <div class="contentContainer blueBackground">

        <!-- NAVIGATION -->
        
        <?php 
        include "../phpElements/NavigationBar.php";
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
                    <h3 class="blueText textLeft">Modalités d'inscription</h3>
                    <br>
                        <div class="textOnSitehalf">
                        L'inscription pour la classe de 4<sup>e</sup> se fera du lundi 20 au mercredi 22 juillet 2020.
                        <br> 
                        Toute demande d'inscription doit être adressée moyennant le formulaire d'inscription au directeur du lycée.
                        </div>
                    <br>
                    <br>
                    <h3 class="blueText">Documents à joindre</h3>
                    <br>
                    <br>
                    <ul class="listMLGborder">

                        <li>Fiche d'inscription MLG dûment remplie</li>
                        <li>Lettre de motivation</li>
                        <li>Copie des bulletins des deux dernières classes fréquentées</li>
                        <li>Pour l'admission en <b>4<sup>e</sup>G</b>, il y a lieu de fournir l'avis d'orientation de la classe 5G</li>
                        <li>Copie de la carte de sécurité sociale</li>
                        <li>Fiche de départ de l’ancien lycée</li>
                
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
                            include "../contentArray/4eGeneraleArray.php";

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
            include "../phpElements/backButton.php";
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