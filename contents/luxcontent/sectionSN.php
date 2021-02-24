<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include "../phpElements/Header.php";
    ?>
</head>

<body>


<div class="contentContainer blueBackground">

        <!-- NAVIGATION -->

        <?php 
        include "../phpElements/NavigationBar.php";
        ?>


        <!-- NAVIGATION END-->


        <!--TITRE-->

        <div id="topContainer" class="contentCentered">

            <h2 class="permanentMarkerTitleBig">Section des Sciences Naturelles (GSN)</h2>

            <p class="contentCentered"> La section des Sciences Naturelles (GSN) s’adresse aux élèves qui sont fascinés par une approche scientifique et qui présentent un intérêt particulier pour les sciences naturelles comme </p>
            <br>    
            <ul class="listMLGborder centerList">
                        <li >la biologie</li>
                        <li >la chimie</li>
                        <li >la physique</li>
                        <li >la géographie</li>
                </ul>
                <br>
                <br>
            <u><b>Le Maacher Lycée est le seul lycée à offrir cette formation dans la région Est du Luxembourg.</b></u>

           

        </div>

        <!--TITRE -->

    <!--TEXT GSN -->

        <div class="containerPadding greenBackground2 contentCentered">

            <div class="grid-2-col50">

                <div class="textOnSitehalf">
                
                    <h3 class="blueText textLeft">Conditions d'admission:</h3>

                    <ul class="listMLGborder">
                        <li >5C réussie</li>
                        <li >5G réussie au niveau globalement avancé <b>et</b> <br>
                        
                        Mathématiques "cours avancé niveau fort" et Sciences Naturelles "niveau suffisant"<br>
                        <b>ou</b><br>
                        Mathématiques "cours avancé niveau suffisant" et Sciences Naturelles "niveau fort"<br></li>
                    </ul>
                        <center>
                        <?php 
                        include "../phpElements/formulaireInscription.php";
                        ?>
                        <br>
                        <br>
                        </center>
                        

                    <div class="contentCentered">
                    La section "Sciences Naturelles" se soldera par un <br><b>diplôme de fin d’études secondaires générales</b>.
                    </div>

                    

                </div>

                <img src="../../assets/images/sections/GSN03.jpg" alt="GSN" class="imgonSiteCenteredHorizontal">
            
            </div>

        </div>

    <!--TEXT GSN -->

    <div class="containerPadding contentCentered">

        <div class="grid-2-col50">

                <div class="textOnSitehalf">
    
                    <h3 class="greenText textLeft">La section SN au Maacher Lycée:</h3>

                    <ul class="listMLGborder placeText">
                        <li >fait partie du projet <b>iPad</b></li>
                        <li >met l'accent sur l'apprentissage d'une démarche scientifique critique et expérimentale</li>
                        <li >favorise une approche interdisciplinaire (TRAPE en classe de 2<sup>e</sup>)</li>
                        <li >soutient de multiples activités scientifiques: stage écologique à Texel, ScienteensLab, visites, ...</li>
                    </ul>

                </div>

            <img src="../../assets/images/sections/GSN02.jpg" alt="GSN" class="imgonSiteCenteredHorizontal">

        </div>

    </div>

    <!--Text Débouchés-->

    <div class="containerPadding greenBackground2 contentLeft">

        <div class="grid-2-col50">

            <div class="textOnSitehalf">
    
                <h3 class="blueText textLeft">Le diplôme obtenu permettra d’accéder à:</h3>

                <ul class="listMLGborder">
                <li>des études supérieures et universitaires dans les domaines de la biologie, la physique, la chimie, la géographie, la biochimie, l'environnement, la biotechnologie, ...</li>
                <li>des carrières professionnelles dans des entreprises industrielles, des laboratoires de recherche, des bureaux d'études, l'agriculture, le secteur public, ... </li>
                <li>des qualifications telles que biologiste, chimiste, physicien, ingénieur, instituteur, professeur, officier de carrière, chercheur, informaticien hautement qualifié</li>
                </ul>
                <br>
                Tu es intéressé(e) par les sciences en général ? Tu souhaites accéder à des études universitaires dans les domaines tels que la biologie, les sciences de l’environnement, la biochimie, les biotechnologies ou la géographie ?<br>
                Alors nous t'invitons à rejoindre la section &laquo;sciences naturelles&raquo; au MLG.<br>

                <center>
                <br>
                <?php 
                include "../phpElements/formulaireInscription.php";
                ?>
                </center>    
                
            </div>

            <img src="../../assets/images/sections/GSN01.jpg" alt="GSN" class="imgonSiteCenteredHorizontal">

        </div>

             <br>
            <br>
            <br>
            <center><?php 
            include "../phpElements/backButton.php";
            ?></center>
            

    </div>




    <!--FOOTER-->

        <?php 
        include "../phpElements/FooterBlue.php";
        ?>


    <!--FOOTER END-->


</div>


    <script src="../../js/navigationBar.js "></script>
</body>

</html>