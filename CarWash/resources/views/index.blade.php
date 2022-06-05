@if(session('loginmessage'))
    <script>alert('{{session('loginmessage')}}')</script>
@endif

@if(session('signmessage'))
    <script>alert('{{session('signmessage')}}')</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Car Wash</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/logo.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body id="body">
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><i class="fas fa-car-alt"></i><a href="#" class="scrollto">Carz<span>Service</span></a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @if(Auth::check())
                    @if(Auth::user()->username == "Admin")
                        <li><a href="/">Home</a></li>
                        <li><a href="/admin">Admin Panel</a></li>
                        <li><a href="/addappointment">Add Appointment</a></li>
                        <li><a href="/viewappointments">View Appointments</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
                        <li><a href="/">Home</a></li>
                        <li><a href="/reserve">Add Reservation</a></li>
                        <li><a href="/viewreservations">View Reservations</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @endif
                @else
                    <li><a href="/">Home</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/#portfolio">Gallery</a></li>
                    <li><a href="/#price">Price</a></li>
                    <li><a href="/#contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/signup">Signup</a></li>
                @endif
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro">

    <div class="intro-content">
        <h2><span>We Care</span><br>About Your Car</h2>
        <div>
            <a href="/signup" class="btn-get-started scrollto">Book your wash NOW!</a>
        </div>
    </div>
    <div id="intro-carousel" class="owl-carousel">
        <div class="item" style="background-image: url('img/intro-carousel/1.jpeg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
    </div>
</section><!-- #intro -->

<main id="main">
    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Welcome</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam,
                    incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus
                    perferendis nesciunt..</p>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="img/about-img.png" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
                    <h3>Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus
                        ovident</h3>
                    <p>Consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt fugiat. Dolores
                        quae porro consequatur aliquam, incidunt fugiat culpa esse aute nulla. malis nulla duis
                        fugiat</p>
                    <ul>
                        <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro consequatur aliquam,
                            incidunt fugiat culpa.
                        </li>
                        <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro consequatur aliquam, culpa
                            esse aute nulla.
                        </li>
                        <li><i class="icon ion-ios-checkmark-outline"></i> Dolores quae porro esse aute nulla. malis
                            nulla duis fugiat
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
  Services Section
============================-->
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <center>
                <h6>Wash is our speciality.</h6>
                <center>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fas fa-car-alt"></i></div>
                        <h4 class="title"><a href="">Interior Wash</a></h4>
                        <p class="description">For internal wash we use high quality detergents that clean, protetct & polish the dashboard and the car interior while also protecting it against dust and sun effect as this technology is like a dust buster.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fas fa-allergies"></i></div>
                        <h4 class="title"><a href="">Car Servicing</a></h4>
                        <p class="description">A car service is a health check with routine maintenance for your vehicle which assesses everything from your engine's fluid levels to the general wear and tear of your car.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-car-side"></i></div>
                        <h4 class="title"><a href="">Jet Machine</a></h4>
                        <p class="description">This is an external wash that uses hot water using a high ressure jet, high quality detergent & shining long lasting wax. This is type of wash protects the car paint from fading that could occur due to enviromental effects such as strong sunlight.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
                        <h4 class="title"><a href="">Motor wash</a></h4>
                        <p class="description">A clean engine compartment makes a used car look newer and better maintained. Our shop performs engine even runs a little cooler because removing the gunk formed to run cooler.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-paper-plane"></i></div>
                        <h4 class="title"><a href="">Rollover Machine</a></h4>
                        <p class="description">Say Goodbye to your worries! If you're looking for a quick wash with high quality then Wash Rollover Machine is yoour answer. It takes only 6 minutes to be performed. his is an external wash that uses high quality detergent and shining wax with long lasting effect.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-car-crash"></i></div>
                        <h4 class="title"><a href="">Rinseless Car Wash</a></h4>
                        <p class="description">A rinseless car wassh is another kit method that eliminates the final hosing off, saving time water, and cheical usage. Optimmum No Rinse Wash and Shine comes highly rated. That's it.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- #services -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Gallery</h2>
                <p></p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/1.jpg" class="portfolio-popup">
                            <img src="img/portfolio/1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/2.jpg" class="portfolio-popup">
                            <img src="img/portfolio/2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/3.jpg" class="portfolio-popup">
                            <img src="img/portfolio/3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/4.jpg" class="portfolio-popup">
                            <img src="img/portfolio/4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/5.jpg" class="portfolio-popup">
                            <img src="img/portfolio/5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/6.jpg" class="portfolio-popup">
                            <img src="img/portfolio/6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/7.jpg" class="portfolio-popup">
                            <img src="img/portfolio/7.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name </h2></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/8.jpg" class="portfolio-popup">
                            <img src="img/portfolio/8.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Name</h2></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Get Our Service</h3>
                    <p class="cta-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                        consequatur aliquam, incidunt fugiat culpa esse aute nulla cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#contact">Contact Us</a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->
    <!--==========================
         Price Section
       ============================-->
    <section id="price" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Price</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam,
                    incidunt fugiat culpa esse aute nulla. duis fugiat culpa esse aute nulla ipsum velit export irure
                    minim illum fore</p>
            </div>
            <div class="pricing card-deck flex-column flex-md-row mb-3">
                <div class="card card-pricing text-center px-3 mb-4">
                    <span
                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span
                                class="price">3</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 5 users</li>
                            <li>Basic support on Github</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
                    </div>
                </div>
                <div class="card card-pricing popular shadow text-center px-3 mb-4">
                    <span
                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Professional</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span
                                class="price">6</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 5 users</li>
                            <li>Basic support on Github</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <a href="" target="_blank" class="btn btn-primary mb-3">Order Now</a>
                    </div>
                </div>
                <div class="card card-pricing text-center px-3 mb-4">
                    <span
                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Business</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span
                                class="price">9</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 5 users</li>
                            <li>Basic support on Github</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
                    </div>
                </div>
                <div class="card card-pricing text-center px-3 mb-4">
                    <span
                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Enterprise</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span
                                class="price">12</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 5 users</li>
                            <li>Basic support on Github</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam,
                    incidunt fugiat culpa esse aute nulla. malis nulla duis fugiat culpa esse aute nulla ipsum velit
                    export irure minim illum fore</p>
            </div>

            <div class="row contact-info">
                <div class="col-lg-5">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>MN-12 Lincon Street, NewYork 12356, USA</address>
                    </div>
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 2345 67890 12</a></p>
                    </div>
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">name@website.com</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="form">

                            <!-- Form itself -->
                            <form name="sentMessage" class="well" id="contactForm" novalidate>
                                <div class="control-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               placeholder="Full Name" id="name" required
                                               data-validation-required-message="Please enter your name"/>
                                        <p class="help-block"></p>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="email" class="form-control" placeholder="Email"
                                               id="email" required
                                               data-validation-required-message="Please enter your email"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="controls">
				 <textarea rows="10" cols="100" class="form-control"
                           placeholder="Message" id="message" required
                           data-validation-required-message="Please enter your message" minlength="5"
                           data-validation-minlength-message="Min 5 characters"
                           maxlength="999" style="resize:none"></textarea>
                                    </div>
                                </div>
                                <div id="success"></div> <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary pull-right">Send</button>
                                <br/>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section><!-- #contact -->
</main>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript  -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>
<script src="lib/sticky/sticky.js"></script>
<script src="js/main.js"></script>

</body>
</html>
