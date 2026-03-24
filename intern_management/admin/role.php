
<?php
session_start();
if(!$_SESSION['admin_email'])
{
    header("Location:admin_login.php");
    exit();
}

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
        <div class="col-lg-12">
            <div class="row">
                <!-- Left side -->
                <?php include 'sidebar.php' ?>

        <!-- Right Side -->
        <div class="col-lg-9">
            <h1 class="mt-3 text-center shadow p-3">Dashboard</h1>
            <!-- First Row -->
            <div class="row">

                <div class="col-lg-4 mt-3">
                    <div class="card p-5 bg-warning shadow">
                        <div class="card-body text-center text-white">
                            <h5 class="text-uppercase">Interns</h5>
                            <h2>
                            <?php
                            include 'connect.php';
                            $sql="SELECT COUNT(id) AS total FROM add_intern";
                            $result=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_assoc($result);
                            echo $row['total'];
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-3">
                    <div class="card p-5 bg-info shadow">
                        <div class="card-body text-center text-white">
                            <h5 class="text-uppercase">Total Tasks</h5>
                            <h2>
                            <?php
                            $sql="SELECT COUNT(id) AS total FROM task";
                            $result=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_assoc($result);
                            echo $row['total'];
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-3">
                    <div class="card p-5 bg-primary shadow">
                        <div class="card-body text-center text-white">
                            <h5 class="text-uppercase">Attendance</h5>
                            <h2>
                            <?php
                                $sql = "SELECT COUNT(DISTINCT intern_id) AS total
                                FROM attendance WHERE date = CURDATE()";
                                // $sql="SELECT COUNT(id) AS total FROM attendance";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($result);
                                echo $row['total'];
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Second Row -->
            <div class="row">
                <!-- Pending Tasks -->
                <div class="col-lg-4 mt-3">
                    <div class="card p-5 bg-secondary text-white">
                        <div class="card-body text-center">
                            <h5>Pending Tasks</h5>
                            <h2>
                            <?php
                                $sql="SELECT COUNT(id) AS total FROM `task`
                                WHERE status = 'Pending'";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($result);
                                echo $row['total'];
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Completed tasks -->
                <div class="col-lg-4 mt-3">
                    <div class="card p-5 bg-success text-white">
                        <div class="card-body text-center">
                            <h5>Completed Tasks</h5>
                            <h2>
                            <?php
                                $sql="SELECT COUNT(id) AS total FROM `task`
                                WHERE status = 'Completed'";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($result);
                                echo $row['total'];
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- In Process -->
                <div class="col-lg-4 mt-3">
                    <div class="card p-5 bg-dark text-white">
                        <div class="card-body text-center">
                            <h5>In Process Tasks</h5>
                            <h2>
                            <?php
                                $sql = "SELECT COUNT(id) as Total FROM `task` WHERE 
                                status = 'In Process'";
                                $result = mysqli_query($conn, $sql);
                                while($rows = mysqli_fetch_assoc($result))
                                {
                                    echo $rows['Total'];
                                }
                            ?>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</div>
</div>

<?php include '../footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

