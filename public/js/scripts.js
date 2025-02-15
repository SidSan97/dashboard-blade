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

document.getElementById("showBonusAfterScene").addEventListener("change", function() {
    let selectScene = document.getElementById('select-scene');
    
    if (this.checked) {
        selectScene.style.display = "block";
    } else {
        selectScene.style.display = "none";
    }
});

document.getElementById("cv-check-font").addEventListener("change", function() {
    let cvSelectFont = document.getElementById('cv-select-font');
    
    if (this.checked) {
        cvSelectFont.style.display = "block";
    } else {
        cvSelectFont.style.display = "none";
    }
});
