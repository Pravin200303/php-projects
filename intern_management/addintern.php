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

            <div class="col-lg-10 col-md-10">
                <!-- Hamburger Button -->
                <a href="#">
                <i class="bi bi-list text-dark"></i></a>
                
                <!-- Name -->
                 <h1 class="mt-5 text-center">Add Interns</h1>
                <form action="#" method="post" class="border p-3 rounded-3 w-75 mx-auto">
                    <div class="mb-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter the Name">
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <!-- mno -->
                    <div class="mb-3">
                        <label for="mno">Mobile no:</label>
                        <input type="text" name="mno" class="form-control" placeholder="Enter the Mobile no">
                    </div>
                    <!-- Add button -->
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary fw-bold">Add Interns</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>