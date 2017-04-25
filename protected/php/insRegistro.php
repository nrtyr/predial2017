<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtAPat']) && !empty($_POST['txtAPat']) &&
	isset($_POST['txtAMat']) && !empty($_POST['txtAMat']) &&
	isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo']) &&
	isset($_POST['txtPass']) && !empty($_POST['txtPass']) &&
	isset($_POST['txtClvCat']) && !empty($_POST['txtClvCat'])) {

	$nombreVar = mb_strtoupper($_POST['txtNombre'], 'UTF-8');
	$aPaternoVar = mb_strtoupper($_POST['txtAPat'], 'UTF-8');
	$aMaternoVar = mb_strtoupper($_POST['txtAMat'], 'UTF-8');
	$claveCatVar = mb_strtoupper($_POST['txtClvCat'], 'UTF-8');

	$pwCode = md5($_POST['txtPass']);
	$claveCatVar = base64_encode($claveCatVar);
	
	$con = new SQLite3("../data/usuarios.db") or die("Problemas para conectar!");
	$cs = $con -> query("INSERT INTO login (nombre,aPaterno,aMaterno,correo,password,claveCat) VALUES ('$nombreVar','$aPaternoVar','$aMaternoVar','$_POST[txtCorreo]','$pwCode','$claveCatVar')");
	$con -> close();

	echo "<script> alert('Datos Insertados');</script>";
	echo "<script> window.location='../../index.php';</script>";

}else{
	echo "<script> alert('No puedes ver esta pagina!');</script>";
	echo "<script> window.location='../../index.php';</script>";
}

 ?>