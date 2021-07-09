
<?php include("conexiondb.php") ?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP/MYSQL</title>
    <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>
    <h1>CRUD PHP / MYSQL</h1>
    <h2>Crear, Leer, Actualizar y Borrar</h2>
    <div >
      <div >
      <!-- FORMULARIO PARA AGREGAR UN ALUMNO A LA BASE DE DATOS -->
        <form action="save.php" method="POST">              
            <h3> Ingrese sus datos. </h3>
            
          <input type="text" placeholder="Nombre"  name="nombre" required/>
          <input type="text" placeholder="Apellido" name="apellido"  required/>
          <input type="email"  placeholder="Correo electronico" name="email" required/>
          <div class="btnc">
          <input class="btn" type="submit" name="save" value="Enviar a tabla alumnos" />
          </div>
        </form>
      </div>
        <a href="infoCRUD.php"> Informacion del CRUD</a>
      <div class="lista">
          <h3> LISTADO DE ALUMNOS REGISTRADOS</h3>
        <table>
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Mail</th>
              <th>ID</th>
              <th>Accion</th>


            </tr>
            <tbody>
                <?php
                // LISTADO DE LA TABLA ALUMNOS
                $sql="SELECT * FROM alumnos"; 
                $alumnos= mysqli_query($enlace,$sql);

                while($row = mysqli_fetch_array($alumnos)){ ?>
                    <tr>
                        
                    <td>  <?php echo $row['nombre'] ?>  </td>
                    <td> <?php echo $row['apellido'] ?> </td>
                    <td> <?php echo $row['email'] ?>  </td>
                    <td> <?php echo $row['idalumno'] ?>  </td>
                    <td>
                     <a class="edit" href="edit.php?idalumno=<?php echo $row['idalumno']?>">   <!-- edit.php?idalumno= con esto salvo el valor del id mandandolo                      -->
                       <i>Editar</i>                                              <!--     por la url para luego editarlo o borrarlo en el archivo delete.php o edit.php -->
                     </a>
                     <a class="delete" href="delete.php?idalumno=<?php echo $row['idalumno']?>">
                       <i>Eliminar</i>
                     </a>
                  </td>
                       
                    </tr>
                    <?php  } ?>

            </tbody>
          </thead>
        </table>
      </div>
    </div>
  </body>
</html>
