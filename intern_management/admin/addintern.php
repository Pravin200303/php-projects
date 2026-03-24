

<!-- PHP Code -->
<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

if(isset($_POST['add']) && $_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';

    // input value stored in the variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $mno = $_POST['mno'];

    // when field is empty then execute the statement
    if(empty($name) || empty($email) || empty($pwd) || empty($mno))
    {
        echo "<script>alert('Fields are empty');
        </script>";
    }
    
    // Checking duplication records if present then generate the error
    else
    {
        $check_query = "SELECT * FROM `add_intern` WHERE email = '$email'";
        $check_result = mysqli_query($conn, $check_query);

        if(mysqli_num_rows($check_result) > 0)
        {
            echo "<script>alert('Email already exists!');</script>";
        }

        // records is not unique then insert the query
        else
        {
            $sql = "INSERT INTO `add_intern`(name, email, password, mobile)
            values('$name','$email','$pwd','$mno')";
            
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo "<script>alert('Records Inserted Successfully');
                </script>";
            }
            else
            {
                echo "<script>alert('Fields are empty');
                </script>";
            }
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
    <div class="container-fluid">
        <div class="row">
            <?php include 'sidebar.php'; ?>
            <div class="col-lg-10 col-md-10">
        
                <h1 class="mt-5 text-center shadow p-2 mb-5">Add Interns</h1>
                <!-- Name -->
                <form action="#" method="post" class="border p-3 rounded-3 w-75 mx-auto shadow">
                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter the Name">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>

                    <!-- password -->
                    <div class="mb-3">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pwd" class="form-control" placeholder="Password">
                    </div>

                    <!-- mno -->
                    <div class="mb-3">
                        <label for="mno">Mobile no:</label>
                        <input type="text" name="mno" class="form-control" placeholder="Enter the Mobile no">
                    </div>

                    <!-- Add button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold" name="add">Add Interns</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<?php include '../footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

