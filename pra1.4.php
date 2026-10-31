<!DOCTYPE html>
<html>
    <body>
        <h1>Simple Calculator</h1>
        <form method="Post">
            Enter value 1:<input type="number" name="num1" id="num1"><br>
             Enter value 2:<input type="number" name="num2" id="num2"><br>
             Operations: <select name="operations" id="operations">
                    <option value ="addition">Add</option>
                      <option value ="subtraction">Sub</option>
                         <option value ="multiplication">Mult</option>
                         <option value= "divison"> Div</option> 
</select>
               <input type="submit" name="submit">
</form>
</body>
</html>

<?php 
if(isset($_POST['operations']))
    {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $result=$_POST['operations'];
switch($result){
 case "addition": 
    $result = $num1 + $num2;
    echo "Addition : $result";
    break;
 case "subtraction": 
    $result = $num1 - $num2;
    echo "Subtraction: $result";
    break;
case "multiplication": 
    $result = $num1*$num2;
    echo "Multiplication: $result";
    break;
case "division": 
    if ($num2 != 0) {
        $result = $num1/$num2;
        echo " divison: $result";
    } else {
        echo "cannot divide by zero";
    }
    break;
    defult:
    echo "invalide operation";
}
    }
    ?>
    




