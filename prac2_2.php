<html> 
<head> 
 <title>College Library Student Details</title> 
</head> 
<body> 
 <h1>College Library Student Details</h1> 
 <form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); 
?>">     
  <label for="name">Name:</label> 
  <input type="text" name="name"> 
  <br><br> 
   
        <label for="rollno">Roll No:</label> 
  <input type="text" name="rollno"> 
  <br><br> 
   
        <label for="department">Department:</label> 
  <input type="text" name="department"> 
  <br><br> 
   
        <label for="email">Email:</label> 
  <input type="email" name="email"> 
  <br><br> 
   
        <label for="phone">Phone:</label> 
  <input type="number" name="phone"> 
  <br><br> 
   
        <input type="submit" value="Submit" name="submit"> 
 </form> 
 
 <?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $valid = true;

    if (empty($name)) {
        echo "Name is required <br>";
        $valid = false;
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Only letters and white space allowed in Name <br>";
            $valid = false;
        }
    }

    if (empty($rollno)) {
        echo "Roll No is required <br>";
        $valid = false;
    }

    if (empty($department)) {
        echo "Department is required <br>";
        $valid = false;
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $department)) {
            echo "Only letters and white space allowed in Department <br>";
            $valid = false;
        }
    }

    if (empty($email)) {
        echo "Email is required <br>";
        $valid = false;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format <br>";
            $valid = false;
        }
    }

    if (empty($phone)) {
        echo "Phone is required <br>";
        $valid = false;
    } else {
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            echo "Invalid phone number <br>";
            $valid = false;
        }
    }

    // Display Data
    if ($valid) {
        echo "<h2>Student Details</h2>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Name</td><td>$name</td></tr>";
        echo "<tr><td>Roll No</td><td>$rollno</td></tr>";
        echo "<tr><td>Department</td><td>$department</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Phone</td><td>$phone</td></tr>";
        echo "</table>";
    }
}

?>
     
    </body> 
    </html>