<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
    <!-- <script src="../jquery/jquery.min.js"></script> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="asset/css/mdb.min.css" rel="stylesheet">



    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/150x50?text=Logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">IPHONE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">IPAD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MACBOOK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PHỤ KIỆN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">APPLE WATCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TRẢ GÓP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BẢO HÀNH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TRA CỨU BẢO HÀNH</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- slider -->
        <div class="slider">
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide" height="600px">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Light mask</h3>
                            <p>First text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide" height="600px">
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Strong mask</h3>
                            <p>Secondary text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide" height="600px">
                            <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Slight mask</h3>
                            <p>Third text</p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
        <!-- /.slider -->
    </header>

    <div class="container margin-top">
        <div class="row">
            <div class="col-md-3 mb-2">
                <!-- Card -->
                <div class="card gradient-card">
                    <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                        <!-- Content -->
                        <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                            <div class="first-content align-self-center" style="padding: 2rem">
                                <h6 class="card-title">GIAO HÀNG TẬN NƠI</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-md-3 mb-2">
                <!-- Card -->
                <div class="card gradient-card">
                    <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                        <!-- Content -->
                        <div class="text-white d-flex h-100 mask purple-gradient-rgba">
                            <div class="first-content align-self-center" style="padding: 2rem">
                                <h6 class="card-title">BẢO HÀNH 1 ĐỔI 1</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-md-3 mb-2">
                <!-- Card -->
                <div class="card gradient-card">
                    <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                        <!-- Content -->
                        <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                            <div class="first-content align-self-center" style="padding: 2rem">
                                <h6 class="card-title">HỖ TRỢ TRẢ GÓP 0%</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-md-3 mb-2">
                <!-- Card -->
                <div class="card gradient-card">
                    <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg)">
                        <!-- Content -->
                        <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
                            <div class="first-content align-self-center" style="padding: 2rem">
                                <h6 class="card-title">HỖ TRỢ TƯ VẤN 24/24</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    </div>

    <div id="body" class="container margin-top mb-5">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap" width="300" height="300">
                        <a href="">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <h4 class="card-title">IPHONE</h4>
                        <p class="card-text">iPhone 11 - iPhone 11 Pro Max - iPhone Xs Max - iPhone 11 Pro</p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap" width="300" height="300">
                        <a href="">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <h4 class="card-title">IPHONE</h4>
                        <p class="card-text">iPhone 11 - iPhone 11 Pro Max - iPhone Xs Max - iPhone 11 Pro</p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap" width="300" height="300">
                        <a href="">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">
                        <h4 class="card-title">IPHONE</h4>
                        <p class="card-text">iPhone 11 - iPhone 11 Pro Max - iPhone Xs Max - iPhone 11 Pro</p>
                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>
    </div>


    <footer class="page-footer font-small unique-color-dark">

        <div style="background-color: black;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Kết nối với chúng tôi trên mạng xã hội!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">STORE</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> Made by <b>Ti Cu</b></a>
        </div>
        <!-- Copyright -->

    </footer>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="asset/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="asset/js/mdb.min.js"></script>

    <script type="text/javascript">
        $('.carousel').carousel({
            touch: true, // default
            interval: 1500
        })
    </script>

</body>


</html>