/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */

var homeButton = document.getElementById("homeButton");
var hiddenNav = document.getElementById("hiddenNav");

hiddenNav.classList.toggle("hiddenNavClass");




homeButton.addEventListener("mouseenter", function() {
    hiddenNav.classList.toggle("hiddenNavClass");
})

homeButton.addEventListener("mouseout", function() {
    hiddenNav.classList.toggle("hiddenNavClass");
})


function myFunction() {
    var x = document.getElementById("myTopnav2");
    if (x.className === "topnav2") {
        x.className += " responsive";
    } else {
        x.className = "topnav2";
    }
}