
<?php
echo "Prime numbers bet 1 and 100 are: <br>";
for($i=2;$i<=100;$i++) {
    $count=0;

    for($j=1; $j<=$i; $j++) {
        if($i % $j ==0) {
            $count++;
        }
    }
    if($count==2){
        echo $i . " ";
    }
}
?>