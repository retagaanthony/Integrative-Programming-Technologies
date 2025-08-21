<?php
$team = [
    [
        "name" => "Anthony Retaga",
        "role" => "The Member",
        "bio"  => "Retaga, Rom Anthony is studying at the Pamantasan ng Lungsod ng Muntinlupa (PLMUN), taking the course Bachelor of Science in Information Technology (BSIT).",
        "photo" => "photos/1.jpg"
    ],
	
];
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Team</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 1em;
            opacity: 0.6;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
        }
        h3 {
            font-size: 2em;
            color: red;
        }
        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 2em;
        }
        .team-member {
            background-color: #fff;
            border-radius: 8px;
            margin: 1em;
            padding: 1.5em;
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .team-member:hover {
            transform: scale(1.05);
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .team-member h3 {
            margin: 1em 0 0.5em;
            color: #333;
        }
        .team-member p {
            color: #555;
            font-size: 1em;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 0.01em;
            position: absolute;
            width: 100%;
            bottom: 0;
            opacity: 0.6;
        }
    </style>
</head>
<body background="photos/dota2.jpg">

    <header>
        <h1>Meet Our Team</h1>
        <p>Introducing our talented team member!</p>
    </header>

    <div class="team-container">
        <?php foreach ($team as $member): ?>
            <div class="team-member">
                <img src="<?= $member['photo']; ?>" alt="Team Member">
                <h3><?= $member['name']; ?></h3>
                <p><?= $member['role']; ?></p>
                <p><?= $member['bio']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <p> <?= date("Y"); ?> Our Team | All Rights Reserved</p>
    </footer>

</body>
</html>
