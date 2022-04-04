<?php
class PriceList extends View
{
  public function output()
  {
    
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT

EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
