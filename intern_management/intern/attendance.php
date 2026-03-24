
<!-- PHP code -->
<?php

session_start();
include '../admin/connect.php';
$intern_id = $_SESSION['intern_id'];
$date = date("Y-m-d");

$sql = "SELECT * FROM `attendance` WHERE
        intern_id='$intern_id' AND date='$date'";
$result = mysqli_query($conn, $sql);

?>

<?php
// session_start();
include '../admin/connect.php';

if(!isset($_SESSION['intern_id']))
{
    header("Location: interns_login.php");
    exit();
}

$intern_id = $_SESSION['intern_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Test</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
</head>
<body>

<div class="container-fluid">

    <div class="row">
        
        <!-- sidebar -->
        <?php include 'intern_sidebar.php'; ?>

        <div class="col-lg-10 col-md-10 mb-5">

            <h1 class="mt-5 text-center shadow p-2 text-primary">Attendance Section</h1>
                <hr class="mb-5">

            <div class="text-center mb-4 g-3">
                <span class="bg-success text-white p-2 rounded-3 fw-bold" name="intime">Present</span>
                <span class="bg-warning text-white p-2 rounded-3 fw-bold" name="halfday">Half Day</span>
                <span class="bg-danger text-white p-2 rounded-3 fw-bold" name="outtime">Absent</span>
            </div>

            <table class="table table-bordered text-center">
                <tr>
                    <th>Date</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>Status</th>
                </tr>
                
                <?php
                    $sql = "SELECT * FROM `attendance`
                    WHERE intern_id = '$intern_id' ORDER BY date DESC";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                            <tr>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['in_time']; ?></td>
                                <td><?php echo $row['out_time']; ?></td>
                                <td>
                                <?php
                                    if($row['out_time'] != NULL && $row['in_time'] != NULL)
                                    {
                                        echo "<span class='badge bg-success'>Present</span>";
                                    }
                                    else if($row['in_time'] != NULL && $row['out_time'] == NULL)
                                    {
                                        echo "<span class='badge bg-warning'>Half Day</span>";
                                    }
                                    else
                                    {
                                        echo "<span class='badge bg-danger'>Absent</span>";
                                    }
                                ?>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        <!-- Footer Section -->
    </div>
</div>

<?php include '../footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

