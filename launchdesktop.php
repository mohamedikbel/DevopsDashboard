<?php 


$command= "./test.sh";
$version = exec($command);

var_dump ($version);

?> 
