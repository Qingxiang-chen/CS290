<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = $_POST["name"];

fwrite($myfile, $txt);

$txt = "<br>";

fwrite($myfile, $txt);

$txt = $_POST["Age"];

fwrite($myfile, $txt);

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");

echo fread($myfile,filesize("newfile.txt"));

fclose($myfile);

?>
