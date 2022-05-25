
<?php

class Profile extends SessionController
{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }
    function render()
    {
        // cargar la vista
        $this->view->render('profile/index', [
            'user'                 => $this->user
        ]);
    }
}

?>