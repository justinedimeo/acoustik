<?php
    include 'config.php';

    $query = $pdo->query('SELECT * FROM genres  WHERE id = '.$_GET['id']);
    $genre = $query->fetch();

    $genre_ = $genre->name;
    $gradient = $genre->background;
    $color = $genre->color;
    $instrument1 = $genre->instrument1;
    $instrument2 = $genre->instrument2;
    $instrument3 = $genre->instrument3;
    $instrument4 = $genre->instrument4;

    $query = $pdo->query('SELECT * FROM sounds');
    $sounds = $query->fetchAll();
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
    <title>Coucou</title>
</head>

<body>
    <div id="creation" style="background: linear-gradient(to bottom right, <?= $gradient; ?>) fixed">
    <?php include 'header.php';?>
        <div class="centered">
            <!-- Title -->
            <h1 class="creation-page">Create music !</h1>
            <h2>Click on REC to record your song</h2>
            <!-- Drumkit -->
            <div class="container">
            <div class="container-left left">
                <!-- Remplacer par une boucle for quand on aura fait les bdd -->
                <div class="instrument">
                    <span><?= $instrument1; ?></span>
                    <div class="boxes">
                        <div class="box box-visible key-65" data-sound="1" style="color: <?= $color; ?>">A</div>
                        <div class="box box-visible key-90" data-sound="2" style="color: <?= $color; ?>">Z</div>
                        <div class="box box-visible key-69" data-sound="3" style="color: <?= $color; ?>">E</div>
                        <div class="box box-invisible key-65" data-sound="1" style="color: <?= $color; ?>">Q</div>
                        <div class="box box-invisible key-90" data-sound="2" style="color: <?= $color; ?>">W</div>
                        <div class="box box-invisible key-69" data-sound="3" style="color: <?= $color; ?>">E</div>
                    </div>
                </div>
                <div class="instrument">
                    <span><?= $instrument2; ?></span>
                    <div class="boxes">
                        <div class="box box-visible key-81" data-sound="4" style="color: <?= $color; ?>">Q</div>
                        <div class="box box-visible key-83" data-sound="5" style="color: <?= $color; ?>">S</div>
                        <div class="box box-visible key-68" data-sound="6" style="color: <?= $color; ?>">D</div>
                        <div class="box box-invisible key-81" data-sound="4" style="color: <?= $color; ?>">A</div>
                        <div class="box box-invisible key-83" data-sound="5" style="color: <?= $color; ?>">S</div>
                        <div class="box box-invisible key-68" data-sound="6" style="color: <?= $color; ?>">D</div>
                    </div>
                </div>
            </div>
            <div class="rec-container">
                <button class="rec-button">
                    <div class="rec-middle"></div>
                </button>
                <span class="rec-text">Rec</span>
            </div>
            <div class="container-left">
                <!-- Remplacer par une boucle for quand on aura fait les bdd -->
                <div class="instrument">
                    <span><?= $instrument3; ?></span>
                    <div class="boxes">
                        <div class="box box-visible key-73" data-sound="7" style="color: <?= $color; ?>">I</div>
                        <div class="box box-visible key-79" data-sound="8" style="color: <?= $color; ?>">O</div>
                        <div class="box box-visible key-80" data-sound="9" style="color: <?= $color; ?>">P</div>
                        <div class="box box-invisible key-73" data-sound="7" style="color: <?= $color; ?>">I</div>
                        <div class="box box-invisible key-79" data-sound="8" style="color: <?= $color; ?>">O</div>
                        <div class="box box-invisible key-80" data-sound="9" style="color: <?= $color; ?>">P</div>
                    </div>
                </div>
                <div class="instrument">
                    <span><?= $instrument4; ?></span>
                    <div class="boxes">
                        <div class="box box-visible key-75" data-sound="10" style="color: <?= $color; ?>">K</div>
                        <div class="box box-visible key-76" data-sound="11" style="color: <?= $color; ?>">L</div>
                        <div class="box box-visible key-77" data-sound="12" style="color: <?= $color; ?>">M</div>
                        <div class="box box-invisible key-75" data-sound="10" style="color: <?= $color; ?>">K</div>
                        <div class="box box-invisible key-76" data-sound="11" style="color: <?= $color; ?>">L</div>
                        <div class="box box-invisible key-77" data-sound="12" style="color: <?= $color; ?>">,</div>
                    </div>
                </div>
            </div>
            </div>
            <div class="language">
                <span class="language-azerty">Azerty</span>
                <div class="language-button">
                    <div class="language-circle left"></div>
                </div>
                <span class="language-qwerty">Qwerty</span>
            </div>
        </div>
    </div>

    
    <!-- Sounds -->
    <?php foreach($sounds as $sound): ?>
        <audio class="<?= $sound->id; ?>" src="<?= $sound->$genre_; ?>"></audio>
    <?php endforeach; ?>

    <script src="../scripts/creationPage.js"></script>
</body>
</html>