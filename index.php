<?php
include "Header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/Index.css">
</head>

<body>

    <!-- caraousal images start -->
    <div id="demo" class="carousel slide a" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/jitcollege.jpg">
                <div class="centered">
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/rfide.jpg">
            </div>
            <div class="carousel-item">
                <img src="Images/rfid.jpg">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        <hr style="border:1px solid navy;">
    </div>
    <!-- caraousal images End -->



    <div class="container">



        <div class="row mt-5 mb-4">
            <div class="col-md-4">
                <img class="img-fluid" src="Images/jitaboutus.jpg">
            </div>
            <div class="col-md-8 mt-3">
                <i>
                    <u>
                        <h2 style="color: navy;">About Us:-</h2>
                    </u>
                    <h3 style="color: brown;">Welcome To Jhulelal Institute of Technology,</h3>
                    <h3 style="color: navy;">
                        One of the Leading Engineering College in Central India.
                    </h3>
                    <h4 class="text-justify">
                        Jhulelal Institute of Technology is governed by Samridhi Sarwajanik Charitable
                        Trust with a noble cause of providing quality technical education to the
                        students in Central India. The society has eminent persons from
                        the fields of technology and education on its governing body and academic advisory council.
                        Jhulelal Institute of Technology is promoted by Samridhi Sarwajanik Charitable Trust
                        with a view to provide excellent engineering educational opportunity to the
                        youth of central India, especially to the Sindhi community. <br>The functional
                        organization of the trust is very promising. Situated in a congenial natural setting,
                        12 km away from the zero mile, Nagpur, the peaceful environment of the campus provides an
                        ideal atmosphere for academic pursuit, concentrated studies and research.
                    </h4>
                </i>
            </div>
        </div>



        <hr style="border:1px solid brown;">



        <h2 class="mb-3" style="color: navy;">
            <i><u>Our Mentors</u>:-</i>
        </h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid rounded mx-auto d-block" src="Images/df.jpg">
                    </div>
                    <div class="col-md-6 text-justify">
                        <br>
                        <h3 style="color: brown;">
                            <i><b>Shri.Devendra Fadnavis</b></i>
                        </h3>
                        <h4>
                            <i>
                                Leader of Opposition in
                                Maharashtra Legislative Assembly.
                                “Proud to know that JITians are
                                coming out with flying colours.
                                All the best.”
                            </i>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid rounded mx-auto d-block" src="Images/ng2.jpg">
                    </div>
                    <div class="col-md-6 text-justify">
                        <br>
                        <h3 style="color: brown;">
                            <i><b>Shri.Nitin Gadkari</b></i>
                        </h3>
                        <h4>
                            <i>
                                Minister for Road Transport &
                                Highway and the Minister of Micro,
                                Small and Medium Enterprises in
                                the Government of India.
                                “Good and outstanding educational
                                institute contributing in the
                                engineering educational in
                                Vidarbha.”
                            </i>
                        </h4>
                    </div>
                </div>
                <br>
            </div>
        </div>



    </div>



    <hr style="border:1px solid navy;">



    <?php
    include "Footer.php";
    ?>
</body>

</html>