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

<!-- navbar -->
<?php require 'navbar.php' ?>

<!-- Body Section -->
<div>
    <div class="container-fluid">
        <h1 class="text-white p-3 bg-info fw-bold fs-1 text-center text-uppercase m-0">start your professsional journey with us</h1>
    </div>
</div>

<!-- Internship Apply Form -->
<div>
    <div class="container mt-5 p-3">
        <h1 class="text-center mt-5 text-success fs-1 fw-bold shadow mb-3 p-3 text-uppercase">* Apply Form</h1>
        <div class="row align-items-stretch g-0 shadow">
            <!-- Left Side -->
            <div class="col-lg-6 col-md-6">
                <img src="images/apply2.jpg" alt="apply image" class="img-fluid h-100 w-100 object-fit-cover rounded-3 shadow">
            </div>
            <!-- Right Side -->
            <div class="col-lg-6 col-md-6">
                <form action="#" method="post" class="rounded-3 p-5 border shadow">

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="name" class="fw-semibold">Full Name:</label>
                        <input type="text" id="name" class="form-control form-input" name="fullname" placeholder="Enter the Name">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="fw-semibold">Email:</label>
                        <input type="text" id="email" class="form-control form-input" name="email" placeholder="Enter the Email">
                    </div>

                    <!-- College -->
                    <div class="mb-3">
                        <label for="cname" class="fw-semibold">College Name:</label>
                        <input type="text" id="cname" class="form-control form-input" name="cname" placeholder="College name">
                    </div>

                    <!-- Course -->
                    <div class="mb-3">
                        <label for="course" class="fw-semibold">Course Name:</label>
                        <input list="courses" name="course" id="course" class="form-control" placeholder="Select the Courses">
                        <!-- dropdowns -->
                        <datalist id="courses">
                            <option value="BCA">
                            <option value="BSC CS">
                            <option value="BTECH">
                            <option value="MCA">
                            <option value="MBA">
                            <option value="Diploma">
                        </datalist>
                    </div>

                    <!-- Internship Duration -->
                    <div class="mb-3">
                        <label for="name" class="fw-semibold">Duration:</label>
                        <input type="text" id="name" class="form-control form-input" name="fullname" placeholder="Duration">
                    </div>

                    <!-- Domain -->
                    <div class="mb-3">
                        <label for="domain" class="fw-semibold">Domain:</label>
                        <input list="domains" id="domain" name="domain" class="form-control" placeholder="Select the Domain">
                        <datalist id="domains">
                            <option value="Web Development">Web Development</option>
                            <option value="App Development">App Development</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Data Analyst">Data Analyst</option>
                        </datalist>
                    </div>

                    <!-- Resume -->
                    <div class="mb-3">
                        <label for="file" class="fw-semibold">Resume Upload:</label>
                        <input type="file" name="file" id="file" class="form-control">
                    </div>

                    <!-- Why to Join? -->
                    <div class="mb-3">
                        <label for="join" class="fw-semibold">Why to Join?</label>
                        <textarea name="join" id="join" placeholder="Enter Why to Join?" rows=5 class="form-control"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-5 d-grid mb-3">
                        <button class="btn btn-primary fw-bold text-uppercase" name="apply">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Card Sections -->
<div>
    <div class="container">
        <h1 class="mt-5 mb-5 text-info text-bold text-white text-center bg-info p-3">Internships Further Achievements</h1>
        <div class="row">
            <!-- card 1 Placement and Career -->
            <div class="col-lg-4 d-flex">
                <div class="card m-4 shadow">
                    <img src="images/apply1.jpg" alt="card1">
                    <div class="card-body">
                        <div class="card-title text-success fw-bold fs-5 text-center">Placement & Career Growth</div>
                        <p>
                            Internships act as a vital bridge between academic study and professional employment, providing hands-on experience that builds technical, soft, and industry-specific skills
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 2 Live Projects -->
            <div class="col-lg-4 d-flex">
                <div class="card m-4 shadow">
                    <img src="images/apply4.jpg" alt="card1">
                    <div class="card-body">
                        <div class="card-title fw-bold fs-5 text-success text-center">Live Projects</div>
                        <p>
                            A live project internship allows students to apply academic theories to real-world, industry-driven tasks under professional mentorship, bridging the gap between classroom knowledge and corporate expectations
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 3 Skill Enhancement-->
            <div class="col-lg-4 d-flex">
                <div class="card m-4 shadow">
                    <img src="images/intern3.jpg" alt="card1">
                    <div class="card-body">
                        <div class="card-title fw-bold fs-5 text-success text-center">Skill Enhancement</div>
                        <p>
                             It helps interns develop critical, job-specific skills, such as software proficiency and analytical thinking, while improving soft skills like communication and time management
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 4 Performance Recognition-->
            <div class="col-lg-4 d-flex">
                <div class="card m-4 shadow">
                    <img src="images/intern4.jpg" alt="card1">
                    <div class="card-body">
                        <div class="card-title fw-bold fs-5 text-success text-center">Performance Recognition</div>
                        <p>
                            Performance recognition boosts morale and reinforces excellence through specific, timely praise. Effective messages highlight unique contributions, dedication, and impact on team goals. Examples include:
                        </p>
                    </div>
                </div>
            </div>

            <!-- card 5 Growth & Progress-->
            <div class="col-lg-4 d-flex">
                <div class="card m-4 shadow">
                    <img src="images/apply3.jpg" alt="card1">
                    <div class="card-body">
                        <div class="card-title fw-bold fs-5 text-success text-center">Growth & Progress</div>
                        <p>
                            Growth represents the internal expansion of capacity, skills, and understanding, while progress is the visible, measurable movement toward a goal. While growth is often invisible and emotional—like building resilience—progress is seen in daily habits and achievements
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- card 6 Skills Mastered-->
            <div class="col-lg-4 d-flex">
                <div class="card m-4 shadow">
                    <img src="images/apply2.jpg" alt="card1">
                    <div class="card-body">
                        <div class="card-title fw-bold fs-5 text-success text-center">Skills Mastered</div>
                        <p>
                            Mastered skills represent high-level proficiency, moving beyond basic knowledge to expert application, understanding, and consistent, high-quality output. Key mastered skills often include, among others, effective communication, strategic critical analysis, resourceful time management, and adaptable self-learning
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Other Images and Paragraphs -->
<div>
    <div class="container">

    </div>
</div>

<!-- footer -->
<?php require 'footer.php' ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

