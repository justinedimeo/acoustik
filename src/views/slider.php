<?php
    include 'config.php';

    $query = $pdo->query('SELECT * FROM genres');
    $genres = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="../styles/reset.css" rel="stylesheet">
    <link href="../styles/main.css" rel="stylesheet">
    <title>Slider</title>
</head>

<body>
    <div class="slider">
        <?php include 'header.php';?>
        <p class="background-genre">Jazz</p>
        <div class="cards">
        <?php foreach($genres as $_genre): ?>
            <div class="card-genre <?= $_genre->name ?>">
                <!-- Colored part of the card -->
                <div class="card" style="background: linear-gradient(to top, <?= $_genre->background ?>) fixed">
                    <h3 class="logo">Acoustik</h3>
                    <h3 class="title-card">Acoustik <?= $_genre->name ?> Theme</h3>
                    <p class="description-card"><?= $_genre->text ?></p>
                    <!-- Genre -->
                    <p class="genre"><?= $_genre->name ?></p>
                    <!-- Instrument -->
                    <div class="instrument-card">
                        <img src="<?= $_genre->image ?>" alt="saxophone">
                    </div>
                </div>
                <!-- White part of the card -->
                <div class="card-create">
                    <p style="border-image: linear-gradient(to right, <?= $_genre->background ?>) 10; color: <?= $_genre->color ?>">Create</p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <script src="../scripts/cardSwipe.js"></script>
</body>

</html>