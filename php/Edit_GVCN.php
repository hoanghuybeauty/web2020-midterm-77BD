<?php session_start(); 
	if (empty($_SESSION['Position'])) {
		header("Location: login.php");
	}
	$con= mysqli_connect("localhost","root","","sinhvien");
	mysqli_set_charset($con, 'UTF8');
	$sql="select * from tblsinhvien where id='".$_GET["id"]."'";
	$kq = mysqli_query($con,$sql);
	  while ($data = mysqli_fetch_array($kq)) {
	    $hoten = $data["hoten"];
		$masv = $data["masv"];
		$pass = $data["matkhau"];
		$ngaysinh = $data["ngaysinh"];
		$gt = $data["gioitinh"];
		$dt = $data["dt"];
		$email = $data["email"];
		$dc = $data["diachi"];
		$diemly = $data['diemly'];
		$diemhoa = $data['diemhoa'];
		$diemtoan = $data['diemtoan'];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sửa sinh viên</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<form <?php echo 'action=xulysuasv.php?id="'.$_GET['id'].'"'; ?> method="POST">
	 		<div class="form-group row">
			 	<label class="col-sm-2 col-form-label">Họ Và Tên</label>
			 	<div class="col-sm-10">
			  		<input type="text" <?php echo 'value="'.$hoten.'"'; ?> name="tensv" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Mã SV</label>
			 	<div class="col-sm-10">
			  		<input type="text" <?php echo 'value="'.$masv.'"'; ?> name="masv" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Mật Khẩu</label>
			 	<div class="col-sm-10">
			  		<input type="text" <?php echo 'value="'.$pass.'"'; ?> name="pass" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Ngày Sinh</label>
			 	<div class="col-sm-10">
			  		<input type="date"  name="ngaysinh"  <?php echo 'value="'.$ngaysinh.'"'; ?> required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Giới Tính</label>
			 	<div class="col-sm-10">
			  		<?php
			  			if ($gt=='nam') {
			  				echo "Nam <input type='radio' name='gt' value='nam' checked='checked'> Nữ <input type='radio' name='gt' value='nữ'>";
			  			}
			  			else
			  			{
			  				echo "Nam <input type='radio' name='gt' value='nam' > Nữ <input type='radio' name='gt' value='nữ' checked='checked'>";
			  			}
			  		?>
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điện Thoại</label>
			 	<div class="col-sm-10">
			  		<input type="text" <?php echo 'value="'.$dt.'"'; ?> name="dt" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Email</label>
			 	<div class="col-sm-10">
			  		<input type="email" <?php echo 'value="'.$email.'"'; ?> name="email" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Địa Chỉ</label>
			 	<div class="col-sm-10">
			  		<input type="text" <?php echo 'value="'.$dc.'"'; ?> name="diachi" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điểm Lý</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diemly" <?php echo 'value="'.$diemly.'"'; ?>>
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điểm Toán</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diemtoan" <?php echo 'value="'.$diemtoan.'"'; ?>>
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điểm Hóa</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diemhoa" <?php echo 'value="'.$diemhoa.'"'; ?>>
		   		</div>
	  		</div>
	  		<div class="form-group row">
	  			<div class="col-sm-2">
	  				
	  			</div>
			 	<div class="col-sm-10">
			  		<input type="submit" name="" value="OK">
		   		</div>
	  		</div>
		</form>
	</div>
</body>
</html>
