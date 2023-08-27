
<?php
session_start();
$conexion=mysqli_connect("localhost","root","","files");
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$contraseña2=$_POST['contraseña-confirm'];

if((!empty($contraseña)) || (!empty($contraseña)) || (!empty($usuario))){
    if($contraseña == $contraseña2){
        $validar=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'");
        if (mysqli_num_rows($validar)>  0) {
            
            echo '
            <script>
            window.location = "../sign.php";
            alert("Email registrado");
            </script>
            ';
            exit;
        }else{
            
            $password = ($_POST['contraseña']);
            $password = md5($password);
            $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario','$password')";
            $stmt = $conexion->query($sql);
            if($stmt > 0 ){
                echo '
                <script>
                window.location = "../sign.php";
                alert("Usuario creado");
                </script>
                ';
        exit;
            } else{
                echo '
                <script>
                window.location = "../sign.php";
                alert("Usuario no creado");
                </script>
                ';
        exit;

            }
        }
    }else{
        
        echo '
          <script>
          window.location = "../sign.php";
          Swal.fire("contraseñas no iguales");
          </script>
          ';
          exit;
    }
    
}else{
    echo '
          <script>
          window.location = "../sign.php";
          alert("Campos Vacios");
          </script>
          ';
          exit;
}

?>
