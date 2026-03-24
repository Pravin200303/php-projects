<?php
include '../admin/connect.php';

// if id exists then execute the query
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    // Delete Query
    $sql = "DELETE FROM `task` WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    // If condition true then delete the record
    if($result)
    {
        echo "<script>alert('Record Deleted Successfully');
        window.location.href='intern_tasks.php';
        </script>";
    }
    // Otherwise generate the error
    else
    {
        echo "<script>alert('Something went wrong');</script>";
    }
}

?>