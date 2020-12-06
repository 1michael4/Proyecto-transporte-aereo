<?php
    class AdministradorController{
        public function home(){
            $title= "Home";
            require_once('views/administrador/home.php');
        }

        public function profile(){
            $title = "Profile";
            require_once('views/administrador/profile.php');
        }
    }
?>