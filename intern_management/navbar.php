
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar-custom
        {
            background: linear-gradient(90deg,#141e30,#243b55);
        }
    </style>
</head>
<body>
    

<!-- navigation bar -->
<div class="navbar-custom p-2 navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <!-- Logo -->
        <a href="#" class="navbar-brand">
            <img src="images/logo.jpg" alt="logo" width="50" height="50">
        </a>

        <!-- Hamburger Button -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- nav menus -->
        <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
            <ul class="navbar-nav fw-bold" id="mynavbar">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="intern_admin.php" class="nav-link">
                        Role
                    </a>
                </li>
                <li class="nav-item">
                    <a href="apply.php" class="nav-link">
                        Internship Apply
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


</body>
</html>
