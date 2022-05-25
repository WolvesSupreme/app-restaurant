
<?php

class Employeesmodel extends Model implements IModel
{
    private $id;
    private $dni;
    private $nombre;
    private $paterno;
    private $materno;
    private $departamento;
    private $provincia;
    private $distrito;
    private $direccion;
    private $fecha;

    function __construct()
    {
        parent::__construct();
    }
    public function save()
    {
        try {
            $query = $this->prepare('INSERT INTO employees (
                dni,
                nombre, 
                paterno,
                materno,
                departamento,
                provincia,
                distrito,
                direccion,
                fecha) 
                VALUES(
                    :dni, 
                    :nombre, 
                    :paterno,
                    :materno,
                    :departamento,
                    :provincia,
                    :distrito,
                    :direccion,
                    :fecha)');
            $query->execute([
                'dni' => $this->dni,
                'nombre' => $this->nombre,
                'paterno' => $this->paterno,
                'materno' => $this->materno,
                'departamento' => $this->departamento,
                'provincia' => $this->provincia,
                'distrito' => $this->distrito,
                'direccion' => $this->direccion,
                'fecha' => $this->fecha
            ]);
            if ($query->rowCount()) return true;

            return false;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function getAll()
    {
        $items = [];

        try {
            $query = $this->query('SELECT * FROM employees');

            while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
                $item = new CategoriesModel();
                $item->from($p);

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }
    public function get($id)
    {
        try {
            $query = $this->prepare('SELECT * FROM employees WHERE id = :id');
            $query->execute(['id' => $id]);
            $category = $query->fetch(PDO::FETCH_ASSOC);

            $this->from($category);

            return $this;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function delete($id)
    {
        try {
            $query = $this->prepare('DELETE FROM employees WHERE id = :id');
            $query->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function update()
    {
        try {
            $query = $this->prepare('UPDATE employees SET 
            dni = :dni,
            nombre = :nombre,
            paterno =  :paterno,
            materno = :materno,
            departamento = :departamento,
            provincia = :provincia,
            distrito = :distrito,
            direccion = :direccion,
            fecha = :fecha
            WHERE id = :id');
            $query->execute([
                'dni' => $this->dni,
                'nombre' => $this->nombre,
                'paterno' => $this->paterno,
                'materno' => $this->materno,
                'departamento' => $this->departamento,
                'provincia' => $this->provincia,
                'distrito' => $this->distrito,
                'direccion' => $this->direccion,
                'fecha' => $this->fecha
            ]);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function from($array)
    {
        $this->id = $array['id'];
        $this->dni = $array['dni'];
        $this->nombre = $array['nombre'];
        $this->paterno = $array['paterno'];
        $this->materno = $array['materno'];
        $this->departamento = $array['departamento'];
        $this->provincia = $array['provincia'];
        $this->distrito = $array['distrito'];
        $this->direccion = $array['direccion'];
        $this->fecha = $array['fecha'];
    }

    public function exists($dni)
    {
        try {
            $query = $this->prepare('SELECT dni FROM employees WHERE dni = :dni');
            $query->execute(['dni' => $dni]);

            if ($query->rowCount() > 0) {
                error_log('Employees::exists() => true');
                return true;
            } else {
                error_log('Employees::exists() => false');
                return false;
            }
        } catch (PDOException $e) {
            error_log($e);
            return false;
        }
    }

    #region methodo get y set 

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;
    }

    public function setMaterno($materno)
    {
        $this->materno = $materno;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    #endregion
}

?>