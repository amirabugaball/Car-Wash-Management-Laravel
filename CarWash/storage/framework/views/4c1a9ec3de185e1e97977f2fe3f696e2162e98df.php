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

<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Login</h2>
        </div>
        <div class="row contact-info">
            <div class="col-lg-12">
                <div class="container">
                    <?php if(session('loginmessage')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(session('loginmessage')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if($errors->first('username') != ""): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e($errors->first('username')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if($errors->first('password') != ""): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e($errors->first('password')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="form">
                        <form name="sentMessage" class="well" id="contactForm" method="post" action="">
                            <?php echo csrf_field(); ?>
                            <div class="control-group">
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           placeholder="Username" id="name" name="username"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br/>
                        </form>
                    </div>
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
<?php /**PATH C:\xampp\htdocs\CarWash\resources\views/login.blade.php ENDPATH**/ ?>