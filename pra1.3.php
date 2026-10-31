<!DOCTYPE html>
<html>
    <body>
        <h1>Factorial of number</h1>
        <form method="post" >
            <table>
                <tr>
                    <td>Enter number</td><br>
                    <td><input type="number" name="num"></td><br>
</tr>
<td><input type="submit" name="submit"></td>
</table>
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
    {
        $n=$_POST['num'];
        $fact=1;

        for($i=$n;$i>=1;$i--)
            {
                $fact=$fact*$i;
            }
echo "The number of factorial: $fact";
            }
            ?>