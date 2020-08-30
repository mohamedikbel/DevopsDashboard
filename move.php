<?php $command="sudo cp -R /root/eclipse-workspace/. /home/ikbel/Desktop/DATA 2>&1";
 $command1="sudo chmod -R 777 /home/ikbel/Desktop/DATA 2>&1";

$version =exec($command);
$v =exec($command1);

echo $version;
 ?> 
