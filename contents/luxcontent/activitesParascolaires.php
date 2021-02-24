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

            <h2 class="permanentMarkerTitleBig">Activités parascolaires (ACTPA)</h2>

    	    <div class="textOnSitehalf">
                Le Maacher Lycee offre une multitude d'activités parascolaires dans les domaines du sport, du bricolage, des arts, etc.
                <br>
                <br>
                Elles ont lieu tous les après-midis du lundi au vendredi après les cours normaux.
                <br>
                La fiche d’inscription est disponible au bureau du SEAP.
            </div>

        </div>

        <!--TITRE END -->

        <!--ACTPA Text -->

<div class="containerPadding greenBackground2 contentCentered">

            
            <div>
            <iframe src="https://www.youtube.com/embed/a7Yi-jOz4DY"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="videoOnSite"></iframe>
            <br>
            <br>
            La brochure des activités parascolaires de l'année 2019/20 peut être consultée ici:
            <br>
            <br>
            
            <a href="../../assets/pdf/brochureACTPA.pdf" target="_blank">
                <img src="../../assets/images/informationsGenerales/brochureACTPA.JPG" alt="Brochure ACTPA" style="width:300px;height:400px;border:3px solid white;">
            </a>

            <br>
            <br>
            <br>
            <br>
            
            
            <?php 
            include "../phpElements/backButton.php";
            ?>
           
           
            
           </div>
</div>


       
       
        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlue.php";
        ?>

        <!--FOOTER END-->



   


    </div>


    <script src="../../js/navigationBar.js"></script>
</body>

</html>