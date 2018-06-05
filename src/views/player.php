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
    $sound_order = $new_sounds[$id]->sound_order;

    // echo '<pre>';
    // print_r($sound_);
    // echo '</pre>';
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
    <!-- Sounds -->
    <?php foreach ($sounds as $sound): ?>
        <audio class="<?= $sound->id; ?>" src="<?= $sound->jazz; ?>"></audio>
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
        for (let i = 0; i < new_sound.length; i++) {
            if (new_sound[i] != ",") {
                array_sound.push(new_sound[i]);
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
            }
        };
        console.log(array_sound_order);


        // Playing sounds with playSound function
        let k = 20;
        for (let j = 0; j < array_sound.length; j++) {
                let counter2 = setInterval(updateTime, 100);
                function updateTime() {
                    if (k > 0) {
                        k = (k * 10 - 0.1 * 10) / 10;
                        result = k.toFixed(1);
                        if (k == array_sound_order[j]) {
                        // playSound(array_sound[j]);
                        console.log(array_sound[j]);
                        console.log(array_sound_order[j]);
                        };
                    };
                    // console.log(k);
                };
            };
        // for (let j = 0; j < array_sound.length; j++) {
        //     playSound(array_sound[j]);
        // };
    </script>
    <!-- <script src="../scripts/player.js"></script> -->
</body>
</html>