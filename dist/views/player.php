<?php
    include 'config.php';

    // Getting sounds from sounds table
    $query = $pdo->query('SELECT * FROM sounds');
    $sounds = $query->fetchAll();
    
    // Getting new sound from new_sounds table
    $query = $pdo->query('SELECT * FROM new_sounds');
    $new_sounds = $query->fetchAll();

    $id = $_GET['id'] - 1;

    $sound_ = $new_sounds[$id]->sound;
    $genre_ = $new_sounds[$id]->genre;
    $sound_order = $new_sounds[$id]->sound_order;
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
        <link href="../styles/reset.css" rel="stylesheet">
        <link href="../styles/main.css" rel="stylesheet">
        <title>Player</title>
    </head>

    <body>

        <div class="player">
            <?php include 'header.php' ?>
            <div class="disc">
                <div class="center-disk"></div>
            </div>
            <p class="music-id">
                <?= $id + 1 ?>
            </p>
            <p class="music-genre">
                <?= $genre_ ?>
            </p>
        </div>

        <!-- Sounds -->
        <?php foreach ($sounds as $sound): ?>
        <audio class="<?= $sound->id; ?>" src="<?= $sound->rock; ?>"></audio>
        <?php endforeach; ?>
        <script>
            const $sounds = Array.from(document.querySelectorAll('audio'));

            // Creating playSound function
            const playSound = (soundName) => {
                const $sound = $sounds.find((element) => element.classList.contains(soundName));
                $sound.currentTime = 0;
                $sound.play();
            };

            // Getting the sounds composing the new_sound
            let new_sound = <?= json_encode($sound_); ?>;
            let new_sound_order = <?= json_encode($sound_order); ?>;
            console.log(new_sound);
            console.log(new_sound_order);

            // Pushing all the sounds id on an array without the ,
            array_sound = [];
            var2 = "";
            for (let i = 0; i <= new_sound.length; i++) {
                if (i !== (new_sound.length) && new_sound[i] !== ",") {
                    var2 = var2 + new_sound[i];
                } else {
                    array_sound.push(var2);
                    var2 = "";
                };
            };

            // Pushing all the sounds_order id on an array without the ,
            array_sound_order = [];
            var1 = "";
            for (let l = 0; l <= new_sound_order.length; l++) {
                if (l == (new_sound_order.length)) {
                    array_sound_order.push(var1);
                } else if (new_sound_order[l] == ",") {
                    array_sound_order.push(var1);
                    var1 = "";
                } else {
                    var1 = var1 + new_sound_order[l];
                };
            };
            // 
            // Playing sounds with playSound function
            let k = 20;;
            let counter2 = setInterval(updateTime, 100);

            function updateTime() {
                if (k > 0) {
                    for (let j = 0; j <= array_sound.length; j++) {
                        if (k == array_sound_order[j]) {
                            playSound(array_sound[j]);
                            console.log(array_sound[j]);
                            console.log(array_sound_order[j]);
                        };
                    };
                    k = (k * 10 - 0.1 * 10) / 10;
                    result = k.toFixed(1);
                };
            };
        </script>
        <!-- <script src="../scripts/player.js"></script> -->
    </body>

    </html>