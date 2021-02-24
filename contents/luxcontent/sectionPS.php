<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include "../phpElements/Header.php";
    ?>
</head>

<body>



<div class="contentContainer blueBackground">

        <!-- NAVIGATION -->

        <?php 
        include "../phpElements/NavigationBar.php";
        ?>


        <!-- NAVIGATION END-->


        <!--TITRE-->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitleBig">Section paramédicale et sociale (PS)</h2>

            <p class="contentCentered"> La section paramédicale et sociale (PS) met l’accent sur les sciences naturelles comme</p>
                <ul class="listMLGborder centerList">
                        <li>la biologie générale et humaine</li>
                        <li>la chimie</li>
                        <li>la physique</li>

                        <br>
                         <li>et les séances de travaux <br>pratiques (TP) y afférents.</li>
                </ul>


        </div>

        <!--TITRE -->

        <!--TEXT GPS -->

    <div class="greenBackground2 contentCentered">




        <div class="grid-2-col50">



                 <div>

                <br>
                <br>
                <br>
                
                    <h3 class="blueText textLeft"> Conditions d'admission:</h3>

                    <ul class="listMLGborder">
                    <li>5C réussie</li>
                    <br>
                    <li >5G réussie au niveau globalement avancé <b>et</b> <br>
                        
                        au moins 40 points en sciences naturelles et au moins 30 points en sciences sociales<br>
                        <b>ou</b><br>
                        au moins 40 points en sciences sociales et au moins 30 points en sciences naturelles<br></li>
                     
                    </ul>

                    <img src="../../assets/images/sections/sectionPS.png" alt="Section PS" class="imgonSiteCenteredHorizontal" style="box-shadow: clear;;">
                    
                    <br>
                    <?php 
                        include "../phpElements/formulaireInscription.php";
                        ?>
                        <br>
                        <br>

                    <br>
                    <br>

                </div>

                        

                <img src="../../assets/images/sections/sectionPSDep.jpeg" alt="Section PS" class="imgonSiteCenteredHorizontal">
                

        </div>


<!--Text Débouchés-->

        <div class="contentCentered">
            <h3 class="blueText"> La classe 3GPS réussie donne accès entre autres</h3>

            <ul class="listMLGborder">
                    <li>aux classes 2GSH et 1GSH (Section sciences de la santé) offerts au Lycée technique pour professions de santé (LTPS)</li>
                    <li>aux classes 2GSI et 1GSI (Section de la formation de l’infirmier) offerts au Lycée technique pour professions de santé (LTPS)</li>
                    <li>à une classe 2GSO</li>
                    </ul>

        </div>


        <br>
        <br>
        
        <br>
        <hr class="footerHr ">
        <br>
        <br>
       



        <br>
                <?php 
                include "../phpElements/backButton.php";
                ?>  
        <br>
        <br>
        <br>
        <br>


    </div>

    



    <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlue.php";
        ?>


    <!--FOOTER END-->



</div>





    <script src="../../js/navigationBar.js "></script>
</body>

</html>