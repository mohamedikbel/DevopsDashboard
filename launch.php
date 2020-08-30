<?php $command="sudo DISPLAY=:0 /usr/sbin/bat  2>&1";
$version =exec($command);
echo $version;
 ?> 
