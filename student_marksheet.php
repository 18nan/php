<!DOCTYPE html>
<html>
<head>
    <title>Student Marksheet</title>
</head>
<body>

<?php
$name = $sub1 = $sub2 = $sub3 = "";
$totalObtained = $percentage = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"]) || empty($_POST["sub1"])
         || empty($_POST["sub2"]) || empty($_POST["sub3"])) {
        $error = "All fields are required.";
    } else {
        $name = $_POST["name"];
        $sub1 = $_POST["sub1"];
        $sub2 = $_POST["sub2"];
        $sub3 = $_POST["sub3"];

        if (is_numeric($sub1) && is_numeric($sub2) && is_numeric($sub3)) {
            $totalObtained = $sub1 + $sub2 + $sub3;
            $totalMarks = 300;
            $percentage = ($totalObtained / $totalMarks) * 100;
        } else {
            $error = "Marks must be numeric values.";
        }
    }
}
?>

<h2>Enter Student Details</h2>
<form method="post" action="">
    Name of Student *: <input type="text" name="name" value="<?php 
    echo $name; ?>"><br><br>
    Subject 1 Marks *: <input type="text" name="sub1" value="<?php 
    echo $sub1; ?>"><br><br>
    Subject 2 Marks *: <input type="text" name="sub2" value="<?php
     echo $sub2; ?>"><br><br>
    Subject 3 Marks *: <input type="text" name="sub3" value="<?php
     echo $sub3; ?>"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($error) {
    echo "<p style='color:red;'>$error</p>";
}

if ($totalObtained !== "" && !$error) {
    echo "<h3>Marksheet</h3>";
    echo "Name of Student: $name<br>";
    echo "Subject 1 Marks: $sub1<br>";
    echo "Subject 2 Marks: $sub2<br>";
    echo "Subject 3 Marks: $sub3<br>";
    echo "Total Marks Obtained: $totalObtained<br>";
    echo "Total Marks: 300<br>";
    echo "Percentage: " . number_format($percentage, 2) . "%<br>";
}
?>

</body>
</html>