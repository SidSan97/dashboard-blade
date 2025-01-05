function openCommentsList(value) {
    let commentsContainer = document.getElementById('comments-container');

    if(value === true) {
        commentsContainer.style.display = "block";
    } else {
        commentsContainer.style.display = "none";
    }
}