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
                         <a class="dropdown-item" href="../Adoption/Adoption.html">Adoption</a>
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
                         <a class="dropdown-item" href="#">Store</a>
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
