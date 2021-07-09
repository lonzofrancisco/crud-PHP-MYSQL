
<?php 
 include('conexiondb.php');


 if (isset($_POST['save'])) {    //si EXISTE UN POST CON NOMBRE 'SAVE' GUARDO LOS NUEVOS ALUMNOS EN LA TABLA
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $email= $_POST['email'];

    $sql = "INSERT INTO `alumnos`(`nombre`, `apellido`, `email`, `idalumno`) VALUES ('".$nombre."','".$apellido."','".$email."','0' )";
    
    $result = mysqli_query($enlace,$sql);
    
    if(!$result) {
       die("ERROR!!");
     }
  
     $_SESSION['message'] = 'Alumno Guardado';
     $_SESSION['message_type'] = 'success';
     header('Location: form.php');

};


?>

