

<!-- PHP code -->
<?php
error_reporting(0);
ini_set("display_errors",0);

session_start();
// using session variable if already logged in -> redirect it
if(isset($_SESSION['intern_email']))
{
    header("Location:interns.php");
    exit();
}

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['intern_login']))
{
    include ('../admin/connect.php');
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // $_SESSION['intern_email'] = $_POST['email'];

    if(empty($email) || empty($pwd))
    {
        $error = "Fields are Empty";
    }
    else
    {
        $sql = "SELECT * FROM `add_intern` WHERE
        email='$email' && password='$pwd'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            // set session variable
            $_SESSION['intern_email'] = $row['email'];
            $_SESSION['intern_id'] = $row['id'];

            // Attendance Logic
            $intern_id = $row['id'];

            date_default_timezone_set("Asia/Kolkata"); //set Indian time

            $date = date("Y-m-d");
            $time = date("h:i:s A");

            $check = "SELECT * FROM `attendance` WHERE
            intern_id='$intern_id' AND date='$date'";
            $res = mysqli_query($conn, $check);
            if(mysqli_num_rows($res) == 0)
            {
                $insert = "INSERT INTO `attendance`(intern_id, in_time, date, status)
                VALUES('$intern_id', '$time', '$date','Present')";
                
                mysqli_query($conn, $insert);
            }

            echo "<script>alert('Login Successfully');
            window.location.href = 'interns.php';
            </script>";
        }
        else
        {
            $error = "Invalid Credentials";
        }
    }

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"/>

</head>
<body>

<div>
    <div class="container">
        <div class="row">
            <div class="">
                <form action="#" method="post" class="mt-5 border p-3 rounded-3 w-75 mx-auto shadow">
                    <h1 class="fw-bold text-primary text-center">* Interns Login</h1>
                    <?php if(isset($error))
                    {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <?php echo $error; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php
                    }
                    ?>
                <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="fw-semibold text-uppercase">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter the Email">
                    </div>

                    <!-- password -->
                    <div class="mb-3">
                        <label for="pwd" class="fw-semibold text-uppercase">Password:</label>
                        <input type="text" name="pwd" class="form-control" placeholder="Enter the Password">
                    </div>

                    <!-- Add button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold" name="intern_login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

