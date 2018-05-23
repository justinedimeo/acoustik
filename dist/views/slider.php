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

<body class="overflow">
    <div class="slider">
        <?php include 'header.php';?>
        <p class="background-genre">Jazz</p>
        <div class="previous"></div>
        <div class="cards">
        <?php foreach($genres as $_genre): ?>
            <div class="card-genre <?= $_genre->name ?>">
                <!-- Colored part of the card -->
                <div class="card" style="background: <?= $_genre->color ?>">
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
                <div class="card-create" style="box-shadow: 0px 0px 16px 0px <?= $_genre->color ?> ">
                    <a href="creation.php?id=<?= $_genre->id ?>" style="border-image: linear-gradient(to right, <?= $_genre->background ?>) 10; color: <?= $_genre->color ?>">Create</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="next"></div>
    </div>
    <div class="responsive">
        <h2>Acoustik</h2>
        <p class="header">World music</p>
        <div class="cards-responsive">
            <?php foreach($genres as $_genre): ?>
            <div style="background: <?= $_genre->color ?>" class="card-responsive">
                <div class="left">
                    <?= $_genre->name ?>
                </div>
                <div class="right">
                    <h3>Acoustik <?= $_genre->name ?> theme</h3>
                    <p><?= $_genre->text ?></p>
                    <div class="responsive-button">
                    <a href="creation.php?id=<?= $_genre->id ?>">ok</a>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="../scripts/cardSwipe.js"></script>
</body>

</html>