<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main-wrapper">

	<div class="cuadroRegGral">
	
	<header>
		<img src="css/img/predial.svg" class="predialLogo">
		<br>
		<h3 class="subTitulo">Inicia sesión para acceder</h3>
		<br>
	</header>
	<div class="logoLogin">
	<br>
		<img src="css/img/loginImgNR.svg" class="logLoginNR">
		<br>
	</div>

		<form action="insertReg.php" method="post">
			<p class="infoTxtInput">Introduce tu correo:</p>
			<input type="text" name="txtCorreo" class="formText" placeholder="correo@ejemplo.com" />
			<br>
			<input type="submit" value="Siguiente" class="btnLoginUno" />
		</form>
		<br>
		<a href="protected/php/registro.php" class="aliDerecha">Registrate</a>
		<div class="marcaAgua">
		<img src="css/img/agua.svg" class="marcaAguaX">
	</div>
	</div>
	

</div>
		
</body>
</html>