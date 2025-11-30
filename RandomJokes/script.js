// Meme images — make sure the files EXIST
const memes = [
    "memes/meme1.jpg",
    "memes/meme2.jpg",
    "memes/meme3.jpg"
];

// Function to change background
function setRandomMeme() {
    let random = memes[Math.floor(Math.random() * memes.length)];
    document.getElementById("memeContainer").style.backgroundImage = `url('${random}')`;
}

// Set meme on first load
setRandomMeme();

// Button event
document.getElementById("getJokeBtn").addEventListener("click", function () {

    // Change meme again
    setRandomMeme();

    fetch("getJoke.php")
        .then(res => res.json())
        .then(data => {

            jokeSetup.style.opacity = 0;
            jokePunchline.style.opacity = 0;

            setTimeout(() => {
                jokeSetup.textContent = data.setup;
                jokePunchline.textContent = data.punchline;

                jokeSetup.style.opacity = 1;
                jokePunchline.style.opacity = 1;
            }, 300);
        });
});
