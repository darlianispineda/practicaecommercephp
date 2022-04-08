<?php

    include_once '../models/usuario.php';
    $usuario= new usuario();
    session_start();

    if ($_POST['funcion']=='login') {
        $user= $_POST['user'];
        $pass=$_POST['pass'];
        $usuario-> logearse($user,$pass);

        if($usuario->objetos != null){
            foreach ($usuario -> objetos as $objeto ) {
                $_SESSION["id"]= $objeto-> id;
                $_SESSION["user"]= $objeto-> user;
                $_SESSION["tipo_usuario"]= $objeto-> id_tipo;
                $_SESSION["avatar"]= $objeto-> avatar;
            }

            echo "logeado";
        }
        
        
    }

    if ($_POST['funcion']=='verificar_sesion') {
       if (!empty($_SESSION["id"])) {
           $json=array(
               "id"=>$_SESSION["id"],
               "user"=> $_SESSION["user"],
               "tipo_usuario"=> $_SESSION["tipo_usuario"],
               "avatar"=>$_SESSION["avatar"]
           );
           $jsonstring = json_encode($json);
           echo $jsonstring;
       }else{
           echo '';
       }
        
        
    }

?>