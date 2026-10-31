<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
        }
        table{
            background:white;
            padding:20px;
            margin:auto;
            margin-top:30px;
            border-collapse:collapse;
        }
        td{
            padding:8px;
        }
        h2{
            text-align:center;
        }
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php
$name = $password = $email = $pincode = $mobile = "";
$nameErr = $passErr = $emailErr = $pinErr = $mobileErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    // Name
    if(empty($_POST["name"]))
        $nameErr="Name is required";
    else{
        $name=$_POST["name"];
        if(!preg_match("/^[a-zA-Z ]+$/",$name))
            $nameErr="Only letters allowed";
    }

    // Password
    if(empty($_POST["password"]))
        $passErr="Password is required";
    else
        $password=$_POST["password"];

    // Email
    if(empty($_POST["email"]))
        $emailErr="Email is required";
    else{
        $email=$_POST["email"];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            $emailErr="Invalid Email";
    }

    // PIN Code
    if(empty($_POST["pincode"]))
        $pinErr="PIN Code is required";
    else{
        $pincode=$_POST["pincode"];
        if(!preg_match("/^[0-9]{6}$/",$pincode))
            $pinErr="Enter 6 digit PIN";
    }

    // Mobile
    if(empty($_POST["mobile"]))
        $mobileErr="Mobile Number is required";
    else{
        $mobile=$_POST["mobile"];
        if(!preg_match("/^[0-9]{10}$/",$mobile))
            $mobileErr="Enter 10 digit Mobile Number";
    }
 // Display Data
    if($nameErr=="" && $passErr=="" && $emailErr=="" && $pinErr=="" && $mobileErr=="")
    {
        echo "<h2>Submitted Data</h2>";
        echo "<table border='1' align='center' cellpadding='8'>
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Name</td><td>$name</td></tr>
        <tr><td>Password</td><td>$password</td></tr>
        <tr><td>Email</td><td>$email</td></tr>
        <tr><td>PIN Code</td><td>$pincode</td></tr>
        <tr><td>Mobile</td><td>$mobile</td></tr>
        </table><br><hr>";
    }

}
?>



<h2>Registration Form</h2>

<form method="post">
<table border="1">
<tr>
<td>Name</td>
<td>
<input type="text" name="name" value="<?php echo $name; ?>">
<span class="error"><?php echo $nameErr; ?></span>
</td>
</tr>

<tr>
<td>Password</td>
<td>
<input type="password" name="password">
<span class="error"><?php echo $passErr; ?></span>
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
<td>PIN Code</td>
<td>
<input type="text" name="pincode" value="<?php echo $pincode; ?>">
<span class="error"><?php echo $pinErr; ?></span>
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
<input type="submit" value="Register">
<input type="reset" value="Reset">
</td>
</tr>

</table>
</form>

</body>
</html>