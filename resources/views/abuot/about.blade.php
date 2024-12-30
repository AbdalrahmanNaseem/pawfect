<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/AboutUs.css') }}">
    <title>Boostrap Login | Ludiflex</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img class="img-fluid" src="images/logo.svg" style="width: 75px;">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="fa-solid fa-bars text-end"></i>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#Home">Home</a>
                            <a class="dropdown-item" href="#Search">Search</a>
                            <a class="dropdown-item" href="#Rescue">Rescue</a>
                            <a class="dropdown-item" href="#Store">Store</a>
                            <a class="dropdown-item" href="#Shelters">Shelters</a>
                            <a class="dropdown-item" href="#Popular Questions">Popular Questions</a>
                        </div>
                    </li>
                    <!-- Home Dropdown -->

                    <!-- Search Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Search
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- Search Dropdown -->

                    <!-- Rescue Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rescue
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- Rescue Dropdown -->

                    <!-- Store Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Store
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- Store Dropdown -->
                </ul>
            </div>

            <!-- Login and signup button -->
            <div class="text-end">
                <a class="login btn" href="../Login things/Login.html" style="color: #22BB21;">Login</a>
                <a class="sign-btn text-white btn" href="../Sign-up things/Signup.html"
                    style="background-color: #4D9B36;">Sign Up</a>
            </div>
            <!-- Login and signup button -->

        </div>
    </nav>
    <!-- navbar -->


    <!-- Our Mission -->
    <section class="Our-mission text-light p-5 p-lg-0 pt-lg-5 text-center text-lg-start" id="Home">
        <div class="container">
            <div class="row align-items-center justify-content-center pb-4">

                <!-- header -->
                <div class="mb-3 text-center">
                    <h1>Our Mission</h1>
                    <hr class="w-25 m-auto" style="height: 3px; color: #EFF1FD;">
                </div>
                <!-- header -->

                <div class="col-lg-8 col-12">
                    <p class="lead my-4 ">
                        At Pawfect Home, we are driven by a singular mission: to create a world where every pet has
                        a loving home. Our platform bridges the gap between shelters and adopters, simplifying the
                        adoption process and providing a seamless experience for all parties involved.
                        We are committed to improving animal welfare by supporting shelters with tools to manage
                        adoptions efficiently, offering pet owners guidance on care, and connecting animal lovers
                        to the resources they need.
                    </p>
                    <p class="lead my-4 ">
                        Through innovative technology, we empower users to make informed decisions, access necessary
                        supplies, and learn how to care for their pets effectively.Our focus is on sustainability,
                        community building, and fostering a sense of shared responsibility for animal welfare.
                        By collaborating with shelters, veterinarians, and animal rescue groups, we aim to ensure
                        that no pet is left behind.
                    </p>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="images/400x300.png" class="img-fluid rounded-4 h-lg-50 ">
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission -->


    <!-- Meet the team -->
    <section class="my-5 p-lg-0 pt-lg-5 text-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <!-- header -->
                <div class="mb-3 text-center">
                    <h1 class="text-dark">Meet the team</h1>
                    <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                </div>
                <!-- header -->

                <!-- Member 1 -->
                <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Member 1</h5>
                            <p class="card-text mb-2">Front-End Developer</p>
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Member 1 -->

                <!-- Member 2 -->
                <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Member 2</h5>
                            <p class="card-text mb-2">UI/UX Designer</p>
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Member 2 -->

                <!-- Member 3 -->
                <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Member 3</h5>
                            <p class="card-text mb-2">Back-End Developer</p>
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Member 3 -->

                <!-- Member 4 -->
                <div class="col-lg-4 col-md-6 col-12 pt-4 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Member 4</h5>
                            <p class="card-text mb-2">Back-End Developer</p>
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Member 4 -->

                <!-- Member 5 -->
                <div class="col-lg-4 col-md-6 col-12 pt-4 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Member 5</h5>
                            <p class="card-text mb-2">Back-End Developer</p>
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-envelope-at-fill"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Member 5 -->
            </div>

        </div>

    </section>
    <!-- Meet the team -->


    <!-- Pet Care and Saving Tips -->
    <section class="my-5 p-lg-0 pt-lg-5 text-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <!-- Header -->
                <div class="pb-3">
                    <h2 class="text-dark">Pet Care and Saving Tips</h2>
                    <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                </div>
                <!-- Header -->

                <div class="col-lg-10 col-md-10 col-12 pt-2 text-light">
                    <div class="accordion shadow-lg text-dark" id="petCareAccordion">
                        <!-- Question 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="question1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#answer1" aria-expanded="true" aria-controls="answer1">
                                    How can I adopt a pet?
                                </button>
                            </h2>
                            <div id="answer1" class="accordion-collapse collapse show" aria-labelledby="question1"
                                data-bs-parent="#petCareAccordion">
                                <div class="accordion-body">
                                    Visit shelters or use online platforms to find your perfect pet match. Make sure to
                                    review the pet's profile and adoption requirements.
                                </div>
                            </div>
                        </div>
                        <!-- Question 1 -->

                        <!-- Question 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="question2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                                    What should I do if I find an injured pet?
                                </button>
                            </h2>
                            <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2"
                                data-bs-parent="#petCareAccordion">
                                <div class="accordion-body">
                                    Contact local animal rescue services or veterinarians immediately. Handle the pet
                                    carefully to avoid causing more harm.
                                </div>
                            </div>
                        </div>
                        <!-- Question 2 -->

                        <!-- Question 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="question3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                                    How do I take care of a pet at home?
                                </button>
                            </h2>
                            <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3"
                                data-bs-parent="#petCareAccordion">
                                <div class="accordion-body">
                                    Provide proper food, regular vet visits, and a safe, loving environment. Ensure your
                                    pet has sufficient exercise and mental stimulation.
                                </div>
                            </div>
                        </div>
                        <!-- Question 3 -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pet Care and Saving Tips -->





    <!-- Section 2: Meet the Team -->
    <!-- <section id="team" class="mb-5">
            <h2 class="text-center mb-4">Meet the Team</h2>
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-md-4 col-sm-6 team-member">
                    <img src="https://via.placeholder.com/100" alt="Team Member">
                    <h5>صلاح</h5>
                    <p>Front-End Developer</p>
                    <a href="#" target="_blank">LinkedIn</a>
                    <a href="#" target="_blank">GitHub</a>
                </div>
                <div class="col-md-4 col-sm-6 team-member">
                    <img src="https://via.placeholder.com/100" alt="Team Member">
                    <h5>علاء</h5>
                    <p>Back-End Developer</p>
                    <a href="#" target="_blank">LinkedIn</a>
                    <a href="#" target="_blank">GitHub</a>
                </div>
                <div class="col-md-4 col-sm-6 team-member">
                    <img src="https://via.placeholder.com/100" alt="Team Member">
                    <h5>بصول</h5>
                    <p>UI/UX Designer</p>
                    <a href="#" target="_blank">LinkedIn</a>
                    <a href="#" target="_blank">Portfolio</a>
                </div>
                <div class="col-md-4 col-sm-6 team-member">
                    <img src="https://via.placeholder.com/100" alt="Team Member">
                    <h5>Member 4</h5>
                    <p>Content Strategist</p>
                    <a href="#" target="_blank">LinkedIn</a>
                    <a href="#" target="_blank">GitHub</a>
                </div>
                <div class="col-md-4 col-sm-6 team-member">
                    <img src="https://via.placeholder.com/100" alt="Team Member">
                    <h5>Member 5</h5>
                    <p>Marketing Specialist</p>
                    <a href="#" target="_blank">LinkedIn</a>
                    <a href="#" target="_blank">Portfolio</a>
                </div>
            </div>
        </section> -->






    <!-- Footer -->
    <footer class="Footer text-white mt-5 p-lg-0 pt-lg-5">
        <div class="container text-center text-md-left">
            <div class="row justify-content-center">
                <!-- Brand and Tagline -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="images/logo-white.svg" class="img-fluid" style="width: 10rem">
                    <p>"Where every paw finds a home."</p>
                </div>
                <!-- Brand and Tagline -->

                <!-- Quick Links -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Quick Links</h5>
                    <p><a href="#">Adopt a Pet</a></p>
                    <p><a href="#">Shop Pet Supplies</a></p>
                    <p><a href="#">Donate & Sponsor</a></p>
                    <p><a href="#">Pet Care Guides</a></p>
                </div>
                <!-- Quick Links -->

                <!-- About Us -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">About Us</h5>
                    <p><a href="#">Our Mission</a></p>
                    <p><a href="#">Meet the Team</a></p>
                    <p><a href="#">FAQs</a></p>
                    <p><a href="#">Contact Us</a></p>
                </div>
                <!-- About Us -->

                <!-- Contact Info -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Stay Connected</h5>
                    <p><i class="fas fa-envelope mr-3"></i> pawfecthome@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +123 456 7890</p>
                    <p>
                        <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="mx-2"><i class="bi bi-twitter-x"></i></a>
                    </p>
                </div>
                <!-- Contact Info -->
            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12 mt-3">
                    <p class="text-center">© 2024 Pawfect Home. All rights reserved. "Together, we create paw-sitive
                        changes!"</p>
                </div>
            </div>
            <!-- Copyright -->

        </div>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
