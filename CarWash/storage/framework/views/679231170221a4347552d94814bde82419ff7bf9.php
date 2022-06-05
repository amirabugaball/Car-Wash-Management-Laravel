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
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet"/>
</head>
<body id="body">
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>View Reservations</h2>
        </div>
        <div class="row contact-info">
            <div class="col-lg-12">
                <div class="container">
                    <?php if(session('addmsg')): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?php echo e(session('addmsg')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if(session('deletemsg')): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?php echo e(session('deletemsg')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if(Auth::user()->username != "Admin"): ?>
                        <table class="table table-bordered table-dark" id="appts">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Bill</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($reservations) > 0): ?>
                                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="background-color: black;">
                                        <td>
                                            <?php echo e($rs->id); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->type); ?> - <?php echo e($rs->wType); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->date); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->price); ?>

                                        </td>
                                        <td>
                                            <form method="post" action="/printinvoice">
                                                <?php echo csrf_field(); ?>
                                                <input type="text" name="id" value="<?php echo e($rs->id); ?>" hidden>
                                                <input type="text" name="type" value="<?php echo e($rs->type); ?>" hidden>
                                                <input type="text" name="price" value="<?php echo e($rs->price); ?>" hidden>
                                                <input type="text" name="wash_type" value="<?php echo e($rs->wType); ?>" hidden>
                                                <button class="btn btn-sm btn-primary">Print</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <td colspan="5" style="color: black;">
                                    No reservations available.
                                </td>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <table class="table table-bordered table-dark" id="appts">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($reservations) > 0): ?>
                                <script>let total = 0;</script>
                                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <script>total += <?php echo e($rs->price); ?>;</script>
                                    <tr style="background-color: black;">
                                        <td>
                                            <?php echo e($rs->id); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->username); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->type); ?> - <?php echo e($rs->wType); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->date); ?>

                                        </td>
                                        <td>
                                            <?php echo e($rs->price); ?>

                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal<?php echo e($rs->id); ?>">
                                                Delete
                                            </button>

                                            <div class="modal fade" id="deleteModal<?php echo e($rs->id); ?>" tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true"
                                                 style="color: black;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                Reservation</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this reservation?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel
                                                            </button>
                                                            <form method="post" action="/deletereservation">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="text" hidden value="<?php echo e($rs->id); ?>"
                                                                       name="reserveID">
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                                <td colspan="5" style="color: black;">
                                    No reservations available.
                                </td>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <br><br>
                        <h4>
                            Total: <span id="totalbill"></span> EGP
                        </h4>
                        <form method="post" action="/printbill">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-primary" type="submit">Print Bill</button>
                        </form>
                    <?php endif; ?>
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
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#appts').DataTable({
            "paging": false,
            "info": false
        });
    });
</script>
<script>$("#totalbill").html(total);</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\CarWash\resources\views/reservations.blade.php ENDPATH**/ ?>