
<?php

class Menucatalogue extends SessionController
{

    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render()
    {
        $this->view->render('menucatalogo/index', [
            'user'                 => $this->user
        ]);
    }
}

?>