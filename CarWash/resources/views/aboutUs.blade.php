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
            <h1><i class="fas fa-car-alt"></i><a href="#" class="scrollto">Car<span>Wash</span></a></h1>
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

        <div class="row contact-info">
            <div class="col-lg-12">
                <div class="container">
                <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>About Us</h2>
                
            </div>
            
            <div class="row">
            <center>
                <div class="col-lg-9 content">
                    <h3>We Care About You...</h3>
                    <p>Carz Car Wash is unique in that we are a “Flex” service car wash. What that means to you is that we are the only car wash you will ever need. At Carz, our approach combines the latest car wash technology with the human touch to provide the best car wash experience possible.

</p>
<p>What you need when you need it. Choose from a basic “Express” exterior car wash to a complete “Showroom” detail package or anything in between. All done expertly and with the highest quality soaps and waxes.

</p><p>We believe in making customer satisfaction a top priority. We are vehicle owners just like you and we understand that it can be a stressful experience to trust your vehicle with someone else. At Carz, you can rest assured that we will treat your vehicle as if it was our own. We wash one vehicle at a time, so we can make sure each vehicle receives the best treatment possible.

</p><p>Amenities. We know you are busy, so we strive to provide you with a comfortable and productive space while you wait. All our locations have comfortable lobbies and outside seating areas with free Wi-Fi access, free popcorn and free premium coffee. We also vend snacks, drinks and car care products for your convenience.

</p><p>Safe for the environment. We are environmentally responsible as we believe it is the right thing to do. We reclaim and reuse our water, we use the latest technology to save energy, and we dispose of our waste responsibly. Plus, all our soaps and waxes are designed to be environmentally safe, while maintaining the highest standards of quality for your vehicle.</p>
                    <ul>
                        <li><i class="icon ion-ios-checkmark-outline"></i> Quality.
                        </li>
                        <li><i class="icon ion-ios-checkmark-outline"></i> Less Time.
                        </li>
                        <li><i class="icon ion-ios-checkmark-outline"></i> More Efficient.  
                        </li>
                    </ul>
                </div>
            </div>
            <center>

        </div>
    </section><!-- #about -->

                </div>
            </div>
        </div>
    </div>
</section>

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
