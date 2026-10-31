<?php

$file = fopen("sample.txt", "w");

if ($file) {
    echo "File opened successfully.";

    fclose($file);

    echo "<br>File closed successfully.";
} else {
    echo "Unable to open file.";
}

?>