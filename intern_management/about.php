<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Test</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
<style>
    
.color
{
    background-color:#EAEEFF;
}
</style>
</head>
<body>

<?php require 'navbar.php' ?>

<!-- Heading -->
<div>
    <div class="container-fluid">
        <h1 class="mt-3 text-center text-uppercase bg-info p-5 text-white bg-gradient">About Us</h1>
    </div>
</div>

<!-- Paragraph -->
<div class="color">
    <div class="container p-3">
        <div class="mt-2 mb-2">
           <span class="fw-bold d-inline fs-2 text-primary">Who We Are</span>
        </div>

        <p class="mt-2 text-capitalize fw-semibold fs-5">
            <span class="fw-bold text-primary fs-5">Anmey IT Services</span> is a professional internship and skill development platform dedicated to bridging the gap between academic learning and real-world industry experience. We provide structured, practical, and career-oriented internship programs designed to prepare students for the competitive job market.

            Our mission is to empower students with hands-on experience, mentorship, and industry-relevant skills.
        </p>
        <hr>

        <!-- second paragraph -->
        <span class="text-primary mt-2 mb-2 fw-bold fs-2">Our Mission</span>
        <p class="text-capitalize fw-semibold fs-5">
            To create a practical learning ecosystem where students gain real-world exposure, build confidence, and become industry-ready professionals.
        </p>

        <!-- Third Paragraph -->
        <span class="text-primary fw-bold fs-2">Our Vision</span>
        <p class="text-capitalize fw-semibold fs-5">
            To become a trusted internship platform that transforms students into skilled professionals through innovation, mentorship, and real-time project experience.
        </p>

        <!-- Fourth Paragraph -->
        <span class="text-primary fw-bold fs-2">What We Offer</span>
        <ul class="fs-5">
            <li>✔ Live Project-Based Internships</li>
            <li>✔ Industry Mentor Guidance</li>
            <li>✔ Real-Time Task Assignments</li>
            <li>✔ Doubt Support & Technical Assistance</li>
            <li>✔ Performance Evaluation & Feedback</li>
            <li>✔ Internship Certificate</li>
            <li>✔ Skill Development Workshops</li>
        </ul>

        <!-- Five Paragraph -->
        <span class="text-primary fw-bold fs-2">Our Mentorship Model</span>
        <ul class="fs-5">
            <li>Assign structured tasks</li>
            <li>Review daily work reports</li>
            <li>Provide feedback</li>
            <li>Help interns improve practical skills</li>
            <li>Track progress and performance</li>
        </ul>

        <!-- Sixth Paragraph -->
        <span class="text-primary fw-bold fs-2">Why Choose Us?</span>
        <ul class="fs-5">
            <li>Practical Industry Experience</li>
            <li>Structured Internship Workflow</li>
            <li>Transparent Evaluation System</li>
            <li>Skill-Oriented Training</li>
            <li>Career Guidance & Support</li>
        </ul>

        <!-- Seventh Paragraph Card Section-->
        <h1 class="text-primary fs-1 text-center mt-5 mb-5 fw-bold">Our Core Values</h1>
        <!-- Innovation -->
        <div class="row">
            <div class="col-lg-3 d-flex">
                <div class="card p-2 shadow mb-2">
                    <i class="fa-solid fa-lightbulb fs-1 mt-3 mb-3 text-primary text-center mx-auto"></i>
                    <div class="card-body">
                        <div class="card-title fw-bold text-center text-uppercase fs-5 text-primary">Innovation</div>
                       <p class="fs-5">Innovation drives our approach to learning and development. We continuously adopt modern technologies, real-world projects, and creative teaching methods to provide practical and industry-relevant experiences. 
                       </p>
                    </div>
                </div>
            </div>

            <!-- Integrity -->
            <div class="col-lg-3 d-flex">
                <div class="card p-2 shadow mb-2">
                    <i class="fa-solid mt-3 fa-handshake fs-1 text-primary mt-3 mb-3 text-center mx-auto"></i>
                    <div class="card-body">
                        <div class="card-title fw-bold text-center fs-5 text-uppercase text-primary">Integrity</div>
                        <p class="fs-5">
                            Integrity is at the core of everything we do. We believe in honesty, transparency, and ethical practices in all our interactions with interns, mentors, and partners.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Professionalism -->
            <div class="col-lg-3 d-flex">
                <div class="card p-2 shadow mb-2">
                    <i class="fa-solid mt-3 fa-user-tie fs-1 text-primary mt-3 mb-3 text-center mx-auto"></i>
                    <div class="card-body">
                        <div class="card-title fw-bold text-center fs-5 text-uppercase text-primary">Professionalism</div>
                        <p class="fs-5">Professionalism is the foundation of our organization. We are committed to maintaining high standards of integrity, responsibility, and ethical conduct in every aspect of our work.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Continuous Learning -->
            <div class="col-lg-3 d-flex">
                <div class="card p-2 shadow mb-2">
                    <i class="fa-brands fa-leanpub fs-1 text-primary mt-3 mb-3 text-center mx-auto"></i>
                    <div class="card-body">
                        <div class="card-title fw-bold text-center fs-5 text-uppercase text-primary">Continuous Learning</div>
                        <p class="fs-5">
                            Continuous learning is the self-motivated, ongoing process of expanding knowledge and refining skills, both personally and professionally, to adapt to changing environments and foster growth.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php require 'footer.php' ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

