<!DOCTYPE html>
<html>
<head>
    <title>Conditionals and Functions</title>
</head>
<body>

<form method="post">
    Enter a Number:
    <input type="text" name="num">
    <input type="submit" name="submit" value="Check">
</form>

<?php

function checkNumber($num)
{
    if ($num == 0)
    {
        return "0 is neither Odd nor Even.";
    }
    else if($num % 2 == 0)
    {
        return "Even Number";
    }
    else
    {
        return "Odd Number";
    }
}

if(isset($_POST["submit"]))
{
    $num = $_POST["num"];

    echo "<br>Number: " . $num;
    echo "<br>Result: " . checkNumber($num);
}

?>

</body>
</html>