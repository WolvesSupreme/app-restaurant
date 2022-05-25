
<?php

class Customerslist extends SessionController
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('Customerslist::construct-> inicio de Customers List');
    }

    public function render()
    {
        // cargar la vista
        $this->view->render('clientelista/index', [
            'user'                 => $this->user
        ]);
    }
}
?>