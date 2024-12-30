<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="Signup.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/Signup.css') }}?v={{ time() }}">
    <title>Boostrap Login | Ludiflex</title>
</head>



<body>

    <!-- start of container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- start of row -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- start of left box -->
            <div class="col-lg-6 col-md-5 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background-color: #4A9833;">
                <div class="text-white fs-3 mt-3" style="font-weight: 600;  ">
                    <p>Join us</p>
                    <hr>
                </div>
                <div class="featured-image mb-3">
                    <img src="{{ asset('assets/images/xdd.png') }}" class="img-fluid" style="height: 500px;">
                </div>
            </div>
            <!-- end of left box -->

            <!-- start of right box -->
            <div class="col-lg-6 col-md-7 right-box">
                <form action="" method="">
                    <div class="row align-items-center justify-content-center">
                        <div class="header-text mb-4 text-center">
                            <h2>Creat Account</h2>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="FirstName" class="form-control form-control-lg bg-light fs-6"
                                placeholder="First Name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="LastName" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Last Name">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Email Address">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password">
                        </div>
                        <div class="input-group mb-4">
                            <input type="text" name="PhoneNumber" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Phone Number">
                        </div>

                        <div class="row text-start mb-4" style="width:90%">
                            <small>Already have an account? <a href="../Login things/Login.html">Login</a></small>
                        </div>




                        <div class="input-group mb-3">
                            {{-- <button type="submit" class="btn-creat btn btn-lg w-100 fs-6 text-white">Create
                                Account</button> --}}
                            <a href="../Login things/Login.html"
                                class="btn-creat btn btn-lg w-100 fs-6 text-white">Create Account</a>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6" style="background-color: #BDBDBD !important;"><img
                                    src="{{ asset('assets/images/google.png') }}" style="width:20px"
                                    class="me-2"><small>Login with
                                    Google</small></button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- end of right box -->

        </div>
        <!-- end of row -->

    </div>
    <!-- end of container -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
