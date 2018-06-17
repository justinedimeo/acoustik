<?php
    include 'config.php';

    // Getting all the types
    $query = $pdo->query('SELECT * FROM genres');
    $genres = $query->fetchAll();

    $title = 'Slider';
    include 'head.php';
?>

<body class="overflow">

    <!-- Slider start -->
    <div class="slider">

        <!-- Header -->
        <?php include 'header.php';?>
        <p class="background-genre">Jazz</p>

        <!-- To get the previous card -->
        <div class="previous"></div>

        <!-- Cards -->
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

        <!-- To get the next card -->
        <div class="next"></div>
    </div>

    <!-- Responsive part -->
    <div class="responsive">
        <h2 class="title-responsive">Acoustik</h2>
        <p class="header">World music</p>

        <!-- Cards -->
        <div class="cards-responsive">
            <?php foreach($genres as $_genre): ?>
            <div style="background: <?= $_genre->color ?>" class="card-responsive">

                <!-- Left -->
                <div class="left">
                    <?= $_genre->name ?>
                </div>

                <!-- Right -->
                <div class="right">
                    <h3>Acoustik <?= $_genre->name ?> theme</h3>
                    <p><?= $_genre->text ?></p>
                    <div class="responsive-button">
                        <a style="color: <?= $_genre->color ?>;" href="creation.php?id=<?= $_genre->id ?>">
                        <svg style="width: 55%; margin-left: 0.5rem; margin-bottom: -0.1rem;" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 125 156.2" style="enable-background:new 0 0 125 156.2;" xml:space="preserve">
                        <path fill="<?= $_genre->color ?>" d="M62.5,19.5c-31.8,0-57.7,25.9-57.7,57.7s25.9,57.7,57.7,57.7s57.7-25.9,57.7-57.7
                        C120.2,45.3,94.3,19.5,62.5,19.5z M62.5,126.9c-27.4,0-49.7-22.3-49.7-49.7s22.3-49.7,49.7-49.7s49.7,22.3,49.7,49.7
                        C112.2,104.7,89.9,126.9,62.5,126.9z M93.8,61L55.9,99.1c-0.8,0.7-1.9,1.1-3,1.1c-0.3,0-0.5,0-0.8-0.1c-1.1-0.3-1.9-0.8-2.5-1.6
                        L31.2,80c-1.5-1.6-1.5-4.2,0.1-5.6c1.6-1.5,3.9-1.5,5.5,0L53,90.5l35.2-35.2c1.6-1.5,4.2-1.5,5.6,0.1C95.2,57.1,95.2,59.4,93.8,61z"
                        />
                        </svg>
                        </br>
                         ok
                         </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- Footer -->
            <div class="footer">
                <p>Dear You</p>
                <p class="footer-chose">It's time to chose a theme</p>
            </div>
        </div>
    </div>
    <script src="../scripts/cardSwipe.js"></script>
</body>

</html>