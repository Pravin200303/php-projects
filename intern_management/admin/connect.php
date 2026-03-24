
<?php

// required components for database
$host = 'localhost';
$user = 'root';
$pwd = '';
$dbname = 'intern_management';

// Here connection establish
$conn = mysqli_connect($host, $user, $pwd, $dbname);

// If not connected then generate the error
if(!$conn)
{
    die("connection failed.".mysqli_error($conn));
}

?>
