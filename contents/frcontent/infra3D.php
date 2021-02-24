<!DOCTYPE html>
<html lang="en">

        <?php 
        include "../phpElements/Header3D.php";
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

            <h2 class="permanentMarkerTitleBig">Infrastrukturen an 3D</h2>

    	    <div class="listMLGborder">
            <p> Entdeckt eist Gebai andeems der an der Lëscht heidrënner eng Plaz auswielt.</p>

            <p><strong>Dir kommt dann op eng 3D-Foto vun der ausgewielter Plaz.</strong></p>

            <p>Dir kënnt Iech mat der Maus oder mam Fanger op der Foto bewegen.</p>
            
            </div>

        </div>

        <!--TITRE END -->

        <!--ACTPA Text -->

        <div class="containerPadding greenBackground2 contentCentered">

            
            <div class="gridbutton4  containerPadding contentCentered">
                
                
                <a href="../frcontent/infra3D1.php" target=""><button class="bigButtonGreen">Zeechenatelier</button></a>
                <a href="../frcontent/infra3D2.php" target=""><button class="bigButtonGreen">Hydraulikatelier</button></a>
                <a href="../frcontent/infra3D3.php" target=""><button class="bigButtonGreen">Mechanikatelier</button></a>
                <a href="../frcontent/infra3D4.php" target=""><button class="bigButtonGreen">Holzatelier</button></a>

                <a href="../frcontent/infra3D5.php" target=""><button class="bigButtonGreen">Bibliothéik</button></a>
                <a href="../frcontent/infra3D6.php" target=""><button class="bigButtonGreen">Kantin</button></a>
                <a href="../frcontent/infra3D7.php" target=""><button class="bigButtonGreen">Chalêt</button></a>
                <a href="../frcontent/infra3D8.php" target=""><button class="bigButtonGreen">Festsall</button></a>

                <a href="../frcontent/infra3D9.php" target=""><button class="bigButtonGreen">Klassesall - Biologie</button></a>
                <a href="../frcontent/infra3D10.php" target=""><button class="bigButtonGreen">Klassesall - Chemie</button></a>
                <a href="../frcontent/infra3D11.php" target=""><button class="bigButtonGreen">Laboratoire - Chemie</button></a>
                <a href="../frcontent/infra3D12.php" target=""><button class="bigButtonGreen">Klassesall - Physik</button></a>

                <a href="../frcontent/infra3D13.php" target=""><button class="bigButtonGreen">Klassesall - Informatik</button></a>
                <a href="../frcontent/infra3D14.php" target=""><button class="bigButtonGreen">MakerSpace</button></a>
                <a href="../frcontent/infra3D15.php" target=""><button class="bigButtonGreen">Klassesall - Musik</button></a>
                <a href="../frcontent/infra3D16.php" target=""><button class="bigButtonGreen">Klassesall - Standard</button></a>
                
                

                
                
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