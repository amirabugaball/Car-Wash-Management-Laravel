<?php
class Cli extends View
{
  public function output()
  {
	  require APPROOT . '/views/inc/header.php';
    $Cli=$this->model->getAllCli();
	$str="<table class='table' width=100%>
			<tr>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Car Model</th>
			</tr>";
			foreach($Cli as $x)
				$str.="<tr><td>".$x->name."</td><td>".$x->phoneNumber."</td><td>".$x->carModel."</td></tr>";
		//var_dump($Ent[0]->Name);	
$str.="</table>";
    echo $str;
    require APPROOT . '/views/inc/footer.php';
  }
}
