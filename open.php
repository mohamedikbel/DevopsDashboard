<?php $command=" DISPLAY=:0 gnome-terminal  -x bash -c 'xdg-open  /home/ikbel/Desktop/DATA;' 2>&1";
$version =exec($command);
echo $version;

?> 
