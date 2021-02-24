<?php echo 



'<div class="greenBackground2 contentCentered formulaire">

    <div class="grid-2-col50g">

        <div id="leftContact">

            <form action="../phpElements/mail.php" method="post" id="contactFormMLG"> 


            

                
                    <p>Numm / Nom:</p>
                    <input type="text" name="nom" size="40" maxlength="50"  class="inputField" value="" required /> 

              


               
                    <p>Virnumm / Prénom:</p>
                    <input type="text" name="prenom" size="40" maxlength="50" class="inputField" value="" required />




            <p>Adresse Mail / E-Mail-Adress:</p>
            <input type="mail" name="mail" size="40" maxlength="50" class="inputField" value="" required />




            <p>Är Fro / Votre question:</p>
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
';


?>

        


