<?php 
include '../conexion/conexion.php';
//metodo POST
// USUARIO Y CONTRA
$usu = htmlentities($_POST['usuario']);
$contrase = htmlentities($_POST['contra']);

/*$cantidadletras = strlen($usu);
$cantidadcontra = strlen($contrase);*/
//CONDICIONAL DEL LOGIN
//LENGUAJE SQL

$sel = $con->query("SELECT * FROM usuario WHERE usuario='$usu' and contra='$contrase' ");
$row = mysqli_num_rows($sel);

echo $row;

if ($row==1) {
	# code...
	header('Location:../extend/alerta.php?mensaje=BUEN CONTRASEÑA&tipo=Bien&estado=success');
}else{
	header('Location:../extend/alerta.php?mensaje=MALA CONTRASEÑA&tipo=Mal&estado=error');
}





?>