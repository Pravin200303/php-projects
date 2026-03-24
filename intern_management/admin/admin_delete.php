
<?php
include 'connect.php';

// Performing Delete record
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    // Here is Delete Query
    $sql = "DELETE FROM `add_intern` WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "<script>
        alert('Record Deleted Successfully');
        window.location.href='viewinterns.php';
        </script>";
    }
}


?>
