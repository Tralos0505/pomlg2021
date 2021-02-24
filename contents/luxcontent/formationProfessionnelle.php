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

            <h2 class="permanentMarkerTitleBig">La Formation professionnelle</h2>
        
        </div>

        <!--TITRE END -->

        <!--cards -->

        <div class="containerPadding greenBackground2 contentCentered">

            <div class="grid-3-col">

                <?php 
                            include "../contentArray/formationProfArray.php";

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

             <h3 class="greenText textLeft">Modalités d'inscription</h3>
           
             <div class="textOnSitehalf ">
            Toute demande d'inscription doit être adressée au directeur du lycée moyennant le formulaire d'inscription.
            <br>
            <br>
            Documents à joindre:
            <br>
            <br>
            <ul class="listMLGborder">
                    <li>Formulaire de demande d'inscription MLG dûment rempli</li>
                    <li>Lettre de motivation</li>
                    <li>Copie des bulletins des deux dernières classes fréquentées</li>
                    <li>Avis d'orientation de la classe 5G</li>
                    <li>Copie de la carte de sécurité sociale</li>
                    <li>Fiche de départ de l’ancien lycée</li>
                    <br>
                    <li>Pour les classes DAP à <b>régime concomitant</b> (qui se déroulent en partie dans une entreprise (formation pratique) et en partie au lycée (formation théorique)) une attestation patronale doit être fournie jusqu'au <b>31.12.2020</b>  pour rendre l'inscription définitive.
                    <br>
                    La fiche de départ de l’ancien lycée est à fournir à la suite de l'accord d'inscription au MLG.</li>
                    </ul>
            </div>
            <br>
            <br>
            <?php 
                include "../phpElements/formulaireInscription.php";
                ?>
            <br>
            <?php 
            include "../phpElements/backButton.php";
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