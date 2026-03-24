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
            <!-- Left side -->
            <?php include 'sidebar.php' ?>
            <!-- right side -->
            <div class="col-lg-10 col-md-10">
                <!-- Hamburger Button -->
                <a href="#">
                <i class="bi bi-list text-dark"></i></a>
                <br>
                <h1 class="text-center mt-2 shadow p-2">View Interns</h1>
                <table class="mt-5 table table-striped table-bordered table-hover">
                    <tr>
                        <th class="text-center text-success">Sr.no</th>
                        <th class="text-center text-success">#</th>
                        <th class="text-center text-success">Name</th>
                        <th class="text-center text-success">Email</th>
                        <th class="text-center text-success">Password</th>
                        <th class="text-center text-success">Mobile</th>
                        <th class="text-center text-success">Joining Date & Time</th>
                        <th class="text-center text-success">Operations</th>
                    </tr>
                <?php
                    include 'connect.php';
                    $sql = "SELECT * FROM `add_intern`";
                    $result = mysqli_query($conn, $sql);
                    $i=1;
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['name'];?></td>
                                    <td><?=$row['email'];?></td>
                                    <td><?=$row['password'];?></td>
                                    <td><?=$row['mobile'];?></td>
                                    <td><?=$row['created_at'];?></td>
                                    <td class="d-flex gap-3">
                                    <a href="admin_update.php?id=<?php echo $row['id']; ?>" 
                                    class="bg-warning fw-bold text-dark p-2 rounded-3">
                                        Update
                                    </a>

                                    <a href="admin_delete.php?id=<?php echo $row['id']; ?>" 
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
        </div>
    </div>
</div>

<?php include '../footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>