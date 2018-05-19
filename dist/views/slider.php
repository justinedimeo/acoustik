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
            <div class="card-genre">
                <!-- Colored part of the card -->
                <div class="card">
                    <h3 class="logo">Acoustik</h3>
                    <h3 class="title-card">Acoustik Jazz Theme</h3>
                    <p class="description-card">Jazz is a musical genre originating in the Southern United States, created in the late XIX century and
                        early XX century in African-American communities.</p>
                    <!-- Genre -->
                    <p class="genre">Jazz</p>
                    <!-- Instrument -->
                    <div class="instrument-card">
                        <img src="../assets/images/saxo_shadow.png" alt="saxophone">
                    </div>
                </div>
                <!-- White part of the card -->
                <div class="card-create">
                    <p>Create</p>
                </div>
            </div>
            <div class="card-genre two">
                <div class="card">
                    <h3 class="logo">Acoustik</h3>
                    <h3 class="title-card">Acoustik Jazz Theme</h3>
                    <p class="description-card">Jazz is a musical genre originating in the Southern United States, created in the late XIX century and
                        early XX century in African-American communities.</p>
                    <!-- Genre -->
                    <p class="genre">Jazz</p>
                    <!-- Instrument -->
                    <div class="instrument-card">
                        <img src="../assets/images/saxo_shadow.png" alt="saxophone">
                    </div>
                </div>
                <!-- White part of the card -->
                <div class="card-create">
                    <p>Create2</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../scripts/cardSwipe.js"></script>
</body>

</html>