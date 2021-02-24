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

            <h2 class="permanentMarkerTitleBig">Eis Departementer</h2>
            <br>
            <br>
        </div>
    
    
        <!--TITRE END -->

        <!--cards -->

    <div class="containerPadding greenBackground2 contentCentered">
           

        <div class="grid-4-col">

            <?php 
            include "../frContentArray/departementsArray.php";

            for ($i = 0; $i < (count($mainPageArray)); $i++) {

            $linkAdress = $mainPageArray[$i][0];
            $imgAdress = $mainPageArray[$i][1];
            $Title = $mainPageArray[$i][2];
            $Text = $mainPageArray[$i][3];
            include "../phpElements/CardBlueSmall.php";

                };
               

            ?>

        </div>

        <br>
        <br>

                    <?php 
                    include "../phpElements/backButtonLux.php";
                    ?>
  
    </div>

    <!--cards END>


    <!--FOOTER-->

    

    <?php 
    include "../phpElements/FooterBlue.php";
    ?>

    <!--FOOTER END-->



</div>

    <script src="../../js/navigationBar.js"></script>
</body>

</html>