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
    console.log(id);
    if (chitOptions.style.display === "none") {
        chitOptions.style.display = "block";
    } else {
        chitOptions.style.display = "none";
    }
}

function addNewLike(id) {
    var chitLikes = document.getElementById("chitLikes_" + id);
    console.log(id);

    // var csrfToken = document
    //     .querySelector('meta[name="csrf-token"]')
    //     .getAttribute("content");

    // fetch("likes/add", {
    //     method: "POST",
    //     headers: {
    //         "Content-Type": "application/json",
    //         "X-CSRF-Token": csrfToken,
    //     },
    //     body: JSON.stringify({ post_id: id }),
    // })
    //     .then((response) => response.json())
    //     .then((data) => {
    //         // Update the number of likes displayed on the webpage
    //         var chitLikes = document.getElementById("chitLikes_" + id);
    //         var likeCount = chitLikes.querySelector(".like-count");
    //         likeCount.innerText = data.likes_count;
    //     })
    //     .catch((error) => console.error(error));
}

function addNewRepost(id) {
    var chitReposts = document.getElementById("chitReposts_" + id);
    console.log(id + " TODO");
}

function addNewComment(id) {
    var chitComments = document.getElementById("chitComments_" + id);
    console.log(id + " TODO");
}
