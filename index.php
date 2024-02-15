

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d765320d22.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>     

<header class="header">
        <a href="index.html">
            <img class="header__logo" src="img/logo_dan-removebg-preview.png" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="./index.html">Formularios</a>
        <a class="navegacion__enlace" href="./datos.php">Base de Datos</a>   
    </nav>


                <script>

                    function eliminar(){
                      var respuesta=confirm("¿Estas seguro que deseas eliminar?");
                      return respuesta
                    }

                </script>
                <h1 class="text-center p-3">usuarios</h1>
                <?php
                include "modelo/conexion.php";
                include "constructor/eliminar_persona.php";

                ?>
                <div class="container-fluid row">
                <form class="col-4 p-3" method="POST">
                <h3 class="text-center text-secondary">Registro de personas</h3>

                <?php
                
                include "constructor/registro_persona.php";
                ?>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
              </div>
              
              <button type="submit" class="btn btn-primary" name='btnregistrar' value="ok">Registrar</button>

            </form>
                <div class="col-8 p-4">
                  <table class="table">
                    <thead class="bg-info">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">NOMBRES</th>
                  <th scope="col">APELLIDO</th>
                  <th scope="col">DNI</th>
                  <th scope="col">FECHA DE NAC</th>
                  <th scope="col">CORREO</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                        <?php
                        include "./modelo/conexion.php";
                        $sql=$conexion->query("select*from persona");
                        while($datos=$sql->fetch_object()){?>                       

                  <tr>
                  <td><?= $datos->id_persona ?></td>     
                  <td><?= $datos->nombre ?></td>
                  <td><?= $datos->apellido ?></td>
                  <td><?= $datos->dni ?></td>
                  <td><?= $datos->fecha_nac ?></td>
                  <td><?= $datos->correo ?></td>
                      
                <td>
                    <a href="./modigicar_registro.php?id=<?= $datos->id_persona?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="index.php?id=<?=$datos->id_persona?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
                </tr>              
              <?php }
            ?>
   
           </tbody>
          </table>
         </div>

    </div>

    <footer class="footer">
        <p class="footer__texto">ComestiblesDan - Todos los derechos Reservados 2024.</p>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 

</body>
</html>