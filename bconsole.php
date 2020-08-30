<?php $command="sudo DISPLAY=:0 gnome-terminal -x bash -c 'bconsole;' " ;
$version =shell_exec($command);
echo $version;
 ?> 
