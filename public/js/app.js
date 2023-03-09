// import './bootstrap';
function showPopupMenu() {
    console.log('Button clicked');
    var popupMenu = document.getElementById("popupMenu");
    if (popupMenu.style.display === "none") {
        popupMenu.style.display = "block";
    } else {
        popupMenu.style.display = "none";
    }
}