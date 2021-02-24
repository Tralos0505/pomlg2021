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

            <h2 class="permanentMarkerTitleBig">Bientôt plus d'informations !</h2>
            
        </div>

        <!--TITRE END -->

        <!--INSCRIPTION 3eBCD -->

        <div class="containerPadding contentCentered">
            
                
                    <img src="../../assets/images/underConstructionImages/soon.jpg" " class="imgonSiteCenteredHorizontal" style="margin-bottom: 5px;margin-top: 10px;">
                
           
                    

            
            <div class="contentCentered">
             

                <?php 
                include "../phpElements/formulaireInscription.php";
                ?>

                <br>
                <?php 
                include "../phpElements/backButton.php";
                ?>   
            </div>
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