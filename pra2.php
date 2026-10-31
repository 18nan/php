<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Username: <input type="text" name="name"> <br>
            Gender: <input type="radio" name="gender" value="male"> MALE
                    <input type="radio" name="gender" value="female"> FEMALE <br>
            Country: <select name="country" id="country">
                    <option value ="India">India</option>
                      <option value ="USA">USA</option>
                         <option value ="UK">UK</option>
</select><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
    {
        $username=$_POST['name'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];
    echo "Username: $username <br>";
    echo "Gender : $gender <br>";
    echo "Country : $country <br>";
    }
    ?>
    </body>
    </html>