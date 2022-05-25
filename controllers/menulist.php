
<?php

class Menulist extends SessionController
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
        $this->view->render('menulista/index', [
            'user'                 => $this->user
        ]);
    }
}
?>