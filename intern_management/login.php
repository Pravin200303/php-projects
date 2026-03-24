
<!-- PHP code -->
<?php include 'connect.php';
session_start();

// If already logged in -> go to home page
if(isset($_SESSION['email']))
{
    
}

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check input is empty then will execute
    if(!empty($email) || !empty($password))
    {
        $query = "SELECT * FROM `login` WHERE email = '$email' AND password = '$password'";

        // executing the query
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            
            header("Location: home.php");
            exit();
        }
        else
        {
            $_SESSION['error'] = "invalid email or password";
        }
        
    }
    else
    {
        $_SESSION['error'] = "Fields are empty";      
    }
    
}

mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
<!-- Login form -->
<div>
    <div class="container w-75">
        <form action="#" method="post" class="border shadow rounded-3 mt-5 p-5">
            <h1 class="text-center text-success mb-3 fw-bold">* Login Form</h1>

            <!-- <div class="alert alert-danger" role="alert">
            Fields are empty
            </div> -->
            <?php require 'alert.php' ?>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label text-uppercase fw-bold">email:</label>
                <input type="text" placeholder="Enter the email" class="form-control" name="email">
            </div>

            <!-- password -->
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold text-uppercase">password:</label>
                <input type="password" placeholder="Enter the password" class="form-control" name="password">
            </div>

            <!-- Login Button then redirect -->
            <div class="d-grid">
                <button class="fw-bold btn btn-primary" name="login">Login</button>
            </div>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>