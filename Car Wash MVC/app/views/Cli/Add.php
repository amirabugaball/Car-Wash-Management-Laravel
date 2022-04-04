<?php
class Add extends view
{
    public function output()
    {

        require APPROOT . '/views/inc/header.php';

        $this->printForm();
        require APPROOT . '/views/inc/footer.php';
    }

    private function printForm()
    {
        $action = URLROOT . 'Client/Add';

        $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2>Add Client</h2>
    <form action="$action" method="post">
EOT;
        echo $text;
        $text = <<<EOT
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
      <label class="form-label">Phone Number</label>
      <input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
    </div>
    <div class="mb-3">
      <label class="form-label">Car Model</label>
      <input type="text" class="form-control" id="carModel" name="carModel">
    </div>
    <input type="submit" value="Add" class="btn btn-primary mybtn">
  </form>
    
EOT;
        echo $text;
    }
}
