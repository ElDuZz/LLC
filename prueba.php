<?php
        include 'navbar.php';
    
$usuario=$_SESSION['usuario'];

if(!empty($usuario)){
    echo "no esta vacio y es $usuario";

}else{

    echo " esta vacio";
}








?>