
<?php

class Addemployees extends SessionController
{

    private $user;

    function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
    }

    public function render()
    {
        $this->view->render('addemployees/index', [
            'user'                 => $this->user
        ]);
    }

    function newEmployees()
    {
        if ($this->existPOST([
            'dni',
            'nombre',
            'paterno',
            'materno',
            'departamento',
            'provincia',
            'distrito',
            'direccion',
            'fecha'
        ])) {

            $dni = $this->getPost('dni');
            $nombre = $this->getPost('nombre');
            $paterno = $this->getPost('paterno');
            $materno = $this->getPost('materno');
            $departamento = $this->getPost('departamento');
            $provincia = $this->getPost('provincia');
            $distrito =  $this->getPost('distrito');
            $direccion = $this->getPost('direccion');
            $fecha = $this->getPost('fecha');

            $employeesModel = new Employeesmodel();

            if (!$employeesModel->exists($dni)) {
                $employeesModel->setDni($dni);
                $employeesModel->setNombre($nombre);
                $employeesModel->setPaterno($paterno);
                $employeesModel->setMaterno($materno);
                $employeesModel->setDepartamento($departamento);
                $employeesModel->setProvincia($provincia);
                $employeesModel->setDistrito($distrito);
                $employeesModel->setDireccion($direccion);
                $employeesModel->setFecha($fecha);

                $employeesModel->save();

                $this->redirect('addemployees', ['success' =>  Success::SUCCESS_ADMIN_NEWEMPLOYESS]);
            } else {
                $this->redirect('addemployees', ['error' => Errors::ERROR_ADMIN_NEWEMPLOYEES_EXISTS]);
            }
        }
    }
}

?>