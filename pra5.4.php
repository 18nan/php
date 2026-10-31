<?php

session_start();

$message = "";

if (isset($_POST["register"])) {

    
    $username = $_POST["username"];
    $password = $_POST["password"];


    $_SESSION["registered_username"] = $username;
    $_SESSION["registered_password"] = $password;

    $message = "Registration Successful!";
}

if (isset($_POST["login"])) {

    
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    if (
        isset($_SESSION["registered_username"]) &&
        isset($_SESSION["registered_password"]) &&
        $username == $_SESSION["registered_username"] &&
        $password == $_SESSION["registered_password"]
    ) {

        
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;

        
        $_SESSION["page_views"] = 0;

        $message = "Login Successful! Welcome " . $_SESSION["username"];
    } 
    else {
        $message = "Invalid Username or Password!";
    }
}



if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {

    // If page_views exists, increment it
    if (isset($_SESSION["page_views"])) {
        $_SESSION["page_views"]++;
    } 
    else {
    
        $_SESSION["page_views"] = 1;
    }
}


if (isset($_POST["logout"])) {

    
    session_unset();


    session_destroy();

    $message = "Logout Successful! Session Destroyed.";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration, Login and Logout</title>
</head>

<body>

<h1>User Registration, Login and Logout</h1>

<?php

if ($message != "") {
    echo "<h3>$message</h3>";
}
?>


<h2>User Registration</h2>

<form method="post">

    Username:
    <input type="text" name="username" validation>
    <br><br>

    Password:
    <input type="password" name="password" validation>
    <br><br>

    <input type="submit" name="register" value="Register">

</form>


<hr>

<h2>User Login</h2>

<form method="post">

    Username:
    <input type="text" name="username" validation>
    <br><br>

    Password:
    <input type="password" name="password" validation>
    <br><br>

    <input type="submit" name="login" value="Login">

</form>


<hr>

<?php

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {

    echo "<h2>Welcome " . $_SESSION["username"] . "</h2>";

    echo "You are logged in successfully.<br><br>";

    echo "Page Views: " . $_SESSION["page_views"] . "<br><br>";

?>

    
    <form method="post">

        <input type="submit" name="logout" value="Logout">

    </form>

<?php
}
?>

</body>
</html>