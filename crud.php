<?php
$conn = mysqli_connect("localhost", "root", "", "college_db");
if (!$conn) {
    die("Connection failed");
}
$edit_id = "";
$edit_name = "";
$edit_age = "";
$edit_email = "";
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $sql = "INSERT INTO students(name, age, email)
            VALUES('$name', '$age', '$email')";
    mysqli_query($conn, $sql);
}
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $edit_id = $row['id'];
        $edit_name = $row['name'];
        $edit_age = $row['age'];
        $edit_email = $row['email'];
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $sql = "UPDATE students SET name='$name', age='$age', email='$email'
            WHERE id='$id'";
    mysqli_query($conn, $sql);
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM students WHERE id='$id'";
    mysqli_query($conn, $sql);
}
?>
<style>
body {
    font-family: Arial;
    background: #f2f2f2;
}
table {
    border-collapse: collapse;
    width: 80%;
}
th, td {
    border: 1px solid black;
    padding: 5px;
}
.update {
    background: blue;
    color: white;
}
.delete {
    background: red;
    color: white;
}
</style>
<h2>Student Details</h2>

<form method="post">
ID:
<input type="text" name="id" value="<?php echo $edit_id; ?>">
<br><br>
Name:
<input type="text" name="name" value="<?php echo $edit_name; ?>">
<br><br>
Age:
<input type="text" name="age" value="<?php echo $edit_age; ?>">
<br><br>
Email:
<input type="text" name="email" value="<?php echo $edit_email; ?>">
<br><br>
<?php
if ($edit_id == "") {
    echo "<input type='submit' name='insert' value='Insert'>";
} else {
    echo "<input type='submit' name='update' value='Update'>";
}
?>
</form>
<h2>Student Records</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Email</th>
<th>Action</th>
</tr>
<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "<input type='submit' name='edit' value='Update' class='update'>";
    echo "</form>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "<input type='submit' name='delete' value='Delete' class='delete'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}
mysqli_close($conn);
?>
</table>