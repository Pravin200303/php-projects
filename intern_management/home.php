<?php

session_start();
// If already logged in -> go to home page
if(!isset($_SESSION['email']))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"/>
    <style>
    .imganm
    {
        position: relative;
        animation: float 2.5s ease-in-out infinite alternate;
    }

    @keyframes float
    {
        0%
        {
            transform: translateY(0px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        100%
        {
            transform: translateY(20px);
            box-shadow: 0 25px 40px rgba(0,0,0,0.25);
        }
    }
    .move:hover
    {
        transition: 2s;
        transform: translatey(-10px);
    }

    .navbar-custom
    {
        background: linear-gradient(90deg,#141e30,#243b55);
    }

    .color
    {
        background-color:#EAEEFF;
    }

</style>
</head>
<body>

<!-- navigation bar -->
    <?php include 'navbar.php'; ?>

<!-- body section -->
<div class="">
    <div class="container">

        <!-- Carousal slide show -->
        <div id="demo" class="carousel slide mx-auto" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/intern2.jpg" alt="Los Angeles" class="d-block mx-auto border" style="width:80%;height:50%">
            </div>
            <div class="carousel-item">
            <img src="images/apply3.jpg" alt="Chicago" class="d-block mx-auto border" style="width:80%;height:50%">
            </div>
            <div class="carousel-item">
            <img src="images/apply4.jpg" alt="New York" class="d-block mx-auto border" style="width:80%;height:50%">
            </div>
        </div>
        
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        </div>

        </div>
    </div>
</div>
<hr>

<!-- paragraph section -->
<div>
    <div class="container color gradient rounded-3 mb-2" style="min-height:500px;">
        <div class="row align-items-center h-100">
            <!-- paragraph part -->
            <div class="col-lg-6 p-5">
                <h1 class="fw-bold text-uppercase text-primary">Internship Program</h1>
                <p class="mt-3 text-capitalize fw-semibold"><span class="text-primary fw-semibold">Internships</span> are often considered crucial for career development, helping individuals explore industries while adding valuable experience to their portfolios.</p>

                <p class="mt-3 text-capitalize fw-semibold">An <span class="text-primary fw-semibold">internship</span> is a period of work that gives people – mostly students or graduates – the opportunity to gain new skills and experience in a profession they want to get into. They're great for learning new skills, and can range in length from a couple of weeks to several months or even a year.</p>
                <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="mt-2 bg-black p-2 rounded-3 fw-bold">See More<span></a>
            </div>

            <!-- image part -->
            <div class="col-lg-6 p-5">
                <img src="images/apply1.jpg" alt="intern2 image" class="img-fluid w-100 shadow imganm">
            </div>
        </div>
    </div>
</div>

<!-- Card Section -->
<div>
    <div class="container color mt-5 mb-2">
        <h1 class="text-center mb-2 shadow text-white bg-info bg-gradient p-3 text-uppercase">Internships Develops Your Skills</h1>
        <div class="row shadow">

            <!-- card 1 -->
            <div class="col-lg-4 p-5 d-flex">
                <div class="card move shadow">
                    <img src="images/team_collaboration.jpg"
                    alt="">
                    <div class="card-body">
                        <h4 class="card-title">Collaboration with Teammates</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, repudiandae! Sint officiis quos cupiditate sunt, aliquid inventore est non vitae.</p>
                        <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="bg-black p-2 rounded-3 fw-bold">See More<span></a>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-lg-4 p-5 d-flex">
                <div class="card move shadow">
                    <img src="images/projects.jpg"
                    alt="">
                    <div class="card-body">
                        <h4 class="card-title">Hands on Projects</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, repudiandae! Sint officiis quos cupiditate sunt, aliquid inventore est non vitae.</p>
                        <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="bg-black p-2 rounded-3 fw-bold">See More<span></a>
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="col-lg-4 p-5 d-flex">
                <div class="card move shadow">
                    <img src="images/communication.jpg"
                    alt="">
                    <div class="card-body">
                        <h4 class="card-title">Communication Skill</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, repudiandae! Sint officiis quos cupiditate sunt, aliquid inventore est non vitae.</p>
                        <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="bg-black p-2 rounded-3 fw-bold">See More<span></a>
                    </div>
                </div>
            </div>

            <!-- card 4 -->
            <div class="col-lg-4 p-5 d-flex">
                <div class="card move shadow">
                    <img src="images/work_experience.jpg"
                    alt="">
                    <div class="card-body">
                        <h4 class="card-title">Company's Work Experience</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, repudiandae! Sint officiis quos cupiditate sunt, aliquid inventore est non vitae.</p>
                        <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="bg-black p-2 rounded-3 fw-bold">See More<span></a>
                    </div>
                </div>
            </div>

            <!-- card 5 -->
            <div class="col-lg-4 p-5 d-flex">
                <div class="card move shadow">
                    <img src="images/technical_proficience.jpg"
                    alt="">
                    <div class="card-body">
                        <h4 class="card-title">Technical Proficiency & Problem Solving Skill</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, repudiandae! Sint officiis quos cupiditate sunt, aliquid inventore est non vitae.</p>
                        <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="bg-black p-2 rounded-3 fw-bold">See More<span></a>
                    </div>
                </div>
            </div>

            <!-- card 6 -->
            <div class="col-lg-4 p-5 d-flex">
                <div class="card move shadow">
                    <img src="images/networking.jpg"
                    alt="">
                    <div class="card-body">
                        <h4 class="card-title">Build Networking</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, repudiandae! Sint officiis quos cupiditate sunt, aliquid inventore est non vitae.</p>
                        <a href="#" class="d-block text-fw-bold text-white text-decoration-none"><span class="bg-black p-2 rounded-3 fw-bold">See More<span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Object and Goals -->
<div>
    <div class="container color mt-5 mb-2">
        <h1 class="text-center shadow mb-5 bg-info bg-gradient p-3 text-white text-uppercase">Objectives and Goals</h1>
        <div class="row shadow p-2">
            <!-- card 1 -->
            <div class="col-lg-6 d-flex">
                <div class="card p-3 move">
                    <div class="card-title">
                        <p class="text-center fw-bold fs-1">Skill Development</p>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id corporis ratione in natus enim dolorum, exercitationem placeat quia quae repudiandae?</p>
                    </div>
                    <img src="images/project.png" alt="goals1">
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-lg-6 d-flex">
                <div class="card p-3 move">
                    <div class="card-title">
                        <p class="text-center fw-bold fs-1">Familiar with Technologies</p>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id corporis ratione in natus enim dolorum, exercitationem placeat quia quae repudiandae?</p>
                    </div>
                    <img src="images/technology.jpg" alt="goals1">
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Section for Technologies  -->
<div>
    <div class="container color mt-5 mb-5">
        <div class="text-center">
            <h1 class="bg-info shadow bg-gradient p-3 text-white">Technologies We Work With</h1>
            <p class="fs-5">We combine and technology to deliver scalable, secure and innovative digital solutions.</p>
        </div>
        <div class="row p-2 shadow">
            <!-- card 1 -->
            <div class="col-lg-6 mb-2">
                <div class="card p-5 move">
                    <div class="card-title text-center fs-1 fw-bold">Frontend</div>
                    <div class="d-flex gap-3 justify-content-center">
                        <span class="bg-info p-1 rounded-3 fw-bold text-white">HTML5</span>
                        <span class="bg-info p-1 rounded-3 fw-bold text-white">Bootstrap</span>
                        <span class="bg-info p-1 rounded-3 fw-bold text-white">JavaScript</span>
                        <span class="bg-info p-1 rounded-3 fw-bold text-white">CSS</span>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="col-lg-6 mb-2">
                <div class="card p-5 move">
                    <div class="card-title text-center fs-1 fw-bold"><i class="bi bi-database"></i>
                    </span>Backend
                    </div>
                    <div class="d-flex gap-3 justify-content-center">
                        <span class="bg-warning p-1 rounded-3 text-white fw-bold">Flask</span>
                        <span class="bg-warning p-1 rounded-3 text-white fw-bold">NodeJs</span>
                        <span class="bg-warning p-1 rounded-3 text-white fw-bold">PHP</span>
                        <span class="bg-warning p-1 rounded-3 text-white fw-bold">Laravel</span>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col-lg-6 mb-2">
                <div class="card p-5 move">
                    <div class="card-title fs-1 text-center fw-bold"><i class="bi bi-database-fill">
                    </i>Databases
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <span class="text-white fw-bold bg-success p-1 rounded-3 text-white fw-bold">MySQL</span>
                        <span class="text-black fw-bold bg-success p-1 rounded-3 text-white fw-bold">Postgre SQL</span>
                        <span class="text-black fw-bold bg-success p-1 rounded-3 text-white  fw-bold text-whitefw-bold">MS SQL</span>
                        <span class="text-black fw-bold bg-success p-1 rounded-3 text-white fw-bold">MySQLi</span>
                    </div>
                </div>
            </div>

            <!-- card 4 text-white fw-bold -->
            <div class="col-lg-6 mb-2">
                <div class="card p-5 move">
                    <div class="card-title fs-1 text-center fw-bold"><i class="bi bi-palette"></i>
                    UI & UX
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <span class="bg-primary p-1 text-white rounded-3 fw-bold">Figma</span>
                        <span class="bg-primary p-1 text-white rounded-3 fw-bold">Coral Draw</span>
                        <span class="bg-primary p-1 text-white rounded-3 fw-bold">Ms Paint</span>
                        <span class="bg-primary p-1 text-white rounded-3 fw-bold">Photoshop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div>
    <div class="container mt-5">
        <h1 class="text-center text-white shadow p-3 shadow bg-info bg-gradient">Contact Us</h1>
        <div class="row mt-5">
            <div class="col-lg-6">
                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et ipsam hic, suscipit iste magnam asperiores mollitia fugit sapiente facilis. Deserunt reiciendis magni provident? Commodi hic, sit ad laudantium iste cum.</p>
                
                <div class="mb-3">
                <h4><i class="bi bi-geo-alt-fill text-primary"></i>
                Office Address</h4>
                Siddhivinayak Plaza, near Tavnappa Patne High School, Rajarampuri 11th lane, Kolhapur, Maharashtra 416008
                </div>

                <div class="mb-3">
                    <h4><i class="bi bi-telephone-forward-fill text-success"></i>
                    Call Us</h4>
                    +91 9970755966 , +91 8698270018
                </div>

                <div class="mb-3">
                    <h4><i class="bi bi-envelope-fill text-danger"></i>
                    Email Us</h4>
                    mail.anmeyitservices@gmail.com
                </div>
            </div>
            <div class="col-lg-6">
                <form action="#" method="post" class="border p-5 rounded shadow">
                    <!-- Name -->
                    <div class="mb-2">
                        <label for="name" class="fw-semibold">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter the name" class="form-input form-control">
                    </div>

                    <!-- Email -->
                    <div class="mb-2">
                        <label for="email" class="form-label fw-semibold">Email:</label>
                        <input type="text" id="name" name="email" placeholder="Enter the email" class="form-input form-control">
                    </div>

                    <!-- mobile no -->
                    <div class="mb-2">
                        <label for="mno" class="fw-semibold">Mobile:</label>
                        <input type="number" id="name" name="mno" placeholder="Enter the name" class="form-input form-control">
                    </div>
                    <!-- Submit button -->
                    <div class="d-grid">
                     <button class="btn btn-primary fw-bold text-uppercase">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>