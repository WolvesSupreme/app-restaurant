
<?php

class Customersreview extends SessionController
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('Customersreview::construct-> inicio de Customers Review');
    }

    public function render()
    {
        // cargar la vista
        $this->view->render('clienterevision/index', [
            'user'                 => $this->user
        ]);
    }
}
?>