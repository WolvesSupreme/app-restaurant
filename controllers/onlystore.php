
<?php

class Onlystore extends SessionController
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
        $this->view->render('onlystore/index', [
            'user'                 => $this->user
        ]);
    }
}

?>