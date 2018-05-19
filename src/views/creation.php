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
                    <div class="box box-visible">A</div>
                    <div class="box box-visible">Z</div>
                    <div class="box box-visible">E</div>
                    <div class="box box-invisible">Q</div>
                    <div class="box box-invisible">W</div>
                    <div class="box box-invisible">E</div>
                </div>
            </div>
            <div class="instrument">
                <span>Saxo</span>
                <div class="boxes">
                    <div class="box box-visible">Q</div>
                    <div class="box box-visible">S</div>
                    <div class="box box-visible">D</div>
                    <div class="box box-invisible">A</div>
                    <div class="box box-invisible">S</div>
                    <div class="box box-invisible">D</div>
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
                    <div class="box box-visible">I</div>
                    <div class="box box-visible">O</div>
                    <div class="box box-visible">P</div>
                    <div class="box box-invisible">I</div>
                    <div class="box box-invisible">O</div>
                    <div class="box box-invisible">P</div>
                </div>
            </div>
            <div class="instrument">
                <span>Guitar</span>
                <div class="boxes">
                    <div class="box box-visible">K</div>
                    <div class="box box-visible">L</div>
                    <div class="box box-visible">M</div>
                    <div class="box box-invisible">K</div>
                    <div class="box box-invisible">L</div>
                    <div class="box box-invisible">,</div>
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
    <script src="../scripts/creationPage.js"></script>
</body>
</html>