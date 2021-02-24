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

            <h2 class="permanentMarkerTitleBig">Aschreiwunge fir d' 7<sup>ième</sup>sklassen</h2>
            
        </div>

        <!--TITRE END -->

        <!--INSCRIPTION 3eBCD -->

        <div class="containerPadding greenBackground2 contentCentered">
            <div class="grid-2-col50">
                <div>    
                    <h3 class="blueText textLeft">Modalitéiten</h3>
                    <br>
                        <div class="textOnSitehalf">
                        D ‘Aschreiwunge fir d‘7<sup>e</sup> si vun Donneschdes, dem 25. Juni bis Freides, den 3. Juli 2020.
                        <br> 
                        D‘Eltere mussen dem Direkter vum Lycée eng Kopie vun der <i>Décision d’orientation</i> areechen.
                        <br>
                        <br>
                        D‘Eltere kréie vum Titulaire vum Zykel 4.2 en Auswäertungsdossier. An dësem Dossier stinn ënnert anerem d’Tëschebilan'en, de Bilan vum Enn vum Schouljoer, e Schema vun der Entwécklung vun de Kompetenzen an ënner Ëmstänn och e Bilan vun de Kenntnisser vum Kand.
                        
                    </div>
                    <br>
                    <br>
                    <h3 class="blueText">Néideg Dokumenter:</h3>
                    <br>
                    
                    <ul class="listMLGborder">

                        <li>ausgefëllte <i>Formulaire d'inscription</i> vum MLG</li>
                        <li>Kopie vum Bilan vum Enn vum Zykel 4</li>
                        <li>Kopie vun der Orientatioundecisioun;
                            <br>an ënner Ëmstänn en Dokument, dat beweist, dass d ‘Kand erfollegräich d‘Tester gemeeschtert huet</li>
                        <li>aktuell Passfoto vum Kand</li>
                        <li>fir d ‘Aschreiwungen op d' Klasse  7<sup>e</sup>G a 7<sup>e</sup>P:
                             <br>de <i>Plan éducatif individualisé</i> (PEI) (fir all Kand, dat net vun engem Zykel 4.2 kennt)</li>
                        
                
                    </ul>
                </div>
                
                    <img src="../../assets/images/classe7e/inscription7e.jpg" alt="Inscription 7e" class="imgonSiteCenteredHorizontal">
                
            </div>

            
            <div class="contentCentered">
             

                <?php 
                include "../phpElements/formulaireInscription.php";
                ?>

                <br>   
            </div>
        </div>

       
        <!--INSCRIPTIONS END-->

        <!--cards -->

        <div class="containerPadding contentCentered">

            <div class="grid-3-col">

                <?php 
                            include "../frContentArray/classe7eArray.php";

                            for ($i = 0; $i < (count($mainPageArray)); $i++) {

                                $linkAdress = $mainPageArray[$i][0];
                                $imgAdress = $mainPageArray[$i][1];
                                $Title = $mainPageArray[$i][2];
                                $Text = $mainPageArray[$i][3];
                                include "../phpElements/CardGreen.php";

                            };
                           
           

                ?>


              
            </div>
            
            <br>
            <br>
            <br>
            <?php 
            include "../phpElements/backButtonLux.php";
            ?>


        </div>
        <!--cards end -->

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterGreen.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>