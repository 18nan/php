<?php

if (isset($_POST["action"])) {

    if ($_POST["action"] == "username") {

        $username = $_POST["username"];

        $users = array("admin", "nandika", "smruthi", "shakshi");

        if (in_array(strtolower($username), $users)) {
            echo "Username is not available";
        } else {
            echo "Username is available";
        }

        exit;
    }

    if ($_POST["action"] == "validate") {

        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];

        $errors = "";

        if ($username == "") {
            $errors .= "Username is required.<br>";
        } elseif (!preg_match("/^[a-zA-Z]+$/", $username)) {
            $errors .= "Username must contain only non-numeric characters.<br>";
        }

        if ($password == "") {
            $errors .= "Password is required.<br>";
        }

        if ($confirm_password == "") {
            $errors .= "Confirm password is required.<br>";
        } elseif ($password != $confirm_password) {
            $errors .= "Passwords do not match.<br>";
        }

        if ($email == "") {
            $errors .= "Email is required.<br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= "Enter a valid email address.<br>";
        }

        if ($mobile == "") {
            $errors .= "Mobile number is required.<br>";
        } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $errors .= "Mobile number must contain exactly 10 digits.<br>";
        }

        if ($errors == "") {
            echo "Form submitted successfully.";
        } else {
            echo $errors;
        }

        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AJAX Registration Form</title>
</head>

<body>

<h2>Registration Form</h2>

<form id="registerForm">

    Username:
    <input type="text" id="username">
    <span id="usernameMsg"></span>
    <br><br>

    Password:
    <input type="password" id="password">
    <br><br>

    Confirm Password:
    <input type="password" id="confirm_password">
    <br><br>

    Email:
    <input type="text" id="email">
    <br><br>

    Mobile Number:
    <input type="text" id="mobile">
    <br><br>

    <input type="submit" value="Register">

</form>

<p id="result"></p>

<script>

document.getElementById("username").onkeyup = function() {

    var username = this.value;

    if (username == "") {
        document.getElementById("usernameMsg").innerHTML = "";
        return;
    }

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("usernameMsg").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "index.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send(
        "action=username&username=" + encodeURIComponent(username)
    );
};


document.getElementById("registerForm").onsubmit = function(event) {

    event.preventDefault();

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "index.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.send(
        "action=validate" +
        "&username=" + encodeURIComponent(username) +
        "&password=" + encodeURIComponent(password) +
        "&confirm_password=" + encodeURIComponent(confirm_password) +
        "&email=" + encodeURIComponent(email) +
        "&mobile=" + encodeURIComponent(mobile)
    );
};

</script>

</body>
</html>