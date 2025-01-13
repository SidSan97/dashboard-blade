function openCommentsList(value) {
    let commentsContainer = document.getElementById('comments-container');

    if(value === true) {
        commentsContainer.style.display = "block";
    } else {
        commentsContainer.style.display = "none";
    }
}

function openVideoCampaingsList(value) {
    let campaignsContainer = document.getElementById('video-campaigns-container');

    if(value === true) {
        campaignsContainer.style.display = "block";
    } else {
        campaignsContainer.style.display = "none";
    }
}
