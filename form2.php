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