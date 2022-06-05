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
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="services">
    <div class="container">
        <div class="section-header">
            <h2>Our Services</h2>
            <center>
                <h6>Wash is our speciality.</h6>
            </center>
        </div>

        <div class="row">

            <div class="col-lg-4">
                <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fas fa-car-alt"></i></div>
                    <h4 class="title"><a href="">Interior Wash</a></h4>
                    <p class="description">For internal wash we use high quality detergents that clean, protetct &
                        polish the dashboard and the car interior while also protecting it against dust and sun effect
                        as this technology is like a dust buster.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box wow fadeInRight">
                    <div class="icon"><i class="fas fa-allergies"></i></div>
                    <h4 class="title"><a href="">Car Servicing</a></h4>
                    <p class="description">A car service is a health check with routine maintenance for your vehicle
                        which assesses everything from your engine's fluid levels to the general wear and tear of your
                        car.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fas fa-car-side"></i></div>
                    <h4 class="title"><a href="">Jet Machine</a></h4>
                    <p class="description">This is an external wash that uses hot water using a high ressure jet, high
                        quality detergent & shining long lasting wax. This is type of wash protects the car paint from
                        fading that could occur due to enviromental effects such as strong sunlight.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h4 class="title"><a href="">Motor wash</a></h4>
                    <p class="description">A clean engine compartment makes a used car look newer and better maintained.
                        Our shop performs engine even runs a little cooler because removing the gunk formed to run
                        cooler.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fas fa-paper-plane"></i></div>
                    <h4 class="title"><a href="">Rollover Machine</a></h4>
                    <p class="description">Say Goodbye to your worries! If you're looking for a quick wash with high
                        quality then Wash Rollover Machine is yoour answer. It takes only 6 minutes to be performed. his
                        is an external wash that uses high quality detergent and shining wax with long lasting
                        effect.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fas fa-car-crash"></i></div>
                    <h4 class="title"><a href="">Rinseless Car Wash</a></h4>
                    <p class="description">A rinseless car wassh is another kit method that eliminates the final hosing
                        off, saving time water, and cheical usage. Optimmum No Rinse Wash and Shine comes highly rated.
                        That's it.</p>
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
<?php /**PATH C:\xampp\htdocs\CarWash\resources\views/services.blade.php ENDPATH**/ ?>