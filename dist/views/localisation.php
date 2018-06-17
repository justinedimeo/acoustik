<?php

// Select the good type (change the colourf of the stamp according to it)
$query = $pdo->query('SELECT * FROM genres  WHERE id = '.$_GET['id']);
$genre = $query->fetch();

$genre_ = $genre->name;

// Calling geoloc
include("../scripts/geoloc/geoipcity.inc");
include("../scripts/geoloc/geoipregionvars.php");

$gi = geoip_open(realpath("../scripts/geoloc/GeoLiteCity.dat"),GEOIP_STANDARD);

// Getting user'IP adress
$record = geoip_record_by_addr($gi, $_SERVER['REMOTE_ADDR']);

geoip_close($gi);

?>

<!-- Stamp image-->
<img style="user-select : none; width:29%;" class="stamp hidden" src="../assets/images/stamps/<?=$record->country_code?>_<?=$genre->name;?>.png" alt="stamp"/>