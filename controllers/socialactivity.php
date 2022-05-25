
<?php

class Socialactivity extends SessionController
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('Socialactivity::construct-> inicio de Social Activity');
    }

    public function render()
    {
        // cargar la vista
        $this->view->render('actividadsocial/index', [
            'user'                 => $this->user
        ]);
    }
}
?>