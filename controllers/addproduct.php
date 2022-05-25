
<?php

class Addproduct extends SessionController
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('Addproduct::construct-> inicio de Add Product');
    }

    public function render()
    {
        // cargar la vista
        $this->view->render('agregarproducto/index', [
            'user'                 => $this->user
        ]);
    }
}
?>