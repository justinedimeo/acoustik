<?php

$query = $pdo->query('SELECT * FROM genres  WHERE id = '.$_GET['id']);
$genre = $query->fetch();

$genre_ = $genre->name;

include("../scripts/geoloc/geoipcity.inc");
include("../scripts/geoloc/geoipregionvars.php");

$gi = geoip_open(realpath("../scripts/geoloc/GeoLiteCity.dat"),GEOIP_STANDARD);

$record = geoip_record_by_addr($gi,"92.169.10.227");
// $_SERVER['REMOTE_ADDR'] à la place de l'adresse IP

// echo $record->country_name . "\n";
// echo $GEOIP_REGION_NAME[$record->country_code][$record->region] . "\n";
// echo $record->city . "\n";
// echo $record->postal_code . "\n";
// echo $record->latitude . "\n";
// echo $record->longitude . "\n";

geoip_close($gi);

?>

<img style="user-select : none; width:29%;" class="stamp hidden" src="../assets/images/stamps/<?=$record->country_code?>_<?=$genre->name;?>.png" alt="stamp"/>