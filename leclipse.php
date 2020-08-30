<?php $command="sudo DISPLAY=:0 /usr/local/bin/eclipse  2>&1";
$version =exec($command);
echo $version;
 ?> 
