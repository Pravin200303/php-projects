
<!-- PHP code -->
<?php
session_start();
include '../admin/connect.php';

$intern_id = $_SESSION['intern_id'];

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM `task` WHERE id = '$id' ";
    $result = mysqli_query($conn, $sql);
    
    if(!$result)
    {
        die("query Failed".mysqli_error());
    }
    else
    {
        $rows = mysqli_fetch_assoc($result);
    }
}

?>

<!-- Update Query -->
<?php
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $tname = $_POST['taskname'];
        $tdesc = $_POST['description'];
        $tstatus = $_POST['status'];

        $sql = "UPDATE `task` SET task_name='$tname', task_description='$tdesc', status='$tstatus'
        WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo "<script>alert('Record Updated Successfully');
            window.location.href='intern_tasks.php';
            </script>";
        }
        else
        {

        }
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
        
        <!-- sidebar -->
        <?php include 'intern_sidebar.php'; ?>

        <div class="col-lg-10 col-md-10">

            <h1 class="mt-5 text-center shadow p-2 text-primary">Edit Task Section</h1>
                <hr class="mb-5">
                <form action="#" method="post" class="mb-5 border p-3 rounded-3 w-75 mx-auto shadow">
                <?php if(isset($error))
                    {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $error ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php
                    }
                ?>
                <?php if(isset($success))
                    {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?= $success ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php
                    }
                ?>
                <!--  -->
                    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">

                <!-- Task Name -->
                    <div class="mb-3">
                        <label for="taskname" class="fw-semibold text-uppercase">Task Name:</label>
                        <input type="text" name="taskname" class="form-control" placeholder="Enter the Name of Task" value="<?php echo $rows['task_name']; ?>">
                    </div>

                    <!-- Task Description -->
                    <div class="mb-3">
                        <label for="description" class="fw-semibold text-uppercase">Task Description:</label>
                        <input type="text" name="description" class="form-control" placeholder="Enter the Task Description" value="<?php echo $rows['task_description']; ?>">
                    </div>

                    <!-- Task Status -->
                     <select name="status" class="mb-3 form-control">
    
                        <option value="Pending" 
                            <?php echo ($rows['status'] == 'Pending') ? 'selected' : ''; ?>>
                            Pending
                        </option>

                        <option value="In Process" 
                            <?php echo ($rows['status'] == 'In Process') ? 'selected' : ''; ?>>
                            Process
                        </option>

                        <option value="Completed" 
                            <?php echo ($rows['status'] == 'Completed') ? 'selected' : ''; ?>>
                            Completed
                        </option>

                    </select>

                    <!-- Add button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold" name="update">Update Task</button>
                    </div>
                </form>
        </div>
        <!-- Footer Section -->
        <?php include '../footer.php'; ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

