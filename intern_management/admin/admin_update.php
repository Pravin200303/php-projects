

<!-- PHP Code -->
<?php
include 'connect.php';

// Select query to display input wise data
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "SELECT * FROM `add_intern` WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);

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
        
                <h1 class="mt-5 text-center">Update Interns</h1>
                <!-- Name -->
                <form action="#" method="post" class="border p-3 rounded-3 w-75 mx-auto">
                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter the Name" value="<?php echo $rows['name'];  ?>">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $rows['email'];  ?>">
                    </div>

                    <!-- password -->
                    <div class="mb-3">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pwd" class="form-control" placeholder="Password" value="<?php echo $rows['password'];  ?>">
                    </div>

                    <!-- mno -->
                    <div class="mb-3">
                        <label for="mno">Mobile no:</label>
                        <input type="text" name="mno" class="form-control" placeholder="Enter the Mobile no" value="<?php echo $rows['mobile'];  ?>">
                    </div>

                    <!-- Update button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold" name="update">Update Interns</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!-- Update Query -->
<?php
include 'connect.php';

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $mno = $_POST['mno'];
    // Update query
    $sql = "UPDATE `add_intern` SET name='$name', email = '$email', password='$pwd', mobile='$mno' WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);
    // condition is execute successfully
    if($result)
    {
        echo "<script>
        alert('Record Updated Successfully');
        window.location.href='viewinterns.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Something went wrong');
        window.location.href='admin_update.php';
        </script>";
    }

}

?>

