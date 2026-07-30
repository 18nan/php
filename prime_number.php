<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Program</title>
</head>
<body>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>

<?php
if(isset($_POST['num']))
{
    $num = $_POST['num'];
    $count = 0;

    for($i = 1; $i <= $num; $i++)
    {
        if($num % $i == 0)
        {
            $count++;
        }
    }

    if($count == 2)
    {
        echo "<h3>$num is a Prime Number</h3>";
    }
    else
    {
        echo "<h3>$num is Not a Prime Number</h3>";
    }
}
?>

</body>
</html>