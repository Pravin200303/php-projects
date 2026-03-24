
<?php   
include 'connect.php'; 
session_start();

if(isset($_SESSION['admin_email']))
{
    header("Location:../role.php");
    exit();
}

if(isset($_POST['admin_login']))
{
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if(empty($email) || empty($pwd))
    {
        $error = "Fields are empty";
    }
    else
    {
        $sql = "SELECT * FROM `login` WHERE email = '$email' && password = '$pwd'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            // $row = mysqli_fetch_assoc($result);
            
            $_SESSION['admin_email'] = $email;
            // $_SESSION['admin_pwd'] = $row['pwd'];

            header("Location:role.php");
            exit();
        }
        else
        {
            $error = "Invalid Credentials";
        }
    }
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
            <form action="#" method="post" class="mt-5 border p-3 rounded-3 w-75 mx-auto shadow">
                <h1 class="text-center text-primary fw-bold">* Admin Login</h1>
                <?php
                if(isset($error))
                {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                    <?php
                }

                ?>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="fw-semibold text-uppercase">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="mno" class="fw-semibold text-uppercase">Password</label>
                        <input type="password" name="pwd" class="form-control" placeholder="Enter the Password">
                    </div>

                    <!-- Add button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold" name="admin_login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>