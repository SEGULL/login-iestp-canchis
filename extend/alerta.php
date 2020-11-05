<?php  
//RECEPCIONAR DATOS ENVIADOS
$msg = htmlentities($_GET['mensaje']);
$tip = htmlentities($_GET['tipo']);
$estado = htmlentities($_GET['estado']);
//CONDICION REDIRECCIONAR PAGINAS
if ($estado=="success") {
	$url="header.php";
}else{
    $url="../login/salir.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- INSERTANDO CDN DE LA ALERTA -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
</head>
<body>
	<!-- CONDFIGURA LA ALERTA -->
	<script>
		Swal.fire({
		  icon: '<?php echo $estado; ?>',
		  title: '<?php echo $tip; ?>',
		  text: '<?php echo $msg; ?>'	  
		}).then(function(){
			location.href='<?php echo $url;?>'

		});
	</script>
	
</body>
</html>