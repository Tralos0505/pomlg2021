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

            <h2 class="permanentMarkerTitleBig">Inscription en classe de 7<sup>e</sup></h2>
            
        </div>

        <!--TITRE END -->

        <!--INSCRIPTION 3eBCD -->

        <div class="containerPadding greenBackground2 contentCentered">
            <div class="grid-2-col50">
                <div>    
                    <h3 class="blueText textLeft">Modalités d'inscription</h3>
                    <br>
                        <div class="textOnSitehalf">
                        L'inscription pour la classe de 7<sup>e</sup> se fera du 25 juin au 3 juillet 2020.
                        <br> 
                        Les parents transmettent une copie de la décision d’orientation au directeur du lycée.
                        <br>
                        <br>
                        Au préalable, le titulaire de classe (cycle 4.2) doit remettre le <b>dossier d’évaluation</b> aux parents de l’élève. Dans ce dossier sont regroupés notamment les bilans intermédiaires, les bilans de fin de cycle, les grilles du développement de compétences et, le cas échéant, le bilan des compétences.
                        
                    </div>
                    <br>
                    <br>
                    <h3 class="blueText">Documents requis:</h3>
                    <br>
                    
                    <ul class="listMLGborder">

                        <li>le formulaire d'inscription MLG dûment rempli</li>
                        <li>une copie du bilan de fin de cycle (cycle 4)</li>
                        <li>une copie de la décision d’orientation ;
                            <br>le cas échéant, le document certifiant la réussite aux épreuves d’accès</li>
                        <li>une photo d’identité récente de l’élève</li>
                        <li>Pour l'inscription en classe de 7<sup>e</sup>P:
                             <br>le <b>plan éducatif individualisé PEI</b> (pour tout élève ne provenant pas du cycle 4.2)</li>
                        
                
                    </ul>
                </div>
                
                    <img src="../../assets/images/classe7e/inscription7e.jpg" alt="Inscription 7e" class="imgonSiteCenteredHorizontal">
                
            </div>

            
            <div class="contentCentered">
             

                <?php 
                include "../phpElements/formulaireInscription.php";
                ?>

                <br>   
            </div>
        </div>

       
        <!--INSCRIPTIONS END-->

        <!--cards -->

        <div class="containerPadding contentCentered">

            <div class="grid-3-col">

                <?php 
                            include "../contentArray/classe7eArray.php";

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