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
    <link rel="stylesheet" href="{{ asset('assets/css/DonatePayment.css') }}">
    <title>Boostrap Login | Ludiflex</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="#" class="navbar-brand">
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


    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- start of left box -->
            <div class="col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-color: #4A9833;">
                <!-- header -->
                <div class="mb-3 text-center">
                    <h3 class="text-white">Make a Difference,<br> One Paw At a Time</h3>
                    <hr class="m-auto w-100" style="height: 3px; color: #EFF1FD;">
                </div>
                <!-- header -->

                <div class="featured-image mb-3">
                    <img src="{{ asset('assets/images/xdd.png') }}" class="img-fluid" style="height: 350px;">
                </div>
            </div>
            <!-- end of left box -->

            <!-- start of right box -->
            <div class="col-md-7 right-box">
                <form action="" method="">
                    <div class="row align-items-center justify-content-center">
                        <div class="header-text mb-4 text-center">
                            <h2>Make a Difference Today</h2>
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="cardName" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Name on Card">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="cardNumber"
                                class="form-control form-control-lg bg-light fs-6" placeholder="Card Number">
                        </div>
                        <div class="input-group mb-4" style="width: 50%;">
                            <input type="text" name="cardDate" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Card Date (mm/yy)">
                        </div>
                        <div class="input-group mb-4" style="width: 50%;">
                            <input type="text" name="cardCvv" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Card CVV">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="Amount" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Amount of Donation">
                        </div>

                        <div class="input-group mt-4">
                            <!-- <button type="submit" class="btn-creat btn btn-lg w-100 fs-6 text-white">Create Account</button> -->
                            <a href="../Login things/Login.html" class="btn btn-lg w-100 fs-6 text-white"
                                style="background-color: #4A9833;">Donate now</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end of right box -->

        </div>
        <!-- end of row -->

    </div>
    <!-- end of container -->


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
