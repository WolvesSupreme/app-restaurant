
<?php

class Orders extends SessionController
{
    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }
    public function render()
    {
        $this->view->render('ordenes/index', [
            'user'                 => $this->user
        ]);
    }
}

?>