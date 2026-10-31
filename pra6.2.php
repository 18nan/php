<?php

$file = fopen("student.txt", "w");

fwrite($file, "Name: Nandika\n");
fwrite($file, "Course: B.Tech IT\n");
fwrite($file, "College: BVM\n");

fclose($file);

echo "Data written successfully.<br>";

$file = fopen("student.txt", "r");

$data = fread($file, filesize("student.txt"));

echo "Data read from file:<br>";
echo $data;

fclose($file);

?>