<?php
for ($i = 1; $i <= 4; $i++) {
    $num = $i;
    for ($j = 1; $j <= 3; $j++) {
        echo $num . " ";
        $num += 4;
    }
    echo "<br>";
}
?>