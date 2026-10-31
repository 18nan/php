<?php
// Initialize variables
$name = $roll = $email = $course = $mobile = "";
$nameErr = $rollErr = $emailErr = $courseErr = $mobileErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name Validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // Roll Number Validation
    if (empty($_POST["roll"])) {
        $rollErr = "Roll Number is required";
    } else {
        $roll = test_input($_POST["roll"]);
        if (!preg_match("/^[0-9]{4,10}$/", $roll)) {
            $rollErr = "Enter 4-10 digits only";
        }
    }

    // Email Validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid Email";
        }
    }

    // Course Validation
    if (empty($_POST["course"])) {
        $courseErr = "Select Course";
    } else {
        $course = test_input($_POST["course"]);
    }

    // Mobile Validation
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile Number is required";
    } else {
        $mobile = test_input($_POST["mobile"]);
        if (!preg_match("/^[6-9][0-9]{9}$/", $mobile)) {
            $mobileErr = "Enter valid 10-digit Mobile Number";
        }
    }
}

// Function
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>College Library Student Form</title>
    
</head>

<body>

<h2>College Library Student Details Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<table>

<tr>
    <td>Name</td>
    <td>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
    </td>
</tr>

<tr>
    <td>Roll Number</td>
    <td>
        <input type="text" name="roll" value="<?php echo $roll; ?>">
        <span class="error"><?php echo $rollErr; ?></span>
    </td>
</tr>

<tr>
    <td>Email</td>
    <td>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
    </td>
</tr>

<tr>
    <td>Course</td>
    <td>
        <select name="course">
            <option value="">Select</option>
            <option value="IT" <?php if($course=="IT") echo "selected"; ?>>IT</option>
            <option value="CP" <?php if($course=="CP") echo "selected"; ?>>CP</option>
            <option value="EE" <?php if($course=="EE") echo "selected"; ?>>EE</option>
            <option value="ME" <?php if($course=="ME") echo "selected"; ?>>ME</option>
        </select>
        <span class="error"><?php echo $courseErr; ?></span>
    </td>
</tr>

<tr>
    <td>Mobile Number</td>
    <td>
        <input type="text" name="mobile" value="<?php echo $mobile; ?>">
        <span class="error"><?php echo $mobileErr; ?></span>
    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Submit">
    </td>
</tr>

</table>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    empty($nameErr) &&
    empty($rollErr) &&
    empty($emailErr) &&
    empty($courseErr) &&
    empty($mobileErr))
{
    echo "<h3>Student Details Submitted Successfully</h3>";

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Roll Number</td><td>$roll</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Course</td><td>$course</td></tr>";
    echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
    echo "</table>";
}
?>

</body>
</html>

