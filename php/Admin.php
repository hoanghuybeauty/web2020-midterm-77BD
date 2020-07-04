<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	  <?php session_start();
	if (empty($_SESSION['Position'])) {
		header("Location: login.php");
	}
	$con= mysqli_connect('localhost','root','','sinhvien');
	mysqli_set_charset($con, 'UTF8');
	$sql="select * from tblsinhvien ";
	$kq = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
		<div class="" style="padding-bottom: 50px;">
			<div class="row" >
				<div class="col-md-12" >
					<div class="" >
						<?php include ('header.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="">
			<div class="row">
			    <div class="col-md-2">
			    	<?php include("menu.php") ?>
			    </div>
			    <div class="col-md-10">
			    	<div class="table table-bored">
			    		<table>
                            <tr>
	                            <td>ID</td>
				    			<td>Họ và tên</td>
				    			<td>Mã sinh viên</td>
				    			<td>Ngày sinh</td>
				    			<td>Giới tính</td>
				    			<td>Địa Chỉ</td>
				    			<td>Điện thoại</td>
				    			<td>Email</td>
				    			<td>Điểm toán</td>
				    			<td>Điểm lý</td>
				    			<td>Điểm hóa</td>
				    			<td>Điểm TB</td>	
                            </tr>
                            <tr>
                            	<?php 
                            		while ($row = mysqli_fetch_array($kq)) {
                            			$id = $row['id'];
                            		    echo '<tr>';
                            		    echo '<td>'.$row["id"].'</td>';
                            		    echo '<td>'.$row["hoten"].'</td>';
                            		    echo '<td>'.$row["masv"].'</td>';
                            		    echo '<td>'.$row["ngaysinh"].'</td>';
                            		    echo '<td>'.$row["gioitinh"].'</td>';
                            		    echo '<td>'.$row["diachi"].'</td>';
                            		    echo '<td>'.$row["dt"].'</td>';
                            		    echo '<td>'.$row["email"].'</td>';
                            		    echo '<td>'.$row["diemtoan"].'</td>';
                            		    echo '<td>'.$row["diemly"].'</td>';
                            		    echo '<td>'.$row["diemhoa"].'</td>';
                            		    echo '<td>'.$row["diemtb"].'</td>';
                            		    echo '<td><a href="Delete_admin.php?id='.$id.'"  title=""><button type="button" class="btn btn-danger">Xóa</button></a></td>';
                            		    echo '<td><a href="Edit_GVCN.php?id='.$id.'" title=""><button type="button" class="btn btn-primary">Sửa</button></a></td>';
                            		    echo '</tr>';
                            		}
                            	?>
                            </tr>
			    		</table>
			    	</div>
			    </div>
			</div>
		</div>
</body>
</html>



</body>
</html>