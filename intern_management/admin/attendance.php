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
                <h1 class="text-center mt-5 shadow p-2">Intern Attendance</h1>
                <table class="mt-5 table table-striped table-bordered table-hover">
                    <tr>
                        <th class="text-center text-success">Intern Name</th>
                        <th class="text-center text-success">In Time</th>
                        <th class="text-center text-success">Out Time</th>
                        <th class="text-center text-success">Status</th>
                        <th class="text-center text-success">Date</th>
                    </tr>

                    <?php 
                        include 'connect.php';
                        $sql = "SELECT ai.name, a.in_time, a.out_time, a.date
                        FROM add_intern AS ai
                        LEFT JOIN attendance AS a 
                        ON ai.id = a.intern_id 
                        AND a.date = CURDATE()
                        ORDER BY ai.name";
                        $result = mysqli_query($conn, $sql);
                        while($rows = mysqli_fetch_assoc($result))
                        {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $rows['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['in_time']; ?>
                                    </td>
                                    <td>
                                        <?php 
                                            echo $rows['out_time']; 
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($rows['in_time'] == NULL)
                                        {
                                            echo "<span class='badge bg-danger'>Absent</span>";
                                        }

                                        else if($rows['out_time'] == NULL)
                                        {
                                            echo "<span class='badge bg-warning'>Half Day</span>";
                                        }

                                        else
                                        {
                                            $in = strtotime($rows['in_time']);
                                            $out = strtotime($rows['out_time']);
                                            
                                            $hours = ($out - $in) / 3600;

                                            if($hours >= 8)
                                            {
                                                echo "<span class='badge bg-success'>Present</span>";
                                            }
                                            else
                                            {
                                                echo "<span class='badge bg-warning'>Half Day</span>";
                                            }
                                        }
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['date']; ?>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>