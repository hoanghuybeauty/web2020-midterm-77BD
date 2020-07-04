<?php session_start();
	if (empty($_SESSION['Position'])) {
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm sinh viên</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<form action="xulythemsv_admin.php" method="POST">
	 		<div class="form-group row">
			 	<label class="col-sm-2 col-form-label">Họ Và Tên</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="tensv" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Mã SV</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="masv" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Mật Khẩu</label>
			 	<div class="col-sm-10">
			  		<input type="password"  name="pass" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Ngày Sinh</label>
			 	<div class="col-sm-10">
			  		<input type="date"  name="ngaysinh" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Giới Tính</label>
			 	<div class="col-sm-10">
			  		Nam <input type="radio" name="gt" value="nam" required="required"> Nữ <input type="radio" name="gt" value="nữ" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điện Thoại</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="dt" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Email</label>
			 	<div class="col-sm-10">
			  		<input type="email"  name="email" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Địa Chỉ</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diachi" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điểm Lý</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diemly" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điểm Toán</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diemtoan" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Điểm Hóa</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="diemhoa" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label class="col-sm-2 col-form-label">Lớp</label>
			 	<div class="col-sm-10">
					<select name="idlop">
	  					<?php 
							$conn = mysqli_connect('localhost','root','','sinhvien');
							$query = "select * from tbllop";
							$kqua = mysqli_query($conn,$query);
							while ($data = mysqli_fetch_array($kqua)) {
								$id = $data['idlop'];
								$tenlop = $data['tenlop'];
							    echo '<option value="'.$id.'">'.$tenlop.'</option>';
							}
						 ?> 
	  				</select>
		   		</div>
	  		</div>
	  		<div class="form-group row">
	  			<div class="col-sm-2">
	  				
	  			</div>
			 	<div class="col-sm-10">
			  		<input type="submit" value="Thêm">
		   		</div>
	  		</div>
		</form>
	</div>
</body>
</html>
