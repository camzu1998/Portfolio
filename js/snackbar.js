function snackbar(){
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4500);
}
function openSnackbar() {
    $("#tekst").text("Wiadomość została wysłana!");
    snackbar();
}
