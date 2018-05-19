<?php
    include 'config.php';

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
    <div id="creation">
    <?php include 'header.php';?>
        <!-- Title -->
        <h1 class="creation-page">Create music !</h1>
        <h2>Click on REC to record your song</h2>
        <!-- Drumkit -->
        <div class="container">
        <div class="container-left left">
            <!-- Remplacer par une boucle for quand on aura fait les bdd -->
            <div class="instrument">
                <span>Piano</span>
                <div class="boxes">
                    <div class="box box-visible key-65" data-sound="1">A</div>
                    <div class="box box-visible key-90" data-sound="2">Z</div>
                    <div class="box box-visible key-69" data-sound="3">E</div>
                    <div class="box box-invisible key-65" data-sound="1">Q</div>
                    <div class="box box-invisible key-90" data-sound="2">W</div>
                    <div class="box box-invisible key-69" data-sound="3">E</div>
                </div>
            </div>
            <div class="instrument">
                <span>Saxo</span>
                <div class="boxes">
                    <div class="box box-visible key-81" data-sound="4">Q</div>
                    <div class="box box-visible key-83" data-sound="5">S</div>
                    <div class="box box-visible key-68" data-sound="6">D</div>
                    <div class="box box-invisible key-81" data-sound="4">A</div>
                    <div class="box box-invisible key-83" data-sound="5">S</div>
                    <div class="box box-invisible key-68" data-sound="6">D</div>
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
                <span>Drums</span>
                <div class="boxes">
                    <div class="box box-visible key-73" data-sound="7">I</div>
                    <div class="box box-visible key-79" data-sound="8">O</div>
                    <div class="box box-visible key-80" data-sound="9">P</div>
                    <div class="box box-invisible key-73" data-sound="7">I</div>
                    <div class="box box-invisible key-79" data-sound="8">O</div>
                    <div class="box box-invisible key-80" data-sound="9">P</div>
                </div>
            </div>
            <div class="instrument">
                <span>Guitar</span>
                <div class="boxes">
                    <div class="box box-visible key-75" data-sound="10">K</div>
                    <div class="box box-visible key-76" data-sound="11">L</div>
                    <div class="box box-visible key-77" data-sound="12">M</div>
                    <div class="box box-invisible key-75" data-sound="10">K</div>
                    <div class="box box-invisible key-76" data-sound="11">L</div>
                    <div class="box box-invisible key-77" data-sound="12">,</div>
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

    
    <!-- Sounds -->
    <?php foreach($sounds as $sound): ?>
        <audio class="<?= $sound->id; ?>" src="<?= $sound->jazz; ?>"></audio>
    <?php endforeach; ?>

    <script src="../scripts/creationPage.js"></script>
</body>
</html>