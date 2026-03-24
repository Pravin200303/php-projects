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

                <h1 class="text-center mt-5">View Interns</h1>
                <table class="mt-5 table table-striped table bordered table-hover">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Role</th>
                        <th class="text-center">Task</th>
                        <th class="text-center">Operations</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Parth More</td>
                        <td>web Developer Intern</td>
                        <td>create navbar</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Onkar Koli</td>
                        <td>App Developer Intern</td>
                        <td>create navbar</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sakshi</td>
                        <td>web Developer Intern</td>
                        <td>create navbar</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mayur</td>
                        <td>Digital Marketing Intern</td>
                        <td>Make attractive on page profile</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>