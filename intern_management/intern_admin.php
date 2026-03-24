<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Test</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"/>
<style>
    
.color
{
    background-color:#EAEEFF;
}
</style>
</head>
<body>

<!-- Navbar Section -->
<?php require 'navbar.php' ?>

<!-- Body Section -->
<div>
    <div class="container mt-5">
        <div class="p-3 fs-3 bg-info text-center rounded-pill w-50  mx-auto">
            <a href="intern/interns_login.php" class="text-decoration-none text-white fw-bold text-uppercase rounded-3">Interns Login
            <i class="ms-2 bi bi-arrow-right-circle text-black text-white fw-bold"></i></a>
        </div>

        <hr class="">

        <div class="mb-5 fs-3 p-3 bg-info text-center rounded-pill w-50 mx-auto">
            <a href="admin/admin_login.php" class="text-decoration-none text-white fw-bold text-uppercase border-dark">Admin Login
            <i class="ms-2 bi bi-arrow-right-circle text-black text-white fw-bold"></i></a>
        </div>
    </div>
</div>


<!-- Footer Section -->
<?php require 'footer.php' ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

