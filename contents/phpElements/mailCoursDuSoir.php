<?php

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$matricule = htmlspecialchars($_POST["matricule"]);
$dateNaissance = htmlspecialchars($_POST["dateNaissance"]);
$lieuNaissance = htmlspecialchars($_POST["lieuNaissance"]);
$paysNaissance = htmlspecialchars($_POST["paysNaissance"]);
$nationalite = htmlspecialchars($_POST["nationalite"]);
$sexe = htmlspecialchars($_POST["sexe"]);
$adresse = htmlspecialchars($_POST["adresse"]);
$codePostal = htmlspecialchars($_POST["codePostal"]);
$localite = htmlspecialchars($_POST["localite"]);
$telephone = htmlspecialchars($_POST["telephone"]);
$mail = htmlspecialchars($_POST["mail"]);
$cours = htmlspecialchars($_POST["cours"]);


$sender = "Nom: $nom, Prenom: $prenom et Matricule: $matricule";
$adresse = "$adresse - Code postal: $codePostal - Localite: $localite";

$message =

"
|-----------------------------------------------------------------------------------------------------------------------------------------
|Inscription pour:  | $prenom $nom 
|-----------------------------------------------------------------------------------------------------------------------------------------
|Pour le cours:     | $cours       
|-----------------------------------------------------------------------------------------------------------------------------------------
|Matricule          | $matricule                 
|-----------------------------------------------------------------------------------------------------------------------------------------
|Date de naissance: | $dateNaissance               
|-----------------------------------------------------------------------------------------------------------------------------------------
|Lieu de naissance: | $lieuNaissance               
|-----------------------------------------------------------------------------------------------------------------------------------------
|Pays de naissance: | $paysNaissance               
|-----------------------------------------------------------------------------------------------------------------------------------------
|Nationalite:       | $nationalite                
|-----------------------------------------------------------------------------------------------------------------------------------------
|Sexe:              | $sexe               
|-----------------------------------------------------------------------------------------------------------------------------------------
|Adresse:           | $adresse                 
|-----------------------------------------------------------------------------------------------------------------------------------------
|Telephone:         | $telephone               
|-----------------------------------------------------------------------------------------------------------------------------------------
|E-Mail:            | $mail                
|-----------------------------------------------------------------------------------------------------------------------------------------

";



$confirmationMessage = 
"
Madamm, Monsieur, \n
Mir hunn är Ufro fir d'Aschreiwung vum $prenom $nom fir den Owescours $cours krut. \n
Weider Informatiounen zum Oflaf vun den Coursen ginn Iech Enn September kommunizéiert. \n
Mat beschte Gréiss, \n
D'Sekretariat vun den Owescoursen \n
csa@mlg.lu  -  +352 750665-5255\n\n

------------------------------------------------------------------------------------------- \n\n

Madame, Monsieur,\n
Nous avons bien reçu votre demande d’inscription pour $prenom $nom au cours du soir $cours.\n
Des informations supplémentaires quant à l’organisation des cours vous seront communiquées fin septembre.\n
Salutations distinguées,\n
Le secrétariat des cours du soir\n
csa@mlg.lu  -  +352 750665-5255\n\n

------------------------------------------------------------------------------------------- \n\n

Dear Madam or Sir, \n
We hereby acknowledge receipt of the registration of $prenom $nom for the following evening course: $cours.\n
Further information concerning the organisation of evening courses will follow by the end of September.  \n
Best wishes, \n
The office of evening courses\n
csa@mlg.lu  -  +352 750665-5255 \n\n\n\n

------------------------------------------------------------------------------------------- \n\n" ;




mail("coursdusoirmlg@gmail.com", "Mail Inscription Cours du soir de la part de:  $sender", $message);
mail("$mail", "Confirmation - Inscription - Cours:  $cours", $confirmationMessage);






#Formatéierung vu php-Text: https://css-tricks.com/sending-nice-html-email-with-php/ csa@mlg.lu ;


?>

<!DOCTYPE html>
<html lang="en">

        <?php 
        include "../phpElements/HeaderCoursDuSoir.php";
        ?>

<body>

    <div class="contentContainer blueBackground">

        

        <!--MESSAGE SEND-->

        <div id="topContainer" class="contentCentered">
            <br>
            <br>

            <div class="confirmationText">

                <h2 class="permanentMarkerTitle">Merci fir Är Umeldung. Dir kritt demnächst eng Konfirmatioun per E-Mail.</h2>

                <h2 class="permanentMarkerTitle">Merci pour votre inscription. Un courriel de confirmation vous joindra prochainement.</h2>

                <h2 class="permanentMarkerTitle">Thank you for signing up. A confirmation mail will be sent to you shortly. </h2>

                <center> <h3>Please check your Spamfolder !</h3>
                <h3> If you don't get immediate confirmation we will contact you.<h3> </center>
                
            </div>
            

            <div class="grid-2-col50g">
                <a href="https://www.maacherlycee.lu/fr/offre-scolaire/cours-du-soir/offre-des-cours" target=""><button class="bigButtonGreen">Retour</button></a>
                <a href="https://www.maacherlycee.lu/fr/offre-scolaire/cours-du-soir/offre-des-cours" target=""><button class="bigButtonGreen">Zereck</button></a>
            
            </div>



        </div>

        <!--MESSAGE SEND -->

       

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterGreenCoursDuSoir.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>