<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./css/Navbar.css">
    <link rel="stylesheet" href="./css/RightsideNavbar.css">
    <link rel="stylesheet" href="./css/LeftSideNavbar.css">
    <link rel="stylesheet" href="./css/MainBody.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Risque&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>

    <!-- start Navbar coding -->
    <div class="container-fluid bg-dark py-2 d-lg-block d-none">
        <!--Navbar page -->
        <?php include_once("./pages/Navbar.php") ?>
    </div>
    <!-- end Navbar coding -->

    <!--start header coding -->
    <div class="container-fluid header">
        <div class="row h-100">
            <div class="col-md-6 d-flex align-items-center p-4 mb-4">
                <div>
                    <h3 class="text-light mb-4 font-weight-bold">Share & grow the world's knowledge!</h3>
                    <h5 class="text-light" style="line-height: 25px;letter-spacing:1px">We want to connect the people who have knowledge to the people who need it, to bring together people with different perspectives so they can understand each other better, and to empower everyone to share their knowledge.</h5>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center mb-4">
                <button class="btn btn-primary px-4">Create A New Account</button>
            </div>
        </div>
    </div>
    <!--end header coding -->





    <!-- start Body Coding-->
    <div class="container-fluid px-0 main-container">
        <!-- Start Left Sidenavbar Coding -->
        <div class="float-left sidenavbar">

        </div>
        <!--End Left Sidebar coding -->
        <!--Start Other Part Coding-->
        <div class="container-fluid px-0">
            <div class="row">
                <!-- Start Main body Coding -->
                <div class="col-lg-9 bg-white px-0" style="height: 100vh;">
                    <!--Start body Navbar Coding -->
                    <div class="container-fluid bg-white border-bottom" style="height: 60px;">
                        <button class="btn sidenavbar-toggler d-lg-none"><i class="fa fa-bars"></i></button>
                    </div>
                    <!--End body Navbar Coding -->

                    <!--Start Section Part Coding -->
                    <div class="container bg-white">
                        <h1>sourav</h1>
                    </div>
                    <!--End Section Part Coding -->
                </div>
                <!-- End Main body Coding -->

                <!-- Start Right Sidebar coding-->
                <div class="col-lg-3 right-sidenavbar">
                    <!--Right Sidebar page-->
                    <?php include("./pages/RightNavbar.php")  ?>
                </div>
                <!-- End Right Sidebar coding-->
            </div>
        </div>
        <!-- End Other Part Coding -->
    </div>
    <!-- End Body Coding-->



    <script src="./js/script.js"></script>
</body>

</html>