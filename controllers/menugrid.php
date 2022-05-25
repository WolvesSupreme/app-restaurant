
<?php

class Menugrid extends SessionController
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        
    }

    public function render()
    {
        // cargar la vista
        $this->view->render('menucuadricula/index', [
            'user'                 => $this->user
        ]);
    }
}
?>