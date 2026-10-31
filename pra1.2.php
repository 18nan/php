<!DOCTYPE html>
<html>
<head>
    <title>Display Value in Another Form</title>
</head>
<body>

<h2>Form 1</h2>

<?php
if (!isset($_POST['next']))
{
?>
<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    <input type="submit" name="next" value="Next">
</form>

<?php
}
else
{
    $name = $_POST['name'];
?>

<h2>Form 2</h2>

<form>
    Name:
    <input type="text" value="<?php echo $name; ?>" readonly><br><br>
</form>

<?php
}
?>

</body>
</html>