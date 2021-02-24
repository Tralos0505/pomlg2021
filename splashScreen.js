
// create variables to work with


var languageLu = document.getElementById("languageSelectionLu");
var languageFr = document.getElementById("languageSelectionFr");
var welcomeText = document.getElementById("welcomeText");
var buttonText = document.getElementById("buttonText");
var buttonText2 = document.getElementById("buttonText2");
var versionText = document.getElementById("versionText");


languageLu.style.backgroundColor = "#87c33e"

// add event Listeners


languageLu.addEventListener("click", function() {

    welcomeText.innerText = "Wëllkomm um Site vun der Porte Ouverte 2020 vum Maacher Lycee (MLG) - Mir invitéiren Iech, eise Lycée mat all senge Strukture kennen ze léieren. ";

    buttonText.innerHTML = '<a href="https://po.maacherlycee.lu/contents/frcontent/VisiteLuxIndex.php" class="buttonlink button">Website - Porte Ouverte</a>';

    buttonText2.innerHTML = '<a class="buttonlink button" href="https://po.maacherlycee.lu/contents/frcontent/visite3dbp.php">Visitt 3D - Haaptgebai</a>';

    buttonText3.innerHTML = '<a href="https://po.maacherlycee.lu/contents/frcontent/visite3dsportif.php" class="buttonlink button">Visitt 3D - Sportshal</a>';

    versionText.innerHTML = '<p>Version française disponible - Sélection en haut à gauche</p>';

    // buttonText.style.padding = "39px 20px";

    if (this.style.backgroundColor = "#2386a7") {
        this.style.backgroundColor = "#87c33e"
        languageFr.style.backgroundColor = "#2386a7";
    } else { this.style.backgroundColor = "#2386a7" };


});



languageFr.addEventListener("click", function() {

    welcomeText.innerText = "Bienvenue sur le site de la Porte ouverte 2020 du Maacher Lycée (MLG) - Nous vous invitons à faire connaissance avec notre lycée et à découvrir son offre scolaire et ses structures.";

    buttonText.innerHTML = '<a href="https://po.maacherlycee.lu/contents/luxcontent/VisiteLuxIndex.php" class="buttonlink button">Site Web - Porte Ouverte</a>';

    buttonText2.innerHTML = '<a href="https://po.maacherlycee.lu/contents/luxcontent/visite3dbp.php" class="buttonlink button">Visite 3D - Bâtiment principal</a>';

    buttonText3.innerHTML = '<a href="https://po.maacherlycee.lu/contents/luxcontent/visite3dsportif.php" class="buttonlink button">Visite 3D - Centre sportif</a>';

    versionText.innerHTML = '<p>Lëtzebuergesch Versioun disponibel - Auswiel uewen lénks</p>'

    // buttonText.innerText = "Accompagnez nous sur une visite virtuelle";
    //buttonText.style.padding = "39px 20px";

    if (this.style.backgroundColor = "#2386a7") {
        this.style.backgroundColor = "#87c33e"
        languageLu.style.backgroundColor = "#2386a7";
    } else { this.style.backgroundColor = "#2386a7" };

});