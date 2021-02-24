
// create variables to work with


var languageLu = document.getElementById("languageSelectionLu");
var languageFr = document.getElementById("languageSelectionFr");
var welcomeText = document.getElementById("welcomeText");
var buttonText = document.getElementById("buttonText");
var buttonText2 = document.getElementById("buttonText2");


languageLu.style.backgroundColor = "#87c33e"

// add event Listeners


languageLu.addEventListener("click", function() {

    welcomeText.innerText = "Wëllkomm um Site vun der virtueller Porte Ouverte vum Maacher Lycee 2020. Mir invitéiren dech, eise Lycée mat all senge Strukture kennen ze léieren.";

    buttonText.innerHTML = '<a href="contents/frcontent/VisiteLuxIndex.php" class="buttonlink button">Website Porte Ouverte</a>';

    buttonText2.innerHTML = '<a href="#" class="buttonlink button">3D-Visitt vum MLG</a>';

    // buttonText.style.padding = "39px 20px";

    if (this.style.backgroundColor = "#2386a7") {
        this.style.backgroundColor = "#87c33e"
        languageFr.style.backgroundColor = "#2386a7";
    } else { this.style.backgroundColor = "#2386a7" };


});



languageFr.addEventListener("click", function() {

    welcomeText.innerText = "Bienvenue sur le site de la Porte Ouverte du Maacher Lycée en 2020. Nous vous invitons de faire connaissance avec notre Lycée et de découvrir ses structures.";
    buttonText.innerHTML = '<a href="contents/luxcontent/VisiteLuxIndex.php" class="buttonlink button">Site Web - Porte Ouverte</a>';
    buttonText2.innerHTML = '<a href="#" class="buttonlink button">Visite en 3D du MLG</a>';
    // buttonText.innerText = "Accompagnez nous sur une visite virtuelle";
    //buttonText.style.padding = "39px 20px";

    if (this.style.backgroundColor = "#2386a7") {
        this.style.backgroundColor = "#87c33e"
        languageLu.style.backgroundColor = "#2386a7";
    } else { this.style.backgroundColor = "#2386a7" };

});