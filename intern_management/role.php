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
        <!-- Left side -->
        <?php include 'sidebar.php' ?>
    
        <!-- Right Side -->
        

        <div class="col-lg-3 col-md-3 mt-3">
        <!-- Hamburger Button -->
        <a href="#">
            <i class="bi bi-list text-dark" data-bs-toggle="collapse" data-bs-target="#demo"></i>
        </a>
            <div class="mt-4 card p-5 bg-warning">
                <div class="card-body">
                    <div class="card-title fw-bold fs-5 text-center text-center">Interns</div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 mt-3">
            <div class="mt-5 card p-5 bg-info">
                <div class="card-body">
                    <div class="card-title fw-bold fs-5 text-center">Tasks</div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 mt-3">
            <div class="mt-5 card p-5 bg-info">
                <div class="card-body">
                    <div class="card-title fw-bold fs-5 text-center">Attendance</div>
                </div>
            </div>
        </div>

    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>

