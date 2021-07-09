<?php

include("conexiondb.php");

if(isset($_GET['idalumno'])) {
  $idalumno = $_GET['idalumno'];
  $query = "DELETE FROM alumnos WHERE idalumno = $idalumno";
  $result = mysqli_query($enlace, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: form.php');
}

?>