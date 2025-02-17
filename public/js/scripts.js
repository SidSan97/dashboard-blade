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

document.getElementById("showBonusAfterScene2").addEventListener("change", function() {
    let selectScene2 = document.getElementById('select-scene2');

    if (this.checked) {
        selectScene2.style.display = "block";
    } else {
        selectScene2.style.display = "none";
    }
});

const colorPicker = document.getElementById('colorPicker');
const colorPreview = document.getElementById('colorPreview');

colorPicker.addEventListener('input', () => {

    const selectedColor = colorPicker.value;
    colorPreview.textContent = selectedColor;
});

document.getElementById("showFrameColor").addEventListener("change", function() {
    let showFrameColor = document.getElementById('show-frame-color');

    if (this.checked) {
        showFrameColor.style.display = "block";
    } else {
        showFrameColor.style.display = "none";
    }
});