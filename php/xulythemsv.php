<?php 
	$hoten = $_POST["tensv"];
	$masv = $_POST["masv"];
	$pass = $_POST["pass"];
	$ngaysinh = $_POST["ngaysinh"];
	$gt = $_POST["gt"];
	$dt = $_POST["dt"];
	$email = $_POST["email"];
	$dc = $_POST["dc"];
	$diemly = $_POST["diemly"];
	$diemtoan = $_POST["diemtoan"];
	$diemhoa = $_POST["diemhoa"];
	$diemtb = ($diemhoa + $diemly + $diemtoan) / 3;
	$idlop = $_POST["idlop"];
	$con= mysqli_connect("localhost","root","","sinhvien");
	$sql = " INSERT INTO tblsinhvien ( hoten, masv, matkhau, ngaysinh, gioitinh, dt, email, diachi, diemtoan, diemly, diemhoa, diemtb, idlop) VALUES ('".$hoten."', '".$masv."', '".$pass."', '".$ngaysinh."', '".$gt."', '".$dt."', '".$email."', '".$dc."', '".$diemtoan."', '".$diemly."', '".$diemhoa."', '".$diemtb."', '".$idlop."')";
	mysqli_set_charset($con, 'UTF8');
	mysqli_query($con, $sql);
	header("Location: ttsv_gv.php);
	?>