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


        <!--Choose DATE-->

        <h2 class="permanentMarkerTitleBig">Individuell Visite-guidéeën am MLG</h2>

        <div class="containerVisite">

                                <table id="visiteIndTable">
                                    <tr>
                                        <td><strong>Zäitraum:</strong></td>
                                        <td>8. Juni – 20. Juni 2020</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Horairen:</strong></td>
                                        <td>Mé - Fr :	14h00 – 19h00  (leschten Depart : 18h00)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Sa : 09h00 – 17h00  (leschten Depart : 16h00)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Dauer:</strong></td>
                                        <td>1 – 1,5 Stonn  (je no Interessi vum Visiteur)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Conditiounen:</strong></td>
                                        <td>Maximum 6 Persoune pro Grupp ; Maximum 2 Famillen</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>D'Droë vun enger Mask ass obligatoresch (op der Plaz disponibel)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Respektéiere vun den affichéierten Hygiènesmesuren</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Respektéiere vum fixéierte Rendez-vous</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Prozedur:</strong></td>
                                        <td>E Rendez-vous ka fixéiert ginn entweder</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>- per Telefon ënnert der Nummer: 	750665 – 5302 oder – 5405</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>- per E-Mail (*) un d'Adress: 	<a href="mailto:po@mlg.lu?subject=MLG Visite guidée PO" style="color: white; font-weight: bold;">po@mlg.lu</a></td>
                                    </tr>

                                    
                                
                                
                                
                                </table>


                            <p>(*) Fir eis d'Virbereedung vun der Visite ze erliichtere proposéiere mir Iech, de Formulaire hei drënner auszefëllen an eis zoukommen ze loossen.</p><br><br>

                            <center>
                            <a href="../../assets/pdf/Formulaire-demande-visite-individuelle.pdf" class="pdfcontainer " target="_blank " ><img src="../../assets/images/placeholderImages/pdf.jpg "> Formulaire fir eng individuell Visitt</a>
                            <br><br><br>
                             </center>

        
        </div>

       

        


       
       

       <div class="grid-2-col containerPadding greenBackground2 contentCentered" style="padding-top: 50px; padding-bottom: 50px;box-sizing: border-box;">
                
                
                <div><a href="../luxcontent/visite3dbp.php" target=""><button class="bigButtonGreen">Visite 3D - Bâtiment principal</button></a></div>
                <div><a href="../luxcontent/visite3dsportif.php" target=""><button class="bigButtonGreen">Visite 3D - Centre sportif</button></a></div>
                
                
            </div>
        
    <div class="contentCentered formulaire">
        <h3 style="text-align: center; padding: 5px;"> Zéckt net, eis am Fall vun zousätzleche Froë per Telefon, E-Mail oder Formulaire ze kontaktéieren!!<h3>

                        <div class="grid-2-col50g">

                            <div id="leftContact">

                                <form action="../phpElements/mail.php" method="post" id="contactFormMLG"> 



                                <p>Numm / Nom:</p>
                                <input type="text" name="nom" size="40" maxlength="50"  class="inputField" value="" required /> 





                                <p>Virnumm / Prénom:</p>
                                <input type="text" name="prenom" size="40" maxlength="50" class="inputField" value="" required />




                                <p>Adresse Mail / E-Mailsadress:</p>
                                <input type="mail" name="mail" size="40" maxlength="50" class="inputField" value="" required />


                                <p>Dir hutt zousätzlech Froen? / Vous avez des questions supplémentaires ?</p>
                                <br>
                                <textarea  name="question" cols="20" rows="10" class="inputTextField" value="" required></textarea>

                                <br>
                                <br>

                                

                                <input type="submit" value="Schécken / Envoyer" id="formulaireButton">
                                </form>
                            </div>

                            <div id="rightContact">


                                <h3>MLG - méi no bei Iech !</h3>
                                <img src="../../assets/images/formulaireImages/guide.jpg" id="contactImage">



                            </div>




                        </div>

                        
           
            <br>
            <?php 
            include "../phpElements/homeButtonLux.php";
            ?>
            <br>
            


                    </div>
                    

        <!--CHOOSE DATE END -->

       

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterGreen.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>





        


