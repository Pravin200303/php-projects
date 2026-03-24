
<?php
session_start();
if(!isset($_SESSION['intern_email']))
{
    header("Location:interns_login.php");
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
<!-- style="background-color:#EAEFFF" -->
<div class="container-fluid">
    <div class="row">
        
        <?php include 'intern_sidebar.php'; ?>

        <?php
            include '../admin/connect.php';
            $email = $_SESSION['intern_email'];
            $sql = "SELECT * FROM add_intern WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);
        ?>

        <!-- middle side -->
        <div class="col-lg-8 mb-3">
            <!-- top section -->
            <h1 class="mt-5 text-center text-uppercase shadow text-primary">intern section</h1>
            <hr>
            <br>

            <!-- middle section -->
            <div class="card w-50 mx-auto shadow">
                <div class="card-body">
                    <div class="card-title text-primary fs-3 fw-bold mb-3">
                        Details:
                    </div>

                    <!-- for ID -->
                    <div class="border p-2">
                        <h5>ID:</h5><?php echo $data['id']; ?>
                    </div>

                    <!-- for Name -->
                    <div class="border p-2">
                        <h5>Name:</h5><?php echo $data['name']; ?>
                    </div>

                    <!-- for Email -->
                    <div class="border p-2">
                        <h5>Email:</h5><?php echo $data['email']; ?>
                    </div>

                    <!-- for Mobile no. -->
                    <div class="border p-2">
                        <h5>Mobile No:</h5><?php echo $data['mobile']; ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- right side -->
        <div class="col-lg-2 vh-100 d-flex flex-column align-items-center pt-4" style="background-color:#EAEFFF">

        <!-- Profile Circle -->
            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center bg-gradient shadow"
            style="width:120px; height:120px; font-size:40px;">
            <?php
                if(!empty($data['name']))
                {
                    echo strtoupper(substr($data['name'],0,1));
                }
                else
                {
                    echo "U";
                }
            ?>
            </div>
            <a href="logout.php" class="mt-3 text-uppercase text-decoration-none text-black fw-bold">log out</a>
        </div>
    </div>
</div>


<!-- Footer Section -->
<?php include '../footer.php'; ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

