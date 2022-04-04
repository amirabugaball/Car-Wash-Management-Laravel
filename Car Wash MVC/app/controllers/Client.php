<?php
class Client extends Controller
{
    public function Cli()
    {
        $viewPath = VIEWS_PATH . 'Cli/Cli.php';
        require_once $viewPath;
        $indexView = new Cli($this->getModel(), $this);
        $indexView->output();
    }

    public function ind()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }
	
	 public function Add()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setPhoneNumber(trim($_POST['phoneNumber']));
            $registerModel->setCarModel(trim($_POST['carModel']));          
$registerModel->Add();
                    redirect('Client/Cli');

        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'Cli/Add.php';
        require_once $viewPath;
        $view = new Add($this->getModel(), $this);
        $view->output();
    }
   }
