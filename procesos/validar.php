<?php
session_start();
$conexion=mysqli_connect("localhost","root","","files");
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$password = ($_POST['contraseña']);
$password = md5($password);

$validar=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'and contraseña='$password'");
if (mysqli_num_rows($validar)>  0) {
    $_SESSION['usuario']=$usuario;
    header("location: ../vista.php");
    exit;
}
      echo '
      <script>
      window.location = "../index.php";
      alert("El usuario no existe");
      </script>
      ';
      exit;
?>
