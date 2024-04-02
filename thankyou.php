<?php
    ini_set('display_errors', 0); 
    include("database.php");
    if(isset($_POST["submit"])) {

        $studentname=$_POST['studentname'];
        $contactno=$_POST["contactno"];
        $emailid=$_POST["emailid"];
        $state=$_POST["state"];

        $query="create table if not exists studentdetails (studentid int not null auto_increment primary key,studentname varchar(100),contactno long,emailid varchar(100),state varchar(100),studenton datetime not null default now())";
        mysqli_query($con,$query);

        $selquery="insert into studentdetails(studentname,contactno,emailid,state)values('".$studentname."','".$contactno."','".$emailid."','".$state."') ";
        $res=mysqli_query($con,$selquery);
        
        if($res==TRUE)
        {
            // $url="https://wa.me/".$contactno."/?text=Thanks%20for%20booking";
            header("Location:thankyou.php");
        }
        else{
            echo "There is an Error";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Join Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Online Join Academy" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body >
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <!-- <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</small> -->
                <!-- <small class=" text-white fs-5 fw-bold">Join Online Academy</small> -->
            </div>
            <div class="col-lg-6 px-5 text-end">
                <!-- <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small> -->
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:8688024352" class="text-dark text-decoration-none">+91 8688024352</a></small>
            </div>
        </div>

        <nav class="navbar  navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <div href="index.php" class="navbar-brand ms-4 ms-lg-0 d-flex">
                <img src="img/jacademy.png" alt="logo" class="academylogo">    <div class="d-block d-lg-none" style="margin-left:50%;"><img src="img/i2global_logo.jpg" alt="logo" class="" width="100%" height="auto"></div>
            </div>

            <button type="button" class="navbar-toggler me-4 d-none" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Services</a>
                    <a href="#" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex me-5" style="margin:0% 10% 0% 0%;">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://facebook.com/profile.php?id=61556038930973">
                        <small class="fab fa-facebook-f text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="#">
                        <small class="fab fa-twitter text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3 me-4" href="#">
                        <small class="fab fa-linkedin-in text-primary"></small>
                    </a>
                </div>
            </div>

                <img src="img/i2global_logo.jpg" alt="logo" class="position-absolute d-lg-block d-none ilogo"  style="margin:0% 0% 0% 89%;">

        </nav>
    </div>
    <!-- Navbar End -->
    
    <div class="container-fluid " style="margin-top:13%;">
                <div class="row ">
                    <div class="col-10 col-md-6 col-lg-4 offset-1 offset-md-3 offset-lg-4">  
                        <img src="img\thank.jpg" class="thanks ">
                    </div>
                </div>
            </div>
    <!-- Footer Start -->
    <div class="container-fluid footer-bg text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:8688024352" class="text-white text-decoration-none">+91 8688024352</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://facebook.com/profile.php?id=61556038930973"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a  href="#" class="btn btn-link" >About Us</a>
                    <a  href="#" class="btn btn-link" >Contact Us</a>
                    <a  href="#" class="btn btn-link" >Our Services</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    
                    <div class="position-relative w-100 mb-3">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="text-white btn greencolor py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <a href="tel:8688024352" class="orangebutton text-white btn-lg-square rounded-circle bg-warning call-button text-decoration-none"><i class='bx bx-phone-call bx-md'></i></i></a>

    <a href="https://wa.me/8688024352/?text=" class="text-white btn-lg-square rounded-circle greencolor whatsapp-button text-decoration-none"><i class='bx bxl-whatsapp bx-md'></i></a>

    <!-- Back to Top -->
    <a href="#" class="bg-warning text-white btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>