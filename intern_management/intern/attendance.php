
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
                    $startDate = date("Y-m-01"); // first day of month
                    $endDate = date("Y-m-t");    // last day of month

                    $sql = "SELECT date, in_time, out_time FROM attendance 
                            WHERE intern_id = '$intern_id' ORDER BY date DESC";
                    $result = mysqli_query($conn, $sql);

                    $attendance = [];
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $attendance[$row['date']] = $row;
                    }

                    $current = strtotime($startDate);
                    $end = strtotime($endDate);

                    while($current <= $end)
                    {
                        $date = date("Y-m-d", $current);
                    ?>
                    <tr>
                        <td><?php echo $date; ?></td>

                        <td>
                            <?php echo $attendance[$date]['in_time'] ?? "-"; ?>
                        </td>

                        <td>
                            <?php echo $attendance[$date]['out_time'] ?? "-"; ?>
                        </td>

                        <td>
                            <?php
                            if(isset($attendance[$date]))
                            {
                                $in = $attendance[$date]['in_time'];
                                $out = $attendance[$date]['out_time'];

                                if($in && !$out)
                                {
                                    echo "<span class='badge bg-warning'>Half Day</span>";
                                }
                                else if($in && $out)
                                {
                                    echo "<span class='badge bg-success'>Present</span>";
                                }
                            }
                            else
                            {
                                echo "<span class='badge bg-danger'>Absent</span>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                        $current = strtotime("+1 day", $current);
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

