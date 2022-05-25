
<?php

class Restaurantlist extends SessionController
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
        $this->view->render('restaurantlist/index', [
            'user'                 => $this->user
        ]);
    }
}

?>