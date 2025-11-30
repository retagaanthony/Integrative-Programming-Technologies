document.getElementById("getJokeBtn").addEventListener("click", function() {
    fetch("getJoke.php")
        .then(response => response.json())
        .then(data => {
            document.getElementById("jokeSetup").textContent = data.setup;
            document.getElementById("jokePunchline").textContent = data.punchline;
        })
        .catch(err => {
            document.getElementById("jokeSetup").textContent = "Error loading joke.";
        });
});
