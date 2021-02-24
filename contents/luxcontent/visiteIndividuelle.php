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


        <!--Choose DATE-->

        <h2 class="permanentMarkerTitleBig">Visites guidées individuelles au MLG</h2>

        <div class="containerVisite">

                                <table id="visiteIndTable">
                                    <tr>
                                        <td><strong>Période prévue :</strong></td>
                                        <td>8. Juin – 20. Juin 2020</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Horaires :</strong></td>
                                        <td>Lu-Ve :	14h00 – 19h00  (dernier départ : 18h00)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Sa : 09h00 – 17h00  (dernier départ : 16h00)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Durée :</strong></td>
                                        <td>1 – 1,5 heures  (selon les intérêts des visiteurs)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Conditions :</strong></td>
                                        <td>Maximum 6 personnes par groupe ; Maximum 2 familles</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Port d’un masque (disponible sur place)</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Respect des dispositions d’hygiène affichées</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>Respect de l’horaire fixé</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Procédure :</strong></td>
                                        <td>Prendre rendez-vous soit</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>- par téléphone au numéro : 	750665 – 5302 ou – 5405</td>
                                    </tr>

                                    <tr>
                                        <td><strong>&nbsp;</strong></td>
                                        <td>- par mail (*) à l’adresse : 	<a href="mailto:po@mlg.lu?subject=MLG Visite guidée PO" style="color: white; font-weight: bold;">po@mlg.lu</a></td>
                                    </tr>

                                    
                                
                                
                                
                                </table>


                            <p>(*) Afin de faciliter la préparation de la visite, nous vous proposons de nous envoyer le formulaire ci-après, rempli avec vos indications.</p><br><br>

                            <center>
                            <a href="../../assets/pdf/Formulaire-demande-visite-individuelle.pdf" class="pdfcontainer " target="_blank " ><img src="../../assets/images/placeholderImages/pdf.jpg "> Formulaire pour visite individuelle</a>
                            <br><br><br>
                             </center>

        
        </div>

       

        


       
       

       <div class="grid-2-col containerPadding greenBackground2 contentCentered" style="padding-top: 50px; padding-bottom: 50px;box-sizing: border-box;">
                
                
                <div><a href="../luxcontent/visite3dbp.php" target=""><button class="bigButtonGreen">Visite 3D - Bâtiment principal</button></a></div>
                <div><a href="../luxcontent/visite3dsportif.php" target=""><button class="bigButtonGreen">Visite 3D - Centre sportif</button></a></div>
                
                
            </div>
        
    <div class="contentCentered formulaire">
        <h3 style="text-align: center; padding: 5px;"> Pour toute question supplémentaire n'hésitez pas à nous contacter par téléphone, mail ou par formulaire !<h3>

                        <div class="grid-2-col50g">

                            <div id="leftContact">

                                <form action="../phpElements/mail.php" method="post" id="contactFormMLG"> 



                                <p>Numm / Nom:</p>
                                <input type="text" name="nom" size="40" maxlength="50"  class="inputField" value="" required /> 





                                <p>Virnumm / Prénom:</p>
                                <input type="text" name="prenom" size="40" maxlength="50" class="inputField" value="" required />




                                <p>Adresse Mail:</p>
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
            include "../phpElements/homeButton.php";
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





        


