<?php

$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$mail = htmlspecialchars($_POST["mail"]);
$message = htmlspecialchars($_POST["question"]);

$sender = "Nom: $nom et Prenom: $prenom";


mail("po@mlg.lu", "Mail vum Webformular vun der PO - Virtuell -> $sender", $message, "From: $mail");


?>

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


        <!--MESSAGE SEND-->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitle">Merci ären Message gouf verschëckt !</h2>

            <h2 class="permanentMarkerTitle">Merci votre message a été envoyé !</h2>

            <div class="grid-2-col50g">
                <a href="../luxcontent/VisiteLuxIndex.php" target=""><button class="bigButtonGreen">Retour</button></a>
                <a href="../luxcontent/VisiteLuxIndex.php" target=""><button class="bigButtonGreen">Zereck</button></a>
            
            </div>



        </div>

        <!--MESSAGE SEND -->

       

        <!--FOOTER-->

        <?php 
        include "../phpElements/FooterGreen.php";
        ?>

        <!--FOOTER END-->



    </div>





    <script src="../../js/navigationBar.js"></script>
</body>

</html>