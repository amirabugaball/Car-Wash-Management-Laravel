<?php
class Index extends View
{
  public function output()
  {
    
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
    // require URLROOT . '/views/pages/index.php';
    $text = <<<EOT
<center>
    <div class="jumbotron">
        <div class="row">
        <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">View All Clients</h5>
            <p class="card-text">Each Client with their details.</p>
            <a href=" URLROOT . 'Client/Cli" class="btn btn-primary mybtn">Go</a>
        </div>
    </div>
        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Add Client</h5>
            <p class="card-text">Add a new client.</p>
            <a href="URLROOT . 'Client/Add" class="btn btn-primary mybtn">Go</a>
        </div>
    </div>
        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">View Price List</h5>
            <p class="card-text">Each Service we provide with its price.</p>
            <a href="#" class="btn btn-primary mybtn">Go</a>
        </div>
    </div>
        </div>
    </div>
    <br><br>
    <div class="row" >
    <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Expenses</h5>
            <p class="card-text">Enter and View all the expenses per day , week or month.</p>
            <a href="#" class="btn btn-primary mybtn">Go</a>
        </div>
    </div>
        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Revenues</h5>
            <p class="card-text">Enter and View all the revenues per day , week or month.</p>
            <a href="#" class="btn btn-primary mybtn">Go</a>
        </div>
    </div>
        </div>
        
    </div>
        </div>
        </div>
       
    </div>
    </div>
    
    </center>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
