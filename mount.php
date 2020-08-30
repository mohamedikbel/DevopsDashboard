<?php $command="sudo DISPLAY=:0 mount -t nfs 172.16.1.101:/mnt/DEVC-NAS/DATA  /home/ikbel/Desktop/DATA 2>&1";
$version =exec($command);
echo $version;

 ?> 
