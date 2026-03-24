
<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbname = 'intern_management';

$conn = mysqli_connect($host, $user, $pwd, $dbname);

if(!$conn)
{
    die("Not connected ".mysqli_error($conn));
}

?>