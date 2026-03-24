
<!-- PHP code -->
<?php
session_start();

if(!isset($_SESSION['intern_id']))
{
    header("Location: interns_login.php");
    exit();
}

$intern_id = $_SESSION['intern_id'];

include '../admin/connect.php';

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['add_task']))
{
    // $intern_id = $_SESSION['intern_id'];
    $tname = $_POST['taskname'];
    $tdesc = $_POST['description'];
    $tstatus = $_POST['status'];

    // when field is empty then execute the statement
    if(empty($tname) || empty($tdesc) || empty($tstatus))
    {
        $error = "Fields are empty";
    }
    else
    {
        $sql = "INSERT INTO `task`(intern_id, task_name, task_description, status)
                VALUES('$intern_id','$tname', '$tdesc', '$tstatus')";

        $result = mysqli_query($conn, $sql);

        // successfully inserted
        if($result)
        {
            $success = "Record Inserted Successfully";
        }
        else
        {
            $error = "Record not Inserted";
        }
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

            <h1 class="mt-5 text-center shadow p-2 text-primary">Task Section</h1>
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
                <!-- Task Name -->
                    <div class="mb-3">
                        <label for="taskname" class="fw-semibold text-uppercase">Task Name:</label>
                        <input type="text" name="taskname" class="form-control" placeholder="Enter the Name of Task">
                    </div>

                    <!-- Task Description -->
                    <div class="mb-3">
                        <label for="description" class="fw-semibold text-uppercase">Task Description:</label>
                        <input type="text" name="description" class="form-control" placeholder="Enter the Task Description">
                    </div>

                    <!-- Task Status -->
                    <select name="status" class="mb-3 form-control">
                        <option value="">Select Status</option>
                        <option value="Pending">Pending</option>
                        <option value="In Process">In Process</option>
                        <option value="Completed">Completed</option>
                    </select>

                    <!-- Add button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold" name="add_task">Add Task</button>
                    </div>
                </form>

        <!-- View Tasks -->
            <table class="mt-5 table table-striped table-hover table-bordered">
                <tr>
                    <th>Sr.No</th>
                    <th>Task_name</th>
                    <th>Task_description</th>
                    <th>Status</th>
                    <th>Operations</th>
                </tr>
                <?php
                    // include '../admin/connect.php';
                    $sql = "SELECT * FROM `task` WHERE intern_id = $intern_id";
                    $result = mysqli_query($conn, $sql);
                    $i = 1;
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($rows = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tr>
                                <td>
                                    <?= $i ?>
                                </td>
                                <td>
                                    <?= $rows['task_name']; ?>
                                </td>
                                <td>
                                    <?= $rows['task_description']; ?>
                                </td>
                                <td>
                                    <?= $rows['status']; ?>
                                </td>
                                <td class="d-flex gap-3">
                                    <a href="intern_edit.php?id=<?php echo $rows['id']; ?>" 
                                    class="bg-warning fw-bold text-dark p-2 rounded-3">
                                        Edit
                                    </a>

                                    <a href="intern_delete.php?id=<?php echo $rows['id']; ?>" 
                                    class="bg-danger fw-bold p-2 rounded-3 text-dark">
                                        Delete
                                    </a>  
                                </td>
                            </tr>
                            <?php
                            $i++;
                        }
                    }
                ?>
                
            </table>
        </div>
        <!-- Footer Section -->
        <?php include '../footer.php'; ?>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

