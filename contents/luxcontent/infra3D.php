<!DOCTYPE html>
<html lang="en">

        <?php 
        include "../phpElements/Header3D.php";
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

            <h2 class="permanentMarkerTitleBig">Infrastructures en 3D</h2>

    	    <div class="listMLGborder">
            <p> Découvrez nos infrastructures en choisissant un endroit parmis ceux proposés dans la liste suivante</p>

            <p><strong>L'endroit que vous allez découvrir par la suite est une photographie en 3D</strong></p>

            <p>Manipulez par la suite la photographie avec le curseur de votre souris ou avec votre doigt !</p>
            
            </div>

        </div>

        <!--TITRE END -->

        <!--ACTPA Text -->

        <div class="containerPadding greenBackground2 contentCentered">

            
            <div class="gridbutton4  containerPadding contentCentered">
                
                
                <a href="../luxcontent/infra3D1.php" target=""><button class="bigButtonGreen">Atelier artistique</button></a>
                <a href="../luxcontent/infra3D2.php" target=""><button class="bigButtonGreen">Atelier hydraulique</button></a>
                <a href="../luxcontent/infra3D3.php" target=""><button class="bigButtonGreen">Atelier mécanique</button></a>
                <a href="../luxcontent/infra3D4.php" target=""><button class="bigButtonGreen">Atelier bois</button></a>

                <a href="../luxcontent/infra3D5.php" target=""><button class="bigButtonGreen">Bibliothèque</button></a>
                <a href="../luxcontent/infra3D6.php" target=""><button class="bigButtonGreen">Caféteria - Restauration</button></a>
                <a href="../luxcontent/infra3D7.php" target=""><button class="bigButtonGreen">Chalêt</button></a>
                <a href="../luxcontent/infra3D8.php" target=""><button class="bigButtonGreen">Salles des fêtes</button></a>

                <a href="../luxcontent/infra3D9.php" target=""><button class="bigButtonGreen">Salle de Classe - Biologie</button></a>
                <a href="../luxcontent/infra3D10.php" target=""><button class="bigButtonGreen">Salle de Classe - Chemie</button></a>
                <a href="../luxcontent/infra3D11.php" target=""><button class="bigButtonGreen">Laboratoire - Chemie</button></a>
                <a href="../luxcontent/infra3D12.php" target=""><button class="bigButtonGreen">Salle de Classe - Physique</button></a>

                <a href="../luxcontent/infra3D13.php" target=""><button class="bigButtonGreen">Salle de Classe - Informatique</button></a>
                <a href="../luxcontent/infra3D14.php" target=""><button class="bigButtonGreen">MakerSpace</button></a>
                <a href="../luxcontent/infra3D15.php" target=""><button class="bigButtonGreen">Salle de Classe - Musique</button></a>
                <a href="../luxcontent/infra3D16.php" target=""><button class="bigButtonGreen">Salle de Classe - Standard</button></a>
                
                

                
                
            </div>

                            <hr class="footerHr">
                            <br>

                            <div id="viewer" class="viewer3DSingle">
                            </div>


                                

                                <script>
                                var viewer = new PhotoSphereViewer.Viewer({
                                    container: document.querySelector('#viewer'),
                                    panorama: '../../assets/images/images3D/outsideMLG.jpg'
                                });
                                </script>
                    
                

           

                            <br>
                            <hr class="footerHr">
                            <br>
                            <br>
                            <?php 
            include "../phpElements/backButtonLux.php";
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