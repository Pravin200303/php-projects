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

            <div class="mt-5 mb-5">
                <input type="date" name="date" placeholder="Enter the Date" class="ms-2 p-2">
                <button type="button" name="search" class="ms-2 btn btn-primary p-2 fw-bold">Search</button>
            </div>

            <table class="ms-2 table table-striped table-hover bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Attendance</th>
                    <th>Operations</th>
                </tr>
                <tr>
                        <td>1</td>
                        <td>Parth More</td>
                        <td>web Developer Intern</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Onkar Koli</td>
                        <td>App Developer Intern</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sakshi Banne</td>
                        <td>web Developer Intern</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mayur Gurav</td>
                        <td>Digital Marketing Intern</td>
                        <td>
                            <a href="#">Update</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
            </table>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

