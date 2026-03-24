
<?php
    // logout page
    session_start();
    include '../admin/connect.php';

    $intern_id = $_SESSION['intern_id'];

    date_default_timezone_set("Asia/Kolkata");

    $date = date("Y-m-d");
    $time = date("h:i:s A");

    $sql = "UPDATE `attendance` SET out_time='$time'
    WHERE intern_id = '$intern_id' AND date='$date'";

    mysqli_query($conn, $sql);

    session_unset();
    session_destroy();

    header("Location:../intern_admin.php");

?>