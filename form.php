<!DOCTYPE html>
<html>
    <title>Registration Form</title>
    <body>
        <form method="post" >
            Name:<input type="text" name="name" required><br><br>
            Password:<input type="password" name="password" required><br><br>
            Email:<input type="email" name="email" required><br><br>
            Pincode:<input type="text" name="pincode" required><br><br>
            Mobile No.:<input type="text" name="mobile" required><br><br>
            <input type="submit" name="submit" value="Register"><br>
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $pincode = $_POST['pincode'];
    $mobile = $_POST['mobile'];

    if (empty($name)) { 
    echo "Name is required <br>"; 
   }  
            else  
            { 
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) { 
     echo "Only letters and white space allowed <br>"; 
    } 
   }


    echo "<h3 align='center'>Registration Details</h3>";

    echo "<table border='1' cellpadding='5' align='center'>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>$name</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>$password</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Pincode</td>
                <td>$pincode</td>
            </tr>
            <tr>
                <td>Mobile No</td>
                <td>$mobile</td>
            </tr>
          </table>";
}
?>
</body>
</html>
