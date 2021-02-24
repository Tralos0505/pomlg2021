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


        <!--MOT DU DIRECTEUR -->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitle">Begréissung vum Direkter...</h2>

            <iframe src="https://www.youtube.com/embed/Fp1anKJYcKQ?cc_load_policy=1"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videoOnSite"></iframe>
            <!-- <p style="font-size: small;">Sous-titres français disponibles.<p> -->

            <p class="textMotduDirecteur ">
                <em>"Am Numm vun der Direktioun begréissen ech Iech op der Websäit vun der Porte Ouverte 2020 vum MLG.
                Hei fannt Der all déi wichteg an interessant Informatiounen iwwer eise Lycée."</em>

                <hr class="footerHr">
            <br>
            <a href="https://po.maacherlycee.lu/contents/luxcontent/VisiteLuxIndex.php" id="langSelect" style="">Site Web - Version française</a>
            <br>
            <br>
            

        </div>

        <!--MOT DU DIRECTEUR END -->

        <!--cards -->

        <div class="containerPadding greenBackground2 contentCentered">
            <div class="grid-3-col">

                <?php 
                            include "../frContentArray/mainPageArray.php";

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
                
                
                <div><a href="../frcontent/informationsGenerales.php" target=""><button class="bigButtonGreen">Allgemeng Informatiounen</button></a></div>
                <div><a href="../frcontent/departements.php" target=""><button class="bigButtonGreen">Eis Departementer</button></a></div>
                <div><a href="../frcontent/ipad.php" target=""><button class="bigButtonGreen">iPad-Klassen (one2one)</button></a></div>
                <div><a href="../frcontent/visiteIndividuelle.php" target=""><button class="bigButtonGreen">Visites guidées</button></a></div>
                
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