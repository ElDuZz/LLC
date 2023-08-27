<?php

include_once 'procesos/Conexion.php';
    session_start();

   
    
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!-- Alertas -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-light  navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="index.php" class="navbar-brand">
        
       <img src="img/PF.png" height="100xp" width="200px" alt="">
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="nosotros.php" class="nav-item nav-link">Nosotros</a>
            <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->
            
            
            <?php if(!empty($_SESSION['usuario'])){ ?>
                <a href="vista.php" class="nav-item nav-link"><img src="img/aprobado.png" width="30" height="30" alt="CV"></a>
                <li><a href="procesos/logout.php" class="nav-item nav-link me-3">Cerrar Sesion</a></li>
            <?php } else { ?>
                <li><a href="index.php" class="nav-item nav-link me-3">Iniciar Sesion</a></li>
            <?php }?>
            
        </div>
    </div>
</nav>
<!-- Navbar End -->