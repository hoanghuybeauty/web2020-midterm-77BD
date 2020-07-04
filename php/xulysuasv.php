<?php 
	session_start();
	if ($_SESSION['role']=="gvcn") {
		$hoten = $_POST["tensv"];
		$masv = $_POST["masv"];
		$pass = $_POST["pass"];
		$ngaysinh = $_POST["ngaysinh"];
		$gt = $_POST["gt"];
		$dt = $_POST["dt"];
		$email = $_POST["email"];
		$dc = $_POST["diachi"];
		$diemly = $_POST["diemly"];
		$diemtoan = $_POST["diemtoan"];
		$diemhoa = $_POST["diemhoa"];
		$diemtb = ($diemhoa + $diemly + $diemtoan) / 3;
		$con= mysqli_connect("localhost","root","","sinhvien");
		$sql = " UPDATE tblsinhvien SET hoten='".$hoten."',masv='".$masv."',matkhau='".$pass."',ngaysinh='".$ngaysinh."',gioitinh='".$gt."',dt='".$dt."',email='".$email."',diachi='".$dc."',diemtoan='".$diemtoan."',diemly='".$diemly."',diemhoa='".$diemhoa."',diemtb='".$diemtb."' WHERE id=".$_GET['id']."";
		mysqli_set_charset($con, 'UTF8');
		mysqli_query($con, $sql);
		header("Location: ttsv_gv.php");
	}
	elseif ($_SESSION['role']=="sv"){
		$hoten = $_POST["tensv"];
		$masv = $_POST["masv"];
		$pass = $_POST["pass"];
		$ngaysinh = $_POST["ngaysinh"];
		$gt = $_POST["gt"];
		$dt = $_POST["dt"];
		$email = $_POST["email"];
		$dc = $_POST["diachi"];
		$con= mysqli_connect("localhost","root","","sinhvien");
		$sql = " UPDATE tblsinhvien SET hoten='".$hoten."',masv='".$masv."',matkhau='".$pass."',ngaysinh='".$ngaysinh."',gioitinh='".$gt."',dt='".$dt."',email='".$email."',diachi='".$dc."' WHERE id=".$_GET['id']."";
		mysqli_set_charset($con, 'UTF8');
		mysqli_query($con, $sql);
		header("Location: ttsv.php");
	}
	else {
		$hoten = $_POST["tensv"];
		$masv = $_POST["masv"];
		$pass = $_POST["pass"];
		$ngaysinh = $_POST["ngaysinh"];
		$gt = $_POST["gt"];
		$dt = $_POST["dt"];
		$email = $_POST["email"];
		$dc = $_POST["diachi"];
		$diemly = $_POST["diemly"];
		$diemtoan = $_POST["diemtoan"];
		$diemhoa = $_POST["diemhoa"];
		$idlop = $_POST["idlop"];
		$diemtb = ($diemhoa + $diemly + $diemtoan) / 3;
		$con= mysqli_connect("localhost","root","","sinhvien");
		$sql = " UPDATE tblsinhvien SET hoten='".$hoten."',masv='".$masv."',matkhau='".$pass."',ngaysinh='".$ngaysinh."',gioitinh='".$gt."',dt='".$dt."',email='".$email."',diachi='".$dc."',diemtoan='".$diemtoan."',diemly='".$diemly."',diemhoa='".$diemhoa."',diemtb='".$diemtb."' , idlop='".$idlop."' WHERE id=".$_GET['id']."";
		mysqli_set_charset($con, 'UTF8');
		mysqli_query($con, $sql);
		header("Location: ttsv_admin.php?id=".$idlop);
	}
?>