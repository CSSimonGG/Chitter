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

function addNewLike() {
    var postId = $(this).data('post-id');

    // Make an AJAX POST request to the server to insert the new like
    $.post('/posts/' + postId + '/like', function(data) {
        // Update the number of likes on the page
        $('.like-count[data-post-id="' + postId + '"]').text(data.count);
    });
}