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

            <h1 class="mt-2 text-center shadow p-2">Intern Tasks</h1>

            <!-- View Tasks -->
            <table class="mt-5 table table-striped table-hover table-bordered border-dark">
                <tr>
                    <th class="text-success">Sr.No</th>
                    <th class="text-success">Interns</th>
                    <th class="text-success">Task_name</th>
                    <th class="text-success">Task_description</th>
                    <th class="text-success">Date & Time</th>
                    <th class="text-success">Status</th>
                </tr>
                <?php
                    include '../admin/connect.php';
                    // 'Inner Join' query
                    $sql = "SELECT task.*,i.name FROM `task` inner join `add_intern` as i on task.intern_id = i.id";
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
                                    <?= $rows['name'] ?>
                                </td>
                                <td>
                                    <?= $rows['task_name'] ?>
                                </td>
                                <td>
                                    <?= $rows['task_description'] ?>
                                </td>
                                <td>
                                    <?= $rows['created_at'] ?>
                                </td>
                                <td>
                                    <?= 
                                        $status = $rows['status'];
                                        if($status == "Completed")
                                        {
                                            echo "<span class='badge bg-success'>Completed</span>";
                                        }
                                        else if($status == "Pending")
                                        {
                                            echo "<span class='badge bg-warning text-dark'>Pending</span>";
                                        }
                                        else if($status == "In Process")
                                        {
                                            echo "<span class='badge bg-primary'>In Process</span>";
                                        }
                                        else
                                        {
                                            echo $status;
                                        }
                                    ?>
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

