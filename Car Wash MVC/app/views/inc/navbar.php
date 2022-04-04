<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 " style="background-color: purple !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT . 'public'; ?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo URLROOT . 'public'; ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php echo URLROOT . 'Client/Cli'; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clients
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo URLROOT . 'Client/Cli'; ?>">View All Clients</a></li>
            <li><a class="dropdown-item" href="<?php echo URLROOT . 'Client/Add'; ?>">Add Client</a></li>
          </ul>
        </li>


      </ul>
    </div>
  </div>
</nav>