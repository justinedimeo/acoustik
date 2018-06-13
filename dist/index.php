<?php
    include 'views/config.php';
    
    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "rock" ');
    $rock = $query->fetchAll();

    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "pop"');
    $pop = $query->fetchAll();

    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "jazz"');
    $jazz = $query->fetchAll();

    $query = $pdo->query('SELECT * FROM new_sounds  WHERE genre = "rap"');
    $rap = $query->fetchAll();

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
        <title>Coucou</title>
    </head>

    <body>
        <div class="index">
            <header style="padding-top:5vh;">
                <h1>
                    <a href="#">Acoustik</a>
                </h1>
                <!-- Search a song -->
                <form action="views/player.php" method="get">
                    <input type="search" name="id" placeholder="Search a music">
                    <button type="submit">Search</button>
                </form>
            </header>
            <h2>Listen to music created all around the world. Or create one and become a rock star 🤘 !</h2>
            <div class="music-types">
                <a class="rock" href="views/player.php?id=<?= $track_rock->id ?>">
                    <p>Rock</p>
                </a>
                <a class="pop" href="views/player.php?id=<?= $track_pop->id ?>">
                    <p>Pop</p>
                </a>
                <a class="rap" href="views/player.php?id=<?= $track_rap->id ?>">
                    <p>Rap</p>
                </a>
                <a class="jazz" href="views/player.php?id=<?= $track_jazz->id ?>">
                    <p>Jazz</p>
                </a>
            </div>
            <div class="button">
                <a class="create-button" href="views/slider.php">Create Music</a>
            </div>
        </div>
    </body>

    </html>