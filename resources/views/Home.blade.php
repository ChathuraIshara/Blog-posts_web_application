<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand mr-5" href="{{route('home')}}">
                        <img src="images/logo.png" alt="">
                        <span>
                            Developer
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}"> Blog </a>
                                </li>
                                @if(!Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" href="/login"> login </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('registration')}}">Register</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                                </li>
                                @endif
                            </ul>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <div>
                                            <h1>
                                                Do you want to <br>
                                                <span>
                                                    become a developer?
                                                </span>
                                            </h1>
                                            <p>
                                                It is a long established fact that a reader will be distracted by the readable content of a page
                                                when looking
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn-1">
                                                    Read-more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                       Do you want to <br>
                        <span>
                          become a developer?
                        </span>
                      </h1>
                      <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
                    <div class="custom_carousel-control">
                        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> -->
                        <!-- <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a> -->
                    </div>
                </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- info section -->

    <section class="info_section layout_padding">
        <div class="footer_contact">
            <div class="heading_container">
                <h2>
                    Contact Us
                </h2>
            </div>
            <div class="box">
                <a href="" class="img-box">
                    <img src="{{asset('assets/images/location.png')}}" alt="" class="img-1">
                    <img src="{{asset('assets/images/location-o.png')}}" alt="" class="img-2">
                </a>
                <a href="" class="img-box">
                    <img src="{{asset('assets/images/call.png')}}" alt="" class="img-1">
                    <img src="{{asset('assets/images/call-o.png')}}" alt="" class="img-2">
                </a>
                <a href="" class="img-box">
                    <img src="{{asset('assets/images/envelope.png')}}" alt="" class="img-1">
                    <img src="{{asset('assets/images/envelope-o.png')}}" alt="" class="img-2">
                </a>
            </div>
        </div>


    </section>


    <!-- end info section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>

</body>

</html>