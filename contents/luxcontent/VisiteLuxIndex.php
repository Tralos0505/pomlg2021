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


        <!--MOT DU DIRECTEUR -->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitle">Mot du directeur ...</h2>

            <iframe src="https://www.youtube.com/embed/Fp1anKJYcKQ?cc_load_policy=1"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videoOnSite"></iframe>
            <!-- <p style="font-size: small;">Sous-titres français disponibles.<p> -->

            <p class="textMotduDirecteur ">
                <em>"Au nom de la direction, je vous souhaite la bienvenue sur le site web de la Porte ouverte 2020 du MLG. Vous y trouverez toutes les informations utiles et intéressantes concernant notre lycée."</em>

            <hr class="footerHr">
            <br>
            <a href="https://po.maacherlycee.lu/contents/frcontent/VisiteLuxIndex.php"  id="langSelect">Website - Lëtzebuergesch Versioun</a>
            <br>
            <br>
            

        </div>

        <!--MOT DU DIRECTEUR END -->

        <!--cards -->

        <div class="containerPadding greenBackground2 contentCentered">
            <div class="grid-3-col">

                <?php 
                            include "../contentArray/mainPageArray.php";

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
            <br>


           




        </div>
        <!--cards end -->

        <div class="grid-4-col containerPadding contentCentered" style="padding-top: 50px; padding-bottom: 50px;">
                
                
                <div><a href="../luxcontent/informationsGenerales.php" target=""><button class="bigButtonGreen">Informations générales</button></a></div>
                <div><a href="../luxcontent/departements.php" target=""><button class="bigButtonGreen">Départements d'enseignement</button></a></div>
                <div><a href="../luxcontent/ipad.php" target=""><button class="bigButtonGreen">Classes iPad one2one</button></a></div>
                <div><a href="../luxcontent/visiteIndividuelle.php" target=""><button class="bigButtonGreen">Visites guidées</button></a></div>
                
            </div>



        <!-- Contact -->

        <?php 
        include "../phpElements/contactGreen.php";
        ?>

         <!-- Contact END-->

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlue.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>