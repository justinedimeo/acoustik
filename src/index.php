<?php
    include 'views/config.php';
    
    // Get rock musics created
    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "rock" ');
    $rock = $query->fetchAll();

    // Get pop musics created
    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "pop"');
    $pop = $query->fetchAll();

    // Get jazz musics created
    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "jazz"');
    $jazz = $query->fetchAll();

    // Get rap musics created
    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "rap"');
    $rap = $query->fetchAll();

    // Get random element of each array
    $track_rock = $rock[mt_rand(0, 1)];
    $track_pop = $pop[mt_rand(0, 1)];
    $track_jazz = $jazz[mt_rand(0, 1)];
    $track_rap = $rap[mt_rand(0, 1)];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
        <link href="styles/reset.css" rel="stylesheet">
        <link href="styles/main.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicons/site.webmanifest">
        <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>Acoustik</title>
    </head>

    <body>
        <div class="index">
            <header style="padding-top:5vh;">
                <h1>
                    <a href="#">Acoustik</a>
                </h1>
                <!-- Search a song -->
                <form action="views/player.php" method="get">
                    <input type="search" name="id" placeholder="Type a music id">
                    <button type="submit">Search</button>
                </form>
            </header>
            <h2>Listen to music created all around the world. Or create one and become a rock star 🤘 !</h2>

            <!-- Random music bubbles -->
            <div class="music-types">
                <a class="rock" href="views/player.php?id=<?= $track_rock->id ?>">
                    <p>Random Rock music</p>
                </a>
                <a class="pop" href="views/player.php?id=<?= $track_pop->id ?>">
                    <p>Random Pop music</p>
                </a>
                <a class="rap" href="views/player.php?id=<?= $track_rap->id ?>">
                    <p>Random Rap music</p>
                </a>
                <a class="jazz" href="views/player.php?id=<?= $track_jazz->id ?>">
                    <p>Random Jazz music</p>
                </a>
            </div>

            <!-- Create music button -->
            <div class="button">
                <a class="create-button" href="views/slider.php">Create Music</a>
            </div>
        </div>
    </body>

    </html>