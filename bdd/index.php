<?php
$conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");
mysqli_query($conexion, "insert into alumnos(nombre,email,codigocurso) "
    . "values('$_REQUEST[nombre]','$_REQUEST[email]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
echo "El alumno fue dado de alta.";
?>