<?php

include("../scripts/geoloc/geoipcity.inc");
include("../scripts/geoloc/geoipregionvars.php");

$gi = geoip_open(realpath("../scripts/geoloc/GeoLiteCity.dat"),GEOIP_STANDARD);

$record = geoip_record_by_addr($gi,"121.72.165.118");
// $_SERVER['REMOTE_ADDR'] à la place de l'adresse IP

echo $record->country_name . "\n";
echo $GEOIP_REGION_NAME[$record->country_code][$record->region] . "\n";
echo $record->city . "\n";
echo $record->postal_code . "\n";
echo $record->latitude . "\n";
echo $record->longitude . "\n";

geoip_close($gi);

?>
