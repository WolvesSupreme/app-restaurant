
<?php

class Productdetail extends SessionController
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('Productdetail::construct-> inicio de Product Detail');
    }

    public function render()
    {
        // cargar la vista
        $this->view->render('detalleproducto/index', [
            'user'                 => $this->user
        ]);
    }
}
?>