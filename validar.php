<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;



$conexion=mysqli_connect("localhost","root","12345678","login");

$consulta = "SELECT*FROM Personal where usuario = '$usuario' and password='$PASSWORD'";
$resultado=mysql_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:home.php");

}else{
	?>
	<?php
	include("index.html");
	?>
	<h1 class="bad">ERROR EN LA AUTENTIFICACIÓN</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);