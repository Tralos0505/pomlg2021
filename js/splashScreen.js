alert("Test");

// create variables to work with


var languageLu = document.getElementById("languageSelectionLu");
var languageFr = document.getElementById("languageSelectionFr");
var welcomeText = document.getElementById("welcomeText");
var buttonText = document.getElementById("buttonText");


buttonText.style.padding = "20px";
languageLu.style.backgroundColor = "#2386a7"

// add event Listeners


languageLu.addEventListener("click", function() {

    welcomeText.innerText = "Wellkomm um Site vun der virtueller Porte Ouverte vum Maacher Lycee 2020.<br> Mir invitéiren dech fir eisen Lycee mat all sengen Strukturen kennenzeléeiren.";

    buttonText.innerHTML = '<a href="../luxcontent/VisiteLuxIndex.php" class="buttonlink button">Komm mat eis op eng virtuell Visit vum MLG</a>';
    // buttonText.style.padding = "39px 20px";

    if (this.style.backgroundColor = "#87c33e") {
        this.style.backgroundColor = "#2386a7"
        languageFr.style.backgroundColor = "#87c33e";
        languageAll.style.backgroundColor = "#87c33e";
    } else { this.style.backgroundColor = "#87c33e" };


});



languageFr.addEventListener("click", function() {

    welcomeText.innerText = "Bienvenue sur le site  de la Porte Ouverte Virtuelle du Maacher Lycee en 2020.<br> Nous vous invitons de faire connaissance avec note Lycée et de découvrir ses structures.";
    buttonText.innerHTML = '<a href="../under-construction/underConstruction.html" class="buttonlink">Accompagnez nous pour une visite virtuelle du MLG</a>';
    // buttonText.innerText = "Accompagnez nous sur une visite virtuelle";
    //buttonText.style.padding = "39px 20px";

    if (this.style.backgroundColor = "#87c33e") {
        this.style.backgroundColor = "#2386a7"
        languageLu.style.backgroundColor = "#87c33e";
        languageAll.style.backgroundColor = "#87c33e ";
    } else { this.style.backgroundColor = "#87c33e " };

});