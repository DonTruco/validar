<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.html");

}else{
    include("index.html");
    ?>
    <div class ="form__info">
        <p>Asegurate de revisar el usuario y la clave</p>
        <a href="index.html">Volver a iniciar sesion</a>
    </div>
    
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>