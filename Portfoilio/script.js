// script.js
document.addEventListener("DOMContentLoaded", function() {
    const audio = document.getElementById("backgroundMusic");
    const startMusicButton = document.getElementById("startMusicButton");

    startMusicButton.addEventListener("click", function() {
        audio.play();
        startMusicButton.style.display = "none"; // Hide the button after starting the music
    });
});
