<?php
class CliModel extends model
{
    protected $name;
    protected $phoneNumber;
    protected $carModel;

    public function __construct()
    {
        parent::__construct();
        $this->name = '';
        $this->phoneNumber = '';
        $this->carModel = '';
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getCarModel()
    {
        return $this->carModel;
    }
    public function setCarModel($carModel)
    {
        $this->carModel = $carModel;
    }

	public function getAllCli()
    {
        $this->dbh->query('select * from clients');

        $CliRecord = $this->dbh->resultSet();
        return $CliRecord;
    }
	
}
