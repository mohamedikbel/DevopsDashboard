
<?php putenv('PATH=' . getenv('PATH') . ':/usr/local/bin');
$command="sudo -E DISPLAY=:0 gedit /opt/tomcat/conf/tomcat-users.xml  2>&1";
$out = array();
$version =exec($command,$out);
foreach($out as $line) {
    echo $line;
}
 ?>
