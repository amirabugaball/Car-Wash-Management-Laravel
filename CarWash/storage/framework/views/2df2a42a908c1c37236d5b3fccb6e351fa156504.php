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
            <h2>Make Reservation</h2>
        </div>
        <div class="row contact-info">
            <div class="col-lg-12">
                <div class="container">
                    <?php if($errors->first('type') != ""): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e($errors->first('type')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if($errors->first('wash_type') != ""): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e($errors->first('wash_type')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if($errors->first('date') != ""): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e($errors->first('date')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if(session('addmsg')): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?php echo e(session('addmsg')); ?>

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
                                    <select name="type" class="form-control" id="myselect">
                                        <option disabled value="0" selected>Select car type</option>
                                        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($car->id); ?>"><?php echo e($car->type); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="wash_type" class="form-control" id="washselect">
                                        <option disabled value="0" selected>Select wash type</option>
                                        <?php $__currentLoopData = $washes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($wash->id); ?>"><?php echo e($wash->type); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="date" class="form-control" id="secondselect">
                                        <option disabled value="0" selected>Select appointment date</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <label class="pull-left">Price</label>
                                        <input type="text" id="apptPrice" class="form-control" placeholder="Price"
                                               value="0" name="price" readonly/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                                <br/>
                            </div>
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
<script>
    $('#myselect').on('change', function () {
        var cid = this.value;
        jQuery.ajax({
            url: '/getappointments',
            type: 'get',
            data: 'cid=' + cid,
            success: function (data) {
                var len = data.appts.length;
                var con = "<option value='0' selected disabled>Please Select Appointment Date</option>";
                if (len > 0) {
                    for (var x = 0; x < len; x++) {
                        var apptID = data.appts[x].id;
                        var apptDate = data.appts[x].date;
                        con = con + "<option value='" + apptID + "'>" + apptDate + "</option>";
                    }

                } else {
                    con = "<option value='0' selected disabled>No Appointments Available</option>";
                }
                $("#secondselect").html(con);
            }
        });
    });

    $('#washselect').on('change', function () {
        var wid = this.value;
        jQuery.ajax({
            url: '/getwashprice',
            type: 'get',
            data: 'wid=' + wid,
            success: function (data) {
                var price = data;
                $("#apptPrice").val(price);
            }
        });
    });
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CarWash\resources\views/reserve.blade.php ENDPATH**/ ?>