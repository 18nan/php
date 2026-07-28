form1.php 
<!DOCTYPE html>
<html>
<head>
    <title>Form 1</title>
</head>
<body>

<form action="form2.php" method="post">
    Name:
    <input type="text" name="name"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    <input type="submit" value="Next">
</form>

</body>
</html> 

form2.php 
<!DOCTYPE html>
<html>
<head>
    <title>Form 2</title>
</head>
<body>

<h2>Received Data</h2>

<form>
    Name:
    <input type="text" value="<?php echo $_POST['name']; ?>" readonly>
    <br><br>

    Email:
    <input type="text" value="<?php echo $_POST['email']; ?>" readonly>
</form>

</body>
</html>
