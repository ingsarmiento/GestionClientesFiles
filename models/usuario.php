<?php
require_once('/libs/database.php');
class Usuario extends Database
{
    private $id; 
    public $username, $password,$dni,$nombre, $apellido, $direccion, $telefono, $email, $admin, $created_at;
    private $updated_at, $deleted_at;

    public function __construct(){
        $table = "usuarios";
        parent::__construct($table);
    }

    public function getId()
    {
        return $this->id;
    }

    public function guardar()
    {
        $fields = 'username, password, dni, nombre, apellido, direccion, telefono, email, admin';
        $values = "'".$username."',"."'".$password."',"."'".$dni."',"."'".$nombre."',"."'".$apellido."',".
        "'".$direccion."',"."'".$telefono."',"."'".$email."',"."'".$admin."'";
        $this->insert($fields, $values);
    }

    public function modificar($id)
    {
        $fieldsAndValues = "username='".$username."',"."dni='".$dni."',"."nombre='".$nombre."',"."apellidos='".$apellido."',".
        "direccion='".$direccion."',"."telefono='".$telefono."',"."email='".$email."',"."admin='".$admin."'";
        $this->update($fieldsAndValues, $id);
    }

    public function borrar($id)
    {
        $this->delete($id);
    }
}
?>