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

            <h2 class="permanentMarkerTitleBig">Transport scolaire</h2>

        </div>

        <div class="containerPadding contentCentered">

            <div class="containerVisite busContainer">

                <p>

                En ce qui concerne l'accessibilité du MLG, l'organisation du transport scolaire est adaptée à la région de l'Est depuis des décennies.<br><br>

                Actuellement, le MLG est fréquenté par des élèves venant de 46 communes du Grand-Duché de Luxembourg. Parmi ces communes, 38 se situent dans l'Est du pays et 8
                se répartissent à travers tout le Luxembourg. S'y ajoutent les élèves qui proviennent des pays voisins.<br><br>

                Choisissez votre lieu de résidence dans la liste ci-après. En cliquant sur « H » derrière le numéro de la ligne vous avez accès à l’horaire des bus. 
                Si votre localité ne se trouve pas dans la liste, vous pouvez consulter directement le site de la <a href="https://www.mobiliteit.lu/fr/planificateur/" style="color: white;" target="_blank">« Mobilitéits Zentral ».</a><br><br>


                </p>

                


            </div>

            <div class="containerVisite busContainer2">

                <p class="">

                En ce qui concerne l'accessibilité du MLG, l'organisation du transport scolaire est adaptée à la région de l'Est depuis des décennies.<br><br>

                Actuellement, le MLG est fréquenté par des élèves venant de 46 communes du Grand-Duché de Luxembourg. Parmi ces communes, 38 se situent dans l'Est du pays et 8
                se répartissent à travers tout le Luxembourg. S'y ajoutent les élèves qui proviennent des pays voisins.<br><br>

                Par le lien suivant vous pouvez télécharger un pdf interactif qui permet de consulter les horaires des lignes de bus déservants le MLG <br><br>

                Choisissez votre lieu de résidence dans la liste. En cliquant sur « H » derrière le numéro de la ligne vous avez accès à l’horaire des bus. 
                Si votre localité ne se trouve pas dans la liste, vous pouvez consulter directement le site de la <a href="https://www.mobiliteit.lu/fr/planificateur/" style="color: white;" target="_blank">« Mobilitéits Zentral ».</a><br><br>


                </p>

            </div>

               

        </div>

        <!--TITRE END -->

        <!--Horaires -->
        
        <div class="containerPadding greenBackground2 contentCentered">


        <div class="busContainer2">
            <br>
                    
                    <a href="../../assets/pdf/bus.pdf" class="pdfcontainer " target="_blank " ><img src="../../assets/images/placeholderImages/pdf.jpg ">Horaires - Transport Scolaire</a>
                    
        </div>

            
        <iframe src="../../assets/pdf/bus.pdf"  class="bus"></iframe>
        <br>
        <br>

          
            
       

                    <?php 
                    include "../phpElements/backButton.php";
                    ?>

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