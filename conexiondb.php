<?php
session_start();
$enlace = @mysqli_connect("localhost","root","","escuela") or die(mysqli_erro($mysqli));

?>