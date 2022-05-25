
<?php

class Categories extends SessionController
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = $this->getUserSessionData();
        error_log('Categorias::construct()');
    }

    public function render()
    {
        error_log("Categorias::RENDER() ");
        $this->view->render('categorias/index', [
            'user' => $this->user,
        ]);
    }
    public function  newCategory()
    {
        if ($this->existPOST(['name', 'color'])) {
            $name = $this->getPost('name');
            $color = $this->getPost('color');

            $categoriesModel = new CategoriesModel();

            if (!$categoriesModel->exists($name)) {
                $categoriesModel->setName($name);
                $categoriesModel->setColor($color);
                $categoriesModel->save();

                $this->redirect('', ['success' => Success::SUCCESS_ADMIN_NEWCATEGORY]);
            } else {
                $this->redirect('user', ['error' => Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS]);
            }
        }
    }

    function delete($params)
    {
        error_log("Expenses::delete()");

        if ($params === NULL) $this->redirect('categories', ['error' => Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS]);
        $id = $params[0];
        error_log("Categories::delete() id = " . $id);
        $res = $this->model->delete($id);

        if ($res) {
            $this->redirect('categories', ['success' => Success::SUCCESS_CATEGORY_DELETE]);
        } else {
            $this->redirect('categories', ['error' => Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS]);
        }
    }
}
?>