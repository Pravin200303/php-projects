<!-- PHP code -->
<?php
$month = $_POST['date'] ?? date('Y-m');

$startDate = $month . "-01";
$endDate = date("Y-m-t", strtotime($startDate));
?>
<!-- HTML code -->
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
        <?php include 'sidebar.php'; ?>

        <div class="col-lg-10">
            <!-- Hamburger Button -->
            <a href="#">
                <i class="bi bi-list text-dark mt-2"></i>
            </a>

            <form action="#" method="post">
                <div class="mt-5 mb-5 form-group d-flex gap-3">
                    <input type="month" name="date" placeholder="select the date" class="ms-2 p-2 border-none">
                        <select name="interns" id="interns" class="form-control w-25">
                            <option value="">- Select Option -</option>
                            <option value="Pravin Singh">Pravin Singh</option>
                            <option value="Mayur Gurav">Mayur Gurav</option>
                            <option value="Onkar Koli">Onkar Koli</option>
                            <option value="Sakshi Banne">Sakshi Banne</option>
                            <option value="Parth More">Parth More</option>
                        </select>
                    <button type="submit" name="search" class="ms-2 btn btn-primary p-2 fw-bold">Search</button>
                </div>
            </form>

            <table class="ms-2 mb-5 table table-striped table-hover bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <!-- <th>Operations</th> -->
                </tr>

                <!-- PHP Code -->
                <?php
                include 'connect.php';
                    if(isset($_POST['search']))
                    {
                        $date = $_POST['date'];
                        $intern = $_POST['interns'];

                        $year = date("Y", strtotime($date));
                        $mon = date("m", strtotime($date));

                        $sql = "SELECT a.date, a.status FROM attendance a INNER JOIN `add_intern` ai ON a.intern_id = ai.id
                        WHERE ai.name = '$intern' AND a.date BETWEEN '$startDate' AND '$endDate'";

                        $result = mysqli_query($conn, $sql);
                        $attendanceData = [];
                            while($rows = mysqli_fetch_assoc($result))
                            {
                                $attendanceData[$rows['date']] = $rows['status'];
                            }
                                $current = strtotime($startDate);
                                $end = strtotime($endDate);
                                $i = 1;
                            
                            while($current <= $end)
                            {
                                $currentDate = date("Y-m-d",$current);
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $intern ?></td>
                                        <td><?= $currentDate ?></td>
                                        <td>
                                            <?php
                                                if(isset($attendanceData[$currentDate]))
                                                {
                                                    echo $attendanceData[$currentDate];
                                                }
                                                else
                                                {
                                                    echo "<span class='text-danger'>Absent</span>";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                    $current = strtotime("+1 day", $current);
                                    $i++;
                            }
                    }
                ?>
                
            </table>

        </div>
    </div>
</div>


<?php include '../footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

