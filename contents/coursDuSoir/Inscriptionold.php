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



        <!-- Formulaire -->

        <div class="greenBackground2 contentCentered formulaire">

            <div class="grid-2-col50g">

                <div id="leftContact">

                    <form action="../phpElements/mailCoursDuSoir.php" method="post" id="contactFormMLG"> 
            
                    <p>Numm / Nom: / Name</p>
                    <input type="text" name="nom" size="40" maxlength="50"  class="inputFiel" value="" required /> 

                    <p>Virnumm / Prénom:</p>
                    <input type="text" name="prenom" size="40" maxlength="50" class="inputFiel" value="" required />

                    <p>Matricule - sécurité sociale:</p>
                    <input type="text" name="prenom" size="40" maxlength="50" class="inputFiel" value="" required />

                    <p>Date de naissance</p>
                    <input type="date" name="mail" size="40" maxlength="50" class="inputFiel" value="" required />

                    <p>Lieu de naissance</p>
                    <input type="mail" name="mail" size="40" maxlength="50" class="inputFiel" value="" required />

                    <p>Pays de naissance</p>
                    <input type="mail" name="mail" size="40" maxlength="50" class="inputFiel" value="" required />

                    <p>Nationalité</p>
                    <input type="mail" name="mail" size="40" maxlength="50" class="inputFied" value="" required />


                    <p>Remarques</p>
                    <br>
                    <textarea  name="question" cols="20" rows="10" class="inputTextField" value="" placeholder="Dir hutt eng Fro / Vous avez une question ?" required></textarea>

                    <br>
                    <br>

                    <input type="submit" value="Schécken / Envoyez" id="formulaireButton">
                    </form>
                </div>

                <div id="rightContact">


                    <h3>Dir hutt nach Froen ? Kontaktéiert eis iwwer dëse Formulaire.</h3>
                    <h3>Vous avez encore des questions ? Contactez-nous par ce formulaire.</h3>
                    <img src="../../assets/images/formulaireImages/question.jpg" id="contactImage">



                </div>

            </div>
        </div>

        <!-- Formulaire END-->

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlueCoursDuSoir.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>