<?php
$counts=('Files/hitcounter.txt');
$hits=file($counts);
$hits[0]++;
$fp= fopen($counts,"w");
fputs($fp, $hits[0]);
fclose($fp);
echo $hits[0];
?>
