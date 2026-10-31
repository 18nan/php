<!DOCTYPE html>
<html>
<head>
    <title>Number Pyramid</title>
</head>
<body>

<h2>Number Pyramid Using Nested Loops</h2>

<form method="post">
    Enter no. of rows:
    <input type="number" name="rows" required>
    <input type="submit" name="submit" value="Generate">
</form>

<?php
if(isset($_POST['submit']))
{
    $rows = $_POST['rows'];

    echo "<pre>";
    for($i = 1; $i <= $rows; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            echo $j . " ";
        }
        echo "\n";
    }
    echo "</pre>";
}
?>

</body>
</html>