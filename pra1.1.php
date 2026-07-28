<!DOCTYPE html>
<html>
<head>
    <title>POST Method Example</title>
</head>
<body>

<h2>Request Form Data Using POST Method</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Age:
    <input type="number" name="age" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "<h3>Submitted Data</h3>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age;
}
?>

</body>
</html>