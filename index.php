
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Join Online Academy</title>
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
    <script>
    
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        //    
          if (validateForm()) {
               $("#myForm").submit();
          } else {
            event.preventDefault();
          }
      });
  
      function validateForm() {
          var isValid = true;
          var studentname = $("#studentname").val();
          var contactno = $("#contactno").val();
          var emailid= $("#emailid").val();
          var state= $("#state").val();
          if (studentname === "") {
              $("#snameError").text("Studentname is required");  
              $("#studentname").css({"border": "1px solid red"});
              $("#snameError").css({"color": "red"});
              isValid = false;
          } else {
             $("#snameError").text("Studentname");
              $("#snameError").css({"color": "green"});
              $("#studentname").css({"border": "1px solid green"});
          }
          if ( contactno==="") {
              $("#contactnoError").text("Contact is required");  
              $("#contactno").css({"border": "1px solid red"});
              $("#contactnoError").css({"color": "red"});
              isValid = false;
          } else {
              $("#contactnoError").text("Contact");
              $("#contactnoError").css({"color": "green"});
              $("#contactno").css({"border": "1px solid green"});
          }
          if ( emailid==="") {
              $("#emailError").text("Email is required");  
              $("#emailid").css({"border": "1px solid red"});
              $("#emailError").css({"color": "red"});
              isValid = false;
          } else {
              $("#emailError").text("Email"); 
              $("#emailError").css({"color": "green"});
              $("#emailid").css({"border": "1px solid green"});
          }
          if ( state==="") {
              $("#stateError").text("State is required");  
              $("#state").css({"border": "1px solid red"});
              $("#stateError").css({"color": "red"});
              isValid = false;
          } else {
              $("#emailError").text("Email"); 
              $("#stateError").css({"color": "green"});
              $("#state").css({"border": "1px solid green"});
          }
          return isValid;
      }

  
  });
  
  </script>

</head>

<body class="mentors-area">
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
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href=" https://facebook.com/profile.php?id=61556038930973">
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img\carousel-img-1.jpg" alt="Image">
                    <div class="carousel-caption" >
                        <div class="container" >
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="d-inline-block border border-white rounded text-white fw-semi-bold py-1 px-3 animated slideInDown">Welcome to</p>
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">Join Online Academy</h1>
                                    <a href="#" class=" orangebutton text-white text-decoration-none py-3 px-5 animated slideInDown">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img\carousel-img-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7">
                                    <p class="d-inline-block border border-white rounded text-white fw-semi-bold py-1 px-3 animated slideInDown bg-warning">Welcome to</p>
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">LEARN GROW ACHIEVE</h1>
                                    <a href="" class=" orangebutton text-white text-decoration-none py-3 px-5 animated slideInDown">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    

    <!-- Facts Start -->
    <div class="container-fluid facts mb-5 innershadow">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">1450</h1>
                    <span class="fs-5 text-white">Students Taught</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">10</h1>
                    <span class="fs-5 text-white">10 Years Exp</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-4 text-white" data-toggle="counter-up">7100</h1>
                    <span class="fs-5 text-white">Hours Taught</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-award fa-3x text-white mb-3"></i>
                    <div class="d-flex offset-5 offset-md-4"><h1 class="display-4 text-white" data-toggle="counter-up">96 </h1><h1 class="display-4 text-white">%</h1></div>
                    <span class="fs-5 text-white offset-0 offset-md-2">Success Rate</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

<!-- Enquiry form start -->
<div class="container-fluid mb-4">
        <div class="container">
            <div class="col-xl-10 col-lg-11 mx-auto login-container">
                <div class="row">
                   
                    <div class="col-lg-5 col-md-6 no-padding">
                        <div class="login-box">
                            <h5>Welcome Back!</h5>
                            <form action="thankyou.php" method="post" id="myForm">
                                <div class="login-row row no-margin">
                                    <label for="sname" id="snameError">Student Name</label>
                                    <input type="text" class="form-control form-control-sm" name="studentname" id="studentname" pattern="^[a-zA-Z][.\sa-zA-Z.]{1,50}$">
                                </div>

                                <div class="login-row row no-margin">
                                    <label for="contactno" id="contactnoError">Contact Number</label>
                                    <input type="text" class="form-control form-control-sm" name="contactno" id="contactno" pattern="^[0-9]{10}$">
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="email" id="emailError">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="emailid" id="emailid" >
                                </div>
                                <div class="login-row row no-margin">
                                    <label for="state" id="stateError">State</label>
                                    <input type="text" class="form-control form-control-sm" name="state" id="state" >
                                </div>
                                <div class="text-center mt-3 my-auto">
                                    <input type="submit" class="bluecolor rounded-pill w-75 p-1" name="submit" value="SUBMIT" id="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    
                     <div class="col-lg-7 col-md-6 img-box text-center">
                        <img src="img/sideimg.png" alt="sideimg" class="login-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- course start -->
    <div class="container courses-topic ">
        <div class="d-flex justify-content-center">          
                <div class="col-10 col-lg-6 nav btn-group nav-pills border rounded-pill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="active nav-link btn btn-sm col-4 col-lg-2 rounded-pill fw-bold bx bxs-graduation bx-xs text-white" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> JEE</div>
                    <div class="btn btn-sm nav-link col-4 col-lg-2  rounded-pill fw-bold  bx bx-plus-medical bx-xs text-nowrap text-white" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> NEET</div>
                    <div class="btn btn-sm nav-link col-4 col-lg-2  rounded-pill fw-bold  bx bxs-chalkboard bx-xs text-white" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"> TT</div>
                </div>
        </div>

    <div class="tab-content " id="v-pills-tabContent">
        <div class="tab-pane fade show active my-3" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="container-fluid">
                    <div class="row border-0">
                        <div class="col-12 col-lg-6 "> 
                                <div class="text-center mt-3"><div class="bluecolor w-50 badge fs-6">JEE MAIN</div></div>
                                <div class="list list-row m-0 p-0" id="sortable" data-sortable-id="0" aria-dropeffect="move">
                                    <div class="list-item bluecolor" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 gd-primary">Q</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-primary text-white text-decoration-none" data-abc="true" >Qualified Admission</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bxs-star text-white p-1"> <span class="text-white">Indian Institute of Information Technology (IIITs)</span> </li>
                                                    <li class="bx bxs-star text-white p-1"> <span class="text-white">National Institute of Technology (NITs)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-2.png" alt="crc" class="crc-img">
                                        </div>
                                    </div>
                                    <div class="list-item greencolor" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 bg-success ">E</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-success text-white text-decoration-none" data-abc="true" >Exam Pattern</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bxs-hand-right text-white p-1"> <span class="text-white">90 Multiple Choice Questions</span> </li>
                                                    <li class="bx bxs-hand-right text-white p-1"> <span class="text-white">3 Hours Time Duration</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-1.png" alt="crc" class="crc-img">
                                        </div>
                                    </div> 
                                    <div class="list-item cc-2" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 bg-danger">S</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-danger text-white text-decoration-none" data-abc="true" >Syllabus</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bx-right-arrow-circle text-white p-1"> <span class="text-white">Physics</span> </li>
                                                    <li class="bx bx-right-arrow-circle text-white p-1"> <span class="text-white">Chemistry</span></li>
                                                    <li class="bx bx-right-arrow-circle text-white p-1"> <span class="text-white">Maths</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-3.png" alt="crc" class="crc-img">
                                        </div>
                                    </div>                                
                                    <div class="list-item orangebutton" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 bg-warning">Q</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-warning text-white text-decoration-none" data-abc="true" >Question Pattern</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bxs-book text-white p-1"> <span class="text-white"> Each section has 30 questions</span> </li>
                                                    <li class="bx bxs-book text-white p-1"> <span class="text-white">4 points for each correct answer</span></li>
                                                    <li class="bx bxs-book text-white p-1"> <span class="text-white"> 1 point is deducted for each wrong answer</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-4.png" alt="crc" class="crc-img">
                                        </div>
                                    </div> 
                                </div>
                        </div>    
                        <div class="col-12 col-lg-6">  
                            <div class="text-center mt-3"><div class="orangebutton w-50 badge fs-6">JEE ADVANCE</div></div>
                                <div class="list list-row m-0" id="sortable" data-sortable-id="0" aria-dropeffect="move">
                                    <div class="list-item bluecolor" >
                                        <div><a href="#" data-abc="true"><span class="avatar rounded-circle p-2 gd-primary">Q</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-primary text-white text-decoration-none" data-abc="true" >Qualified Admission</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bxs-star text-white p-1"> <span class="text-white">Indian Institute of Technology (IITs)</span> </li>
                                                    <li class="bx bxs-star text-white p-1"> <span class="text-white">Indian School of Mines(ISM)</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-5.png" alt="crc" class="crc-img">
                                        </div>
                                    </div>
                                    <div class="list-item greencolor" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 bg-success ">E</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-success text-white text-decoration-none" data-abc="true" >Exam Pattern</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bxs-hand-right text-white p-1"> <span class="text-white">2 Separate exams</span> </li>
                                                    <br>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-6.png" alt="crc" class="crc-img">
                                        </div>
                                    </div> 
                                    <div class="list-item cc-2" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 bg-danger">S</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-danger text-white text-decoration-none" data-abc="true" >Syllabus</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bx-right-arrow-circle text-white p-1"> <span class="text-white">Physics</span> </li>
                                                    <li class="bx bx-right-arrow-circle text-white p-1"> <span class="text-white">Chemistry</span></li>
                                                    <li class="bx bx-right-arrow-circle text-white p-1"> <span class="text-white">Maths</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-7.png" alt="crc" class="crc-img">
                                        </div>
                                    </div>                                
                                    <div class="list-item orangebutton" >
                                        <div><a href="#" data-abc="true" class="text-white text-decoration-none"><span class="avatar rounded-circle p-2 bg-warning">Q</span></a></div>
                                        <div class="flex">
                                            <a href="#" class="badge bg-warning text-white text-decoration-none" data-abc="true" >Question Pattern</a>
                                            <div class="text-muted text-sm h-1x">
                                                 <ul class="list-group list-group-flush text-dark">
                                                    <li class="bx bxs-book text-white p-1"> <span class="text-white"> 3-hour duration </span> </li>
                                                    <li class="bx bxs-book text-white p-1"> <span class="text-white">  3 sections</span></li>
                                                    <br>
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="img\courses\crc-8.png" alt="crc" class="crc-img">
                                        </div>
                                    </div> 
                               
                                </div>
                        </div>      
                    </div> 
            </div>
        </div>       
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
        
    <div class="container ">
            <div class="row justify-content-evenly">
                <div class="col-10 col-md-5 col-lg-5">
                    <div class="circle-card cc-1">
                        <div class="circle"> </div> 
                        <div class="content mt-2"> 
                            <div class="text-whtie fs-6 fw-bold"> Qualified Admission</div>
                            <div class="text-white " >
                                <ul>
                                    <li class="bx bxs-star p-1"><span >Bachelor of Medicine and Bachelor of Surgery (MBBS)</span></li>
                                    <li class="bx bxs-star p-1"><span > Bachelor of Dental Surgery (BDS)</span></li>
                                </ul>
                            </div>
                        </div> 
                        <img class="border border-4 border-info" src="img\circle-1.png"> 
                    </div>
                </div>
                <div class="col-10 col-md-5 col-lg-5 offset-md-2 offset-lg-2">
                    <div class="circle-card cc-2">
                        <div class="circle"> </div> 
                        <div class="content mt-2">
                            <div class="text-white fs-6 fw-bold" >Exam Pattern </div>
                                <ul>
                                    <li class="bx bxs-star p-1 text-nowrap"><span > 3 Hours Time Duration </span></li>
                                    <li class="bx bxs-star p-1"><span > 180 Multiple Choice Questions </span></li>
                                    <li class="bx bxs-star p-1"><span > 45 Questions from each subject</span></li>
                                </ul>
                            </div>
                        <img class="border border-4 border-danger" src="img\circle-2.png"> 
                    </div>
                </div>
                <div class="col-10 col-md-5 col-lg-5">
                    <div class="circle-card cc-3">
                        <div class="circle"> </div> 
                        <div class="content mt-2"> 
                            <div class="text-whtie fs-6 fw-bold">Question Pattern</div>
                                <ul>
                                    <li class="bx bxs-star p-1 text-nowrap"><span > 3 Hours Time Duration </span></li>
                                    <li class="bx bxs-star p-1 text-wrap"><span > 180 Multiple Choice Questions </span></li>
                                    <li class="bx bxs-star p-1"><span > 45 Questions from each subject</span></li>
                                </ul>
                        </div> 
                        <img class="border border-4 border-warning" src="img\circle-3.png"> 
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="tab-pane fade  my-3" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <div class="container service-24 graycolor pt-4 px-4" style="border-radius:20px;">
                        <div class="row wrap-service-24">
                            <div class="col-lg-3 col-md-6">
                                <div class="card rounded card-shadow border  mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\certificate.png" alt="certificate">
                                        <h6 class="ser-title">Diploma in Early Childhood Education</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-shadow border mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\online-education-1.png" alt="img2">
                                        <h6 class="ser-title">Advanced Diploma in Early Childhood Education</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-shadow border mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\education.png" alt="img3">
                                        <h6 class="ser-title">Professional development qualification</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-shadow border mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\online-learning-1.png" alt="img4">
                                        <h6 class="ser-title">Tutors provide great academic support </h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-shadow border mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\online-education.png" alt="img4" >    <br>                    
                                        <h6 class="ser-title">Practical Training /<br> Internship</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-shadow border mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\knowledge.png" alt="img4">  
                                        <h6 class="ser-title">Tutors are constantly in touch with trainees</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card card-shadow border mb-4">
                                    <a href="javascript:void(0)" class="card-hover py-4 text-center d-block rounded"> 
                                        <img src="img\icons\diploma.png" alt="img4">  
                                        <h6 class="ser-title">Academic Team is highly accomplished</h6>
                                    </a>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-12 col-lg-3 col-md-6 align-items-center ">
                                <div class="text-center mb-4">
                                    <a href="#" class="card card-hover  border py-4 text-center d-block rounded"> 
                                        <h6 class="ser-title">Read More</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container ">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-white fw-semi-bold py-1 px-3 ">Our Expert Team</p>
                <h1 class="display-5 mb-5 text-white">OUR MENTORS</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item  pb-5">
                    <div class="mentors-card">
                        <div class="face front-face">
                            <img src="img\mentors\biology.webp" alt="a" class="profile">
                            <div class="pt-3 text-uppercase name fw-bold">
                                Ambati Sravani
                            </div>
                            <div class="designation">BIOLOGY</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial display-6 fw-bold">MDS
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
                <div class="project-item pb-5">
                    <div class="mentors-card">
                        <div class="face front-face">
                            <img src="img\mentors\physics.webp"
                                alt="B" class="profile">
                            <div class="pt-3 text-uppercase name  fw-bold">
                                Nishant Soni
                            </div>
                            <div class="designation">PHYSICS</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial display-6 fw-bold">B.Tech <br> NIT-Bhopal
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
                <div class="project-item pb-5">
                <div class="mentors-card">
                    <div class="face front-face">
                        <img src="img\mentors\chemistry.webp"
                            alt="" class="profile">
                        <div class="pt-3 text-uppercase name  fw-bold">
                            Manjunath A Y
                        </div>
                        <div class="designation">CHEMISTRY</div>
                    </div>
                    <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial display-6 fw-bold">B.Tech <br> NIT-Suratkal
                        </div>
                        <span class="fas fa-quote-right"></span>
                    </div>
                </div>
                </div>
                <div class="project-item  pb-5">
                    <div class="mentors-card">
                        <div class="face front-face">
                            <img src="img\mentors\maths-2.webp"
                                alt="" class="profile">
                            <div class="pt-3 text-uppercase name  fw-bold">
                                Swapnil Sanadya
                            </div>
                            <div class="designation">MATHEMATICS</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial display-6 fw-bold"> B.Tech <br> NIT-Surat
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
                <div class="project-item pb-5">
                    <div class="mentors-card">
                        <div class="face front-face">
                            <img src="img\mentors\physics-2.webp"
                                alt="" class="profile">
                            <div class="pt-3 text-uppercase name  fw-bold">
                                Thangaraj S
                            </div>
                            <div class="designation">PHYSICS</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial display-6 fw-bold">B.Tech
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-white fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5 text-white">What Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text bg-white border border-warning rounded p-4 pt-5 mb-5" style="min-height:360px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        I am happy that Lokshitha's experience at I2Global has been
                                            exceptional. The individualized attention and dedicated teachers have
                                            contributed to their remarkable development. Her Academic progress, critical
                                            thinking skills, and self-confidence have shown significant improvement. We
                                            are proud to witness their growth and look forward to their continued
                                            success.
                    </div>
                    <img class="rounded-circle mb-3" src="img\testimonials\lokshitha.webp" alt="lokshitha">
                    <h4 class="text-white">LOKSHITHA</h4>
                    <span class="text-white">GRADE 12, TAMIL NADU</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text bg-white border border-danger rounded p-4 pt-5 mb-5" style="min-height:360px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        I cannot express enough gratitude to the team at I2Global for the
                                            exceptional JEE/NEET and academic support they have provided to my child.I
                                            am impressed by the personalized attention given to each student, which has
                                            greatly boosted their confidence and improved their performance. I highly
                                            recommend I2Global to any parent looking for top-notch coaching and academic
                                            support for their child's JEE/NEET preparation</p>
                    </div>
                    <img class="rounded-circle mb-3" src="img\testimonials\rhea.webp" alt="rhea">
                    <h4 class="text-white">RHEA FERNANDO</h4>
                    <span class="text-white">GRADE 11, RAJASTHAN</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text bg-white border border-success rounded p-4 pt-5 mb-5" style="min-height:360px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Our experience with I2Global for JEE/NEET coaching and academic support is fantastic. The dedicated faculty members have gone above and
                                            beyond to ensure that my child receives the best education and guidance. The
                                            comprehensive study resources, regular assessments, and personalized
                                            doubt-solving sessions have tremendously helped my child in their
                                            preparation. Thanks to I2Global, my child is now well-prepared and confident
                                            to face the Board exams &jee/neet
                    </div>
                    <img class="rounded-circle mb-3" src="img\testimonials\saanvi.webp" alt="saanvi">
                    <h4 class="text-white">SAANVI GUGGILAM</h4>
                    <span class="text-white">GRADE 10, KARNATAKA</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text bg-white border border-primary rounded p-4 pt-5 mb-5" style="min-height:360px;">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        I2Global has been a game-changer for my child's JEE/NEET preparation. The
                                            expert guidance and comprehensive study materials have made a significant
                                            difference in their understanding and performance. The faculty members are
                                            always available to clarify doubts and provide additional support when
                                            needed.
                    </div>
                    <img class="rounded-circle mb-3" src="img\testimonials\sunrit.webp" alt="sunrit">
                    <h4 class="text-white">SUNRIT DEY</h4>
                    <span class="text-white">GRADE 12, KOLKATA</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer-bg text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="tel:8688024352" class="text-white text-decoration-none">+91 8688024352</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=" https://facebook.com/profile.php?id=61556038930973"><i class="fab fa-facebook-f"></i></a>
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