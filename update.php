<?php
$switch = $_GET['switch'];
$timer = $_GET['time'];
$schd = $_GET['schd'];
$onh = $_GET['onh'];
$onm = $_GET['onm'];
$offh = $_GET['ffh'];
$offm = $_GET['ffm'];

if ($switch=="on")
{
$file = fopen("switch.json", "w");
fwrite($file, "{\"switch\": \"on\", \"timer\": $timer, \"schd\": \"$schd\", \"onh\": $onh, \"onm\": $onm, \"offh\": $offh, \"offm\": $offm}");
fclose($file);
}
else
{
$file = fopen("switch.json", "w");
fwrite($file, "{\"switch\": \"off\", \"timer\": $timer, \"schd\": $schd, \"onh\": $onh, \"onm\": $onm, \"offh\": $offh, \"offm\": $offm}");
fclose($file);
}
date_default_timezone_set("Asia/Kolkata"); //Set to local timezone
$t=time();
$file = fopen("lastd.json", "w");
fwrite($file, "{\"lastupdated\": $t}");
fclose($file);
echo "1";
?>
