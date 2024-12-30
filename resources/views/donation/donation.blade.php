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
    <link rel="stylesheet" href="{{ asset('assets/css/Donate.css') }}">
    <title>Boostrap Login | Ludiflex</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img class="img-fluid" src="{{ asset('assets/images/logo.svg') }}" style="width: 75px;">
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

    <!-- Rescue -->
    <section class="Rescue text-light p-5 p-lg-0 pt-lg-5 text-center text-lg-start" id="Home">
        <div class="container">
            <div class="row align-items-center justify-content-center pb-4">

                <!-- header -->
                <div class="mb-3 text-center">
                    <h1>Rescue</h1>
                    <hr class="m-auto" style="height: 3px; width: 15%; color: #EFF1FD;">
                </div>
                <!-- header -->

                <div class="col-lg-8 col-12">
                    <p class="lead my-4 ">
                        At Pawfect Home, we believe every animal deserves a second chance.
                        Our Rescue section is dedicated to helping injured, abandoned, or sick pets
                        get the care they need. Whether it's providing urgent medical attention,
                        reuniting lost pets with their families, or offering them a safe place to recover,
                        our mission is to save lives and create a brighter future for animals in need.
                    </p>
                    <p class="lead my-4 ">
                        Join us in making a difference—report a pet in distress, support rescue operations,
                        or adopt a rescued pet to give them the loving home they deserve. Together,
                        we can be the voice for those who cannot speak.
                    </p>
                    <a class="btn bg-white mb-4" href="#Shelters" style="color: #4D9B36; font-weight: bold;">Save a
                        Life Today</a>
                </div>
                <div class="col-lg-4 col-12">
                    <img src="{{ asset('assets/images/400x300.png') }}" class="img-fluid rounded-4 h-lg-50 ">
                </div>
            </div>
        </div>
    </section>
    <!-- Rescue -->


    <!-- Shelters -->
    <section class="Shelters my-5 p-lg-0 pt-lg-5 text-center" id="Shelters">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <!-- header -->
                <div class="mb-3 text-center">
                    <h1 class="text-dark">Explore Shelters Ready to Help</h1>
                    <hr class="w-50 m-auto" style="height: 3px; color: #4D9B36;">
                </div>
                <!-- header -->

                <!-- Member 1 -->
                <div class="col-lg-4 col-md-6 col-12 pt-2 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Shelter 1</h5>
                            <p class="mb-2"><i class="bi bi-envelope-fill"></i> Shelter1@gmail.com</p>
                            <p class="mb-2"><i class="bi bi-telephone-fill"></i> +123 456 7890</p>
                            <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                            <a href="#" class="btn btn-light text-center mt-3">
                                Donate Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
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
                            <h5 class="card-title mb-3">Shelter 2</h5>
                            <p class="mb-2"><i class="bi bi-envelope-fill"></i> Shelter2@gmail.com</p>
                            <p class="mb-2"><i class="bi bi-telephone-fill"></i> +123 456 7890</p>
                            <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                            <a href="#" class="btn btn-light text-center mt-3">
                                Donate Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
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
                            <h5 class="card-title mb-3">Shelter 3</h5>
                            <p class="mb-2"><i class="bi bi-envelope-fill"></i> Shelter3@gmail.com</p>
                            <p class="mb-2"><i class="bi bi-telephone-fill"></i> +123 456 7890</p>
                            <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                            <a href="#" class="btn btn-light text-center mt-3">
                                Donate Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
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
                            <h5 class="card-title mb-3">Shelter 4</h5>
                            <p class="mb-2"><i class="bi bi-envelope-fill"></i> Shelter4@gmail.com</p>
                            <p class="mb-2"><i class="bi bi-telephone-fill"></i> +123 456 7890</p>
                            <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                            <a href="#" class="btn btn-light text-center mt-3">
                                Donate Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
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
                            <h5 class="card-title mb-3">Shelter 5</h5>
                            <p class="mb-2"><i class="bi bi-envelope-fill"></i> Shelter5@gmail.com</p>
                            <p class="mb-2"><i class="bi bi-telephone-fill"></i> +123 456 7890</p>
                            <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                            <a href="#" class="btn btn-light text-center mt-3">
                                Donate Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Member 5 -->

                <!-- Member 6 -->
                <div class="col-lg-4 col-md-6 col-12 pt-4 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top mx-auto d-block"
                            alt="Drools 3KG">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Shelter 6</h5>
                            <p class="mb-2"><i class="bi bi-envelope-fill"></i> Shelter6@gmail.com</p>
                            <p class="mb-2"><i class="bi bi-telephone-fill"></i> +123 456 7890</p>
                            <a href="#" class="mx-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-whatsapp"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-geo-alt-fill"></i></a>
                            <a href="#" class="btn btn-light text-center mt-3">
                                Donate Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Member 6 -->
            </div>

        </div>

    </section>
    <!-- Shelters -->


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
                    @if (!Route::has('donate'))
                        <p><a href="{{ route('donate') }}">Donate & Sponsor</a></p>
                    @endif
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
