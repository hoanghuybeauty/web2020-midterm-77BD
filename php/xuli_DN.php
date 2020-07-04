<?php  
    session_start();
    $con=mysqli_connect("localhost","root","","sinhvien");
    mysqli_set_charset($con, 'UTF8');
	$U_name = $_POST['U_name'];
	$U_pass = $_POST['U_pass'];



  //   $sql1="SELECT * FROM `tblsinhvien`";
  //   $kq1= mysqli_query($con,$sql1);
  //   while ($data = mysqli_fetch_array($kq)) {
		//     $_SESSION['Position'] = $data['hoten'];
		//     $_SESSION['id'] = $data['id'];
		//     $_SESSION['role'] = $Role;
		//     header("Location: ttsv.php");
		// }
  //   $sql2="SELECT * FROM `tbllop`";
  //   $kq2= mysqli_query($con,$sql2);








	$Role = $_POST['role'];
	if ($Role=="admin") {
		if ($U_name=="admin"&& $U_pass=="333") {
			$_SESSION['Position'] = "admin";
		    $_SESSION['role'] = $Role;
		    header("Location: Admin.php");
		}
	}
	elseif ($Role=="sv") {
		$sql="SELECT * FROM `tblsinhvien` WHERE masv= '".$U_name."' and matkhau ='".$U_pass."'";
		$kq= mysqli_query($con,$sql);
		while ($data = mysqli_fetch_array($kq)) {
		    $_SESSION['Position'] = $data['hoten'];
		    $_SESSION['id'] = $data['id'];
		    $_SESSION['role'] = $Role;
		    header("Location: ttsv.php");
		}
	}
	elseif ($Role=="gvcn"){
		$query="SELECT * FROM `tbllop` WHERE username ='".$U_name."' and password ='".$U_pass."'";
		$kqua= mysqli_query($con,$query);
		while ($data = mysqli_fetch_array($kqua)) {
		    $_SESSION['Position'] = $data['GVCN'];
		    $_SESSION['idlop'] = $data['idlop'];
		    $_SESSION['role'] = $Role;
		    header("Location: ttsv_gv.php");
		}
	}
	else {
		header("Location: login.php");
	}
?>