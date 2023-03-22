// import './bootstrap';
// Popup Create New Post
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

// Popup Post Options
function showChitOptions(id) {
    var chitOptions = document.getElementById("chitOptions_" + id);
    console.log(id);
    if (chitOptions.style.display === "none") {
        chitOptions.style.display = "block";
    } else {
        chitOptions.style.display = "none";
    }
}

// Popup Profile Options
function showProfileMenu() {
    var popupMenu = document.getElementById("profileMenu");
    if (popupMenu.style.display === "none") {
        popupMenu.style.display = "block";
    } else {
        popupMenu.style.display = "none";
    }
}