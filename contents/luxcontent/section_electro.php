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

            <h2 class="permanentMarkerTitleBig">Section Électrotechnique</h2>

            <p class="textOnSitehalf"> La formation dure trois ans et mène au Diplôme d'aptitude professionnelle (DAP) comme <b>électronicien en énergie</b>.
            <br>
            <br>Elle peut se faire en <b>régime &laquo;concomitant&raquo;</b> (en partie au lycée et en partie chez le patron) <b>ou en régime à plein temps</b> (entièrement au lycée).
            

        </div>

        <!--TITRE -->

        <!--TEXT Electro -->

    <div class="greenBackground2 contentCentered">




        <div class="grid-2-col50">
                


                 <div class="textOnSite"> 

                    <p>L’électronicien en énergie planifie et implante des installations d’approvisionnement en énergie. Il les monte, effectue leur démarrage et s’occupe de la maintenance. Il peut trouver des postes dans les professions de l’électronique, comme par exemple des équipementiers techniques de bâtiments ainsi qu’auprès des installateurs de lumière et de signalisation sur les routes et les chemins de fer.</p>
                    <br>
                    <h3 class="blueText">Conditions d'admission:</h3>

                    <ul class="listMLGborder">

                    <li>5G réussie au niveau globalement de base ou globalement avancé</li>

                    </ul>
                    <center>

                    <?php 
                    include "../phpElements/formulaireInscription.php";
                    ?>


                    </center>
                    

                    <br>
                    <h3 class="blueText">Le diplôme DAP de l'électronicien en énergie permettra:</h3>

                    <ul class="listMLG">

                        <li>d’accéder à la vie professionnelle en tant que salarié qualifié</li>
                        <li>d’enchaîner avec une formation de technicien de la même spécialité</li>
                        <li>de poursuivre ses études dans les classes supérieures de l’enseignement secondaire général</li>
                        <li>de faire un brevet de maîtrise</li>
                        
                    </ul>
                   
                </div>

                        

                <img src="../../assets/images/formationProfessionnelle/electro2.jpg" alt="Electro" class="imgonSiteCenteredHorizontal">


        </div>


                
        
        <br>
        <hr class="footerHr ">
        <br>
        <br>
       



        <center>
            <?php 
            include "../phpElements/backButton.php";
            ?>
            </center>
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