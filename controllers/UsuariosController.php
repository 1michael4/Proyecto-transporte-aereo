<?php

class UsuariosController extends Usuario{
    public function index(){
        require_once('views/usuario/index.php');
    }

    public function register(){
        $title = "Registro";
        require_once('views/usuario/register.php');
    }

    public function store(){
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $date = $_POST['date'];

        parent::stored($nombres, $apellidos, $correo, $password, $date);

        header('location: ?class=Login&view=index&created=created');
    }
}
?>