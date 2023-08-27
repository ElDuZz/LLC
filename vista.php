<title>CV</title>

<link rel="icon" href="img/Icon.png">
<?php 
include 'navbar.php';
if(empty($_SESSION['usuario'])){
    header('Location: index.php');

    
$usuario=$_SESSION['usuario'];
}


?>


<body>
    <br>
    <div class="container">
        <!-- <div class="col-sm-12"> -->
            <h2 style="text-align: center;">Subir CV PDF | LivingLabCUU</h2>
            <br>
            <div>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="img/agregar.png" alt="Agregar" width="50" height="50">
                </button>
                                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="procesos/upload.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Usuario</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Descripcion</label>
                                                <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Archivo (WORD & PDF)</label>
                                            <input type="file" name="archivo" id="archivo" class="form-control" required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>

            <div class="container">
                <table class="table table-bordered border-dark text-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Descripcion</th>
                            <th>Archivo</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $conexion=mysqli_connect("localhost","root","","files");
                       $consulta = mysqli_query($conexion,"SELECT * FROM documento");
                       while ($fila = mysqli_fetch_assoc($consulta)):
                    

                       ?>
                            <tr>
                            <td><?php echo $fila['id'] ;?></td>
                            <td><?php echo $fila['nombre'] ;?></td>
                            <td><?php echo $fila['descripcion'] ;?></td>
                            <td><?php echo $fila['archivo'] ;?></td>
                                <td>
                                    <a href="procesos/download.php?id= <?php echo $fila['id'] ;?>" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a>
                                </td>
                                <?php endwhile ;?>

                            </tr>
                    </tbody>
                </table>

            </div>
            
        </div>

</body>


