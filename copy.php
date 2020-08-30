<?php $command="sudo cp /tmp/bacula-restores/home/ikbel/Pictures/* /home/ikbel/Pictures  2>&1";
$version =exec($command);
echo $version;
 ?> 
