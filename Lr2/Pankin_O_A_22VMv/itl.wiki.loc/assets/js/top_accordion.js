var acc = document.getElementsByClassName("accordion_top");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}