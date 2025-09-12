<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "anthonyretaga" && $password === "1234") {
        header("Location: index.php?name=" . urlencode($username));
        exit;
    } else {
        echo "Invalid login! <a href='login.html'>Try again</a>";
    }
}
?>
