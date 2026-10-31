<?php

function changeValue(&$num)
{
    $num = $num + 10;
    echo "<br>Value inside function = " . $num;
}

if(isset($_POST["submit"]))
{
    $number = $_POST["number"];

    echo "Before function call = " . $number;

    changeValue($number);

    echo "<br>After function call = " . $number;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Passing by Reference</title>
</head>
<body>

<h2>Passing by Reference</h2>

<form method="post">
    Enter a Number:
    <input type="text" name="number">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>