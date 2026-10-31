<!DOCTYPE html>
<html>
    <body>
        <h1>Swapping Values</h1>
        <form method="Post">
            Enter value 1:<input type="number" name="num1"><br><br>
               Enter value 2:<input type="number" name="num2"><br>
               <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
    {
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        $temp;
        echo "Before swapping $a and $b <br>";
        $temp=$a;
        $a=$b;
        $b=$temp;
        echo "After swapping $a and $b";
    }
    ?>