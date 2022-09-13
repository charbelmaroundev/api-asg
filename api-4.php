<?php

// date_default_timezone_set('Lebanon/Beirut');

$christmasDay = strtotime('December 25');

$time = $_GET["time"];

$days = ceil(($christmasDay - $time)/60/60/24);

echo "There are " . $days . " days until Christmas";

?>