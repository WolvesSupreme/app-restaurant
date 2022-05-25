
<?php

class Analysis extends SessionController
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
        $this->view->render('analisis/index', [
            'user'                 => $this->user
        ]);
    }
}

?>