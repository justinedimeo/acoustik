<?php
    include 'config.php';

    $query = $pdo->query('SELECT * FROM genres  WHERE id = '.$_GET['id']);
    $genre = $query->fetch();

    $genre_ = $genre->name;
    $gradient = $genre->background;

    $query = $pdo->query('SELECT * FROM sounds');
    $sounds = $query->fetchAll();

    $newSound = $_POST['result-sound'];
    $orderSound = $_POST['order-sound'];

    $query = $pdo->query('SELECT * FROM new_sounds');
    $new_sounds = $query->fetchAll();

    $title = 'Custom';
    include 'head.php';
?>

    <body>
        <div class="custom" style="padding-top: 2.5vh; background: linear-gradient(to top left, <?= $gradient; ?>) fixed">
            <?php include 'header.php' ?>
            <h3>Well Done !</h3>
            <p>Chose a stamp of your location and let the world know you rock ✌️</p>
            <p>Don't forget to note your song ID if you want to listen to it again</p>
            <div class="disc">
                <div class="center-disk"></div>
            </div>
            <div class="button-custom">
                <a href="../index.php">Send</a>
            </div>
            <div class="cover">
                <p class="click-me">Click on me</p>
                <?php include 'localisation.php';
                      include 'newSound.php'; ?>
                <p class="song-number">
                    <?php $lastEl = end($new_sounds); ?>
                    <?= $lastEl->id+1 ?>
                </p>
            </div>
        </div>
        <script src="../scripts/stamp.js"></script>
    </body>

    </html>