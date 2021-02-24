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

            <h2 class="permanentMarkerTitleBig">Nos Infrastructures</h2>

            <div class="containerPadding greenBackground2 contentCentered">

            
                <!-- ONE 3D PIC -->
                <h2 class="gridBorderHeading">Salle de Classe - Standard</h2>
                
                
                            <div id="viewer" class="viewer3DSingle">
                            </div>


                                

                                <script>
                                var viewer = new PhotoSphereViewer.Viewer({
                                    container: document.querySelector('#viewer'),
                                    panorama: '../../assets/images/images3D/salleDeClasseMLG.jpg'
                                });
                                </script>
                    
                

           

                            <br>
                            <hr class="footerHr">
                            <br>
                            <?php 
            include "../phpElements/backButton.php";
            ?>
                <!-- ONE 3D PIC END --> 
                


        </div>



        </div>

        <!--TITRE END -->

        <!--CHIFFRES -->

        
        

       <!--FOOTER-->

       <?php 
        include "../phpElements/FooterBlue.php";
        ?>

        <!--FOOTER END-->



  




    </div>
    <script src="../../js/navigationBar.js"></script>
</body>

</html>