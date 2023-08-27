<title>Registarse</title>

<link rel="icon" href="img/Icon.png">
    <!-- Navbar Start -->
    <?php
    include 'navbar.php';

    if(!empty($_SESSION['usuario'])){
        header('Location: vista.php');
    }
    ?>


  <body class="login">
    


    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Registrarse</span></div>
        <form action="procesos/register.php" method="post">
        <div class="row">
            <div class="login-img">
              <img src="img/cuenta.png" alt="">
            </div>  
            <input type="email" name="usuario" placeholder="Email" required="true">
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/bloquear.png" alt="">
            </div>
            <input type="password" name="contraseña" placeholder="Contraseña" required="true" maxlength="8">
            
          </div>
          <div class="row">
            <div class="login-img">
              <img src="img/repeating.png" alt="">
            </div>
            <input type="password" name="contraseña-confirm" placeholder="Repite la contraseña" required ="true" >
            
          </div>
          <div class="row button" style="margin-top: 10px;">
            <input type="submit" value="Enviar">
          </div>
          <div class="signup-link text-dark">¿Ya tienes una cuenta? <a href="Index.php">Ingresar</a></div>
        </form>
      </div>
    </div>

    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
