<?php
    include_once 'conexion.php';

    class usuario{
        var $objetos;
        public function  __construct(){
            $db = new conexion();
            $this-> acceso= $db -> pdo;
        }

        function logearse($user,$pass){
           $sql="SELECT * FROM usuarios as u
           JOIN tipo_usuario AS t ON t.id_tipo=u.id_tipo 
           WHERE user=:user AND password=:pass";

           $query= $this-> acceso-> prepare($sql);
           $query -> execute(array(':user'=>$user, ':pass'=>$pass));
           $this-> objetos= $query -> fetchall();
           return $this-> objetos;
        }
    }

?>