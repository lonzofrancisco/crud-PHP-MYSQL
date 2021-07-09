<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Query´s para hacer un CRUD</h1>
    <h3>LISTA TODOS LOS REGISTROS EN LA TABLA ALUMNOS</h3>
   <span> SELECT * FROM `alumnos` </span><br><br>
   <h3>INSERTA REGISTROS EN LA TABLA ALUMNOS</h3>
   <span>  INSERT INTO `alumnos`(`nombre`, `apellido`, `email`, `idalumno`) VALUES ([value-1],[value-2],[value-3],[value-4])</span><br><br>
   <h3>ACTUALIZA LOS REGISTROS EN LA TABLA ALUMNOS</h3>
   <span>  UPDATE `alumnos` SET `nombre`=[value-1],`apellido`=[value-2],`email`=[value-3],`idalumno`=[value-4]WHERE 1</span><br><br>
   <h3>ELIMINA UN REGISTRO EN LA TABLA ALUMNOS</h3>
   <span>  DELETE FROM `alumnos` WHERE </span>
</body>
</html>