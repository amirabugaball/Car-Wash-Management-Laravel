<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><i class="fas fa-car-alt"></i><a href="/" class="scrollto">212<span>Car Wash</span></a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <?php if(Auth::check()): ?>
                    <?php if(Auth::user()->username == "Admin"): ?>
                        <li><a href="/">Home</a></li>
                        <li><a href="/admin">Admin Panel</a></li>
                        <li><a href="/logout">Logout</a></li>
                    <?php else: ?>
                        <li><a href="/">Home</a></li>
                        <li><a href="/reserve">Add Reservation</a></li>
                        <li><a href="/viewreservations">View Reservations</a></li>
                        <li><a href="/logout">Logout</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="/">Home</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="#price">Price</a></li>
                    <li><a href="#team">Our Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/signup">Signup</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\CarWash\resources\views/navbar.blade.php ENDPATH**/ ?>