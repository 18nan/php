
<?php

class DbConnect
{
    public function connection()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try
        {
            $conn = mysqli_connect("localhost", "root", "", "college_db");

            echo "Success";

            mysqli_close($conn);
        }
        catch (mysqli_sql_exception $e)
        {
            echo "Try Again<br>";
            echo "Error: " . mysqli_connect_error();
        }
    }
}

$obj = new DbConnect();
call_user_func(array($obj, "connection"));

?>
