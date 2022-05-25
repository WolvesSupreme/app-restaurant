
<?php

class Recoverpass extends Controller
{

    function _construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render('recoverpass/index');
    }
}


?>