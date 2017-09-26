<?php
date_default_timezone_set("Asia/Kolkata");
$h = getdate()[hours];
$m = (getdate()[minutes]);
$s = (getdate()[seconds]);
$d = (getdate()[mday]);
$mon = (getdate()[mon]);
$year = (getdate()[year]);

$file = fopen("newtime.json", "w");
//fwrite($file, "{\"h\": $h , \"m\": $m, \"s\": $s, \"d\": $d, \"mon\": $mon, \"y\": $year}");
fwrite($file, "{\"h\": 23 , \"m\": 57, \"s\": $s, \"d\": $d, \"mon\": $mon, \"y\": $year}");
fclose($file);
?>