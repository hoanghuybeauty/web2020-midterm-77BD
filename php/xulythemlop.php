<?php 
	$idlop = $_POST["idlop"];
	$tenlop = $_POST["tenlop"];
	$pass = $_POST["pass"];
	$gvcn = $_POST["gvcn"];
	$uname = $_POST["uname"];
	$nghanh = $_POST["nghanh"];
	$con= mysqli_connect("localhost","root","","sinhvien");
	$sql = " INSERT INTO tbllop ( `idlop`, `tenlop`, `GVCN`, `username`, `password`, `nghanh`) VALUES ('".$idlop."', '".$tenlop."', '".$gvcn."', '".$uname."', '".$pass."', '".$nghanh."')";
	mysqli_set_charset($con, 'UTF8');
	mysqli_query($con, $sql);
	header("Location: Admin.php");
	?>