<?php
require_once 'CliModel.php';
class AddModel extends CliModel
{
    public  $title = 'Add Client';
   

    public function __construct()
    {
        parent::__construct();
    }



    public function Add()
    {
        $this->dbh->query("INSERT INTO clients (name, phoneNumber, carModel) VALUES(name, phoneNumber, carModel)");
        $this->dbh->bind('name', $this->name);
        $this->dbh->bind('phoneNumber', $this->phoneNumber);
        $this->dbh->bind('carModel', $this->carModel);

        return $this->dbh->execute();
    }
}
