// import './bootstrap';
function showPopupMenu() {
    var popupMenu = document.getElementById("popupMenu");
    if (popupMenu.style.display === "none") {
        popupMenu.style.display = "block";
        document.documentElement.style.overflow = "hidden";
        document.body.scroll = "no";
    } else {
        popupMenu.style.display = "none";
        document.documentElement.style.overflow = "scroll";
        document.body.scroll = "yes";
    }
}
function closePopupMenu() {
    showPopupMenu();
}

function showChitOptions(id) {
    var chitOptions = document.getElementById("chitOptions_" + id);
    if (chitOptions.style.display === "none") {
        chitOptions.style.display = "block";
    } else {
        chitOptions.style.display = "none";
    }
}