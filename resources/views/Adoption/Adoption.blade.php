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
    <link rel="stylesheet" href="{{ asset('assets/css/Adoption.css') }}">
    <title>Pawfect Home</title>
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
                    <a class="nav-link" href="../Home/index.html">
                        Home
                    </a>

                    <!-- Home Dropdown -->

                    <!-- Search Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Adoption
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Adoption</a>
                            <a class="dropdown-item" href="#">My Cart</a>
                        </div>
                    </li>
                    <!-- Search Dropdown -->

                    <!-- Rescue Dropdown -->
                    <a class="nav-link" href="../Donate/Donate.html">
                        Rescue
                    </a>
                    <!-- Rescue Dropdown -->

                    <!-- Store Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Store
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Store/Store.html">Store</a>
                            <a class="dropdown-item" href="#">My cart</a>
                        </div>
                    </li>
                    <!-- Store Dropdown -->

                    <!-- About us Dropdown -->
                    <a class="nav-link" href="../About us/AboutUs.html">
                        About Us
                    </a>

                    <!-- Home Dropdown -->
                </ul>
            </div>

            <!-- Login and signup button -->
            <div class="text-end">
                <a class="login btn" href="../Login things/Login.html" style="color: #22BB21;">Login</a>
                <a class="sign-btn btn text-white" href="../Sign-up things/Signup.html"
                    style="background-color: #4D9B36;">Sign Up</a>
            </div>
            <!-- Login and signup button -->

        </div>
    </nav>
    <!-- navbar -->

    <!-- Home -->
    <section class="Home bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start" id="Home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <h1>Find a Loving Home for Every Pet</h1>
                    <p class="lead my-4 ">
                        We focus on connecting pets with caring adopters to give them a second chance at a
                        happy life. Our goal is to simplify the adoption process, providing a platform that
                        empowers users to find their perfect furry companion. Together, we can create a brighter
                        future for pets and the families who welcome them into their hearts and homes.
                        <img src="images/Vector.svg" class="img-fluid">
                    </p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <img class="img-fluid  mb-4 rounded-5 " src="images/Rectangle 4.svg" />
                </div>
            </div>
        </div>
    </section>
    <!-- Home -->

    <!-- Store -->
    <section class="Store my-5 p-lg-0 pt-lg-5 text-center" id="Store">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <!-- Header -->
                <div class="pb-3">
                    <h1 class="text-dark">Adoption</h1>
                    <hr class="w-25 m-auto" style="height: 3px; color: #4D9B36;">
                </div>

                <div class="row">
                    <div class="col-8 align-items-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn text-white w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" style="background-color: #4D9B36;">
                            <i class="bi bi-sliders2"></i>
                            FILTER
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-white" style="background-color: #4D9B36;">
                                        <h5 class="modal-title" id="exampleModalLabel">Find Your Perfect Match</h5>
                                        <button type="button" class="btn text-white" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i class="bi bi-x-lg" style="font-size: 20px;"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-6">
                                                    <p class="mb-2 fs-5">Pet Type</p>
                                                    <select class="form-select">
                                                        <option selected value="any">Any</option>
                                                        <option value="cats">Cats</option>
                                                        <option value="dogs">Dogs</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-2 fs-5">Age</p>
                                                    <select class="form-select">
                                                        <option selected value="any">Any</option>
                                                        <option value="puppy">Puppy</option>
                                                        <option value="young">Young</option>
                                                        <option value="adult">Adult</option>
                                                        <option value="senior">Senior</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 mt-4">
                                                    <p class="mb-2 fs-5">Color</p>
                                                    <select class="form-select">
                                                        <option selected value="any">Any</option>
                                                        <option value="black">Black</option>
                                                        <option value="white">White</option>
                                                        <option value="brown">Brown</option>
                                                        <option value="graySilver">Gray/Silver</option>
                                                        <option value="goldenOrange">Golden/Orange</option>

                                                    </select>
                                                </div>
                                                <div class="col-6 mt-4">
                                                    <p class="mb-2 fs-5">Gender</p>
                                                    <select class="form-select">
                                                        <option selected value="any">Any</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 mt-4">
                                                    <p class="mb-2 fs-5">Size</p>
                                                    <select class="form-select">
                                                        <option selected value="any">Any</option>
                                                        <option value="small">Small (0-25 lbs)</option>
                                                        <option value="medium">Medium (26-60 lbs)</option>
                                                        <option value="large">Large (61-100 lbs)</option>
                                                        <option value="extraLarge">Extra Large (101 lbs or more)
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-6 mt-4">
                                                    <p class="mb-2 fs-5">Breed</p>
                                                    <select class="form-select">
                                                        <option selected value="any">Any</option>
                                                        <option value="bestSelling">Best selling</option>
                                                        <option value="AlpAtoZ">Alphabetically, A-Z</option>
                                                        <option value="AlpZtoA">Alphabetically, Z-A</option>
                                                        <option value="priceLtoH">Price, low to high</option>
                                                        <option value="priceHtoL">Price, high to low</option>
                                                        <option value="dateOtoN">Date, old to new</option>
                                                        <option value="dateNtoO">Date, new to old</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn mt-4 w-75 text-white"
                                                style="background-color: #4D9B36;">Filter</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="" class="col-4 d-flex align-items-center">
                        <select class="form-select">
                            <option selected value="featured">Featured</option>
                            <option value="AlpAtoZ">Alphabetically, A-Z</option>
                            <option value="AlpZtoA">Alphabetically, Z-A</option>
                            <option value="dateOtoN">Date, old to new</option>
                            <option value="dateNtoO">Date, new to old</option>
                        </select>
                    </form>
                </div>
                <!-- Header -->

                <!-- First item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="Pet Image">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- First item -->

                <!-- Second item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second item -->

                <!-- Third item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third item -->

                <!-- Foruth item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Foruth item -->

                <!-- five item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- five item -->

                <!-- six item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- six item -->

                <!-- seven item -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-12 pt-3 text-light">
                    <div class="card mx-auto shadow-lg" style="width: 18rem;">
                        <img src="images/400x300.png" class="card-img-top mx-auto d-block" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bella</h5>
                            <p class="card-text fs-5">
                                3 years <i class="bi bi-dot"></i>
                                Golden <i class="bi bi-dot"></i>
                                Female
                                Medium <i class="bi bi-dot"></i>
                                Retriever
                            </p>

                            <div class="d-flex justify-content-around align-items-center mt-3">
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Adopt
                                    now</a>
                                <a href="#" class="btn bg-light text-center" style="color:#4D9B36;">Add to
                                    cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seven item -->

            </div>
        </div>
    </section>
    <!-- Store -->


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
                    <p><a href="../Store/Store.html">Shop Pet Supplies</a></p>
                    <p><a href="../Donate/Donate.html">Rescue & Donate</a></p>
                    <p><a href="../Donate/Donate.html">Pet Care Guides</a></p>
                </div>
                <!-- Quick Links -->

                <!-- About Us -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">About Us</h5>
                    <p><a href="../About us/AboutUs.html">Our Mission</a></p>
                    <p><a href="../About us/AboutUs.html">Meet the Team</a></p>
                    <p><a href="../About us/AboutUs.html">FAQs</a></p>
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
