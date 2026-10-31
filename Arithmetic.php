<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations </title>
</head>
<body>

<h2>Arithmetic Operations </h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
        <option value="%">Modulus (%)</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch($operation)
    {
        case '+':
            echo "<h3>Result = " . ($num1 + $num2) . "</h3>";
            break;

        case '-':
            echo "<h3>Result = " . ($num1 - $num2) . "</h3>";
            break;

        case '*':
            echo "<h3>Result = " . ($num1 * $num2) . "</h3>";
            break;

        case '/':
            if($num2 != 0)
                echo "<h3>Result = " . ($num1 / $num2) . "</h3>";
            else
                echo "<h3>Division by zero is not allowed.</h3>";
            break;

        case '%':
            if($num2 != 0)
                echo "<h3>Result = " . ($num1 % $num2) . "</h3>";
            else
                echo "<h3>Modulus by zero is not allowed.</h3>";
            break;

        default:
            echo "<h3>Invalid Operation!</h3>";
    }
}
?>

</body>
</html>