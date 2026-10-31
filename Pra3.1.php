<!DOCTYPE html>
<html>
    <body>
        <form method="post">
        Enter marks<input type="num" name="marks" required>
        <input type="submit" value="Check Grade">
</form>
<?php
function getGrade($marks)
{
    if($marks>=90)
        return "A+";
        elseif($marks>=80)
            return "A";
         elseif($marks>=70)
            return "B";
         elseif($marks>=60)
            return "C";
         elseif($marks>=50)
            return "D";
        else
            return "Fail"; 
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $marks = $_POST["marks"];
    $grade = getGrade($marks);

    echo "<h3>Result</h3>";
    echo "Marks:".$marks."<br>";
     echo "Grade:".$grade;
}
?>
</body>
</html>