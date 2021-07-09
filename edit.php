<link rel="stylesheet" href="styles/styles.css">

<?php
include("conexiondb.php");
$nombre = '';
$apellido= '';
$email='';

if  (isset($_GET['idalumno'])) { 
  $idalumno = $_GET['idalumno'];
  $query = "SELECT * FROM alumnos WHERE idalumno=$idalumno";
  $result = mysqli_query($enlace, $query);
  if (mysqli_num_rows($result) == 1) {
    echo "<h1>EDITAR</h1>";
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $email = $row['email'];
  }
}

if (isset($_POST['update'])) {  //si EXISTE UN POST CON NOMBRE 'update'
    echo "actualizando";
  $idalumno = $_GET['idalumno'];  // muestro los datos para editar
  $nombre= $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];

  $query = "UPDATE alumnos set nombre = '$nombre', apellido = '$apellido' WHERE idalumno=$idalumno";  //actualizo el registro filtrandolo por el id de alumno
  mysqli_query($enlace, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: form.php');
}

?>
<div >
  <div >
    <div>
      <div>
      <form action="edit.php?idalumno=<?php echo $_GET['idalumno']; ?>" method="POST">

          <input name="nombre" type="text" value="<?php echo $nombre; ?>" placeholder="Update nombre">
          <input name="apellido" type="text" value="<?php echo $apellido; ?>" placeholder="Update apellido">
          <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Update email">
          <input class="update" type="submit" name="update" value="Actualizar">
      </form>
      </div>
    </div>
  </div>
</div>