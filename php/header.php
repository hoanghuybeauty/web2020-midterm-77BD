
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="row" style="background-color: #fed014;" >
		<div class="col-sm-10 col-md-9" style="text-align: center;">
			<?php 
			if ($_SESSION['Position'] !=null) {
				echo '<h3>Xin Chào: '. $_SESSION['Position'].'</h3>';
			}
			else {
				echo 'Vui Lòng đăng nhập!';
			}
		?>
		</div>
		<div class="col-sm-2 col-md-3" style="text-align: center; margin-top: 20px;">
			<?php 
				if ($_SESSION['Position']!=null && $_SESSION['Position']=="admin") {
					echo '<a href="AddLop.php" title="">Thêm lớp</a>';
					echo '&nbsp;&nbsp;&nbsp;';
					echo '<a href="AddSV_Admin.php" title="">Thêm sinh viên</a>';
					echo '&nbsp;&nbsp;&nbsp;';
					echo '<a href="logout.php" title="">Đăng xuất</a>';
				}
				elseif ($_SESSION['Position']!=null && $_SESSION['role']=="gvcn") {
					echo '<a href="AddSV.php" title="">Thêm sinh viên</a>';
					echo '&nbsp;&nbsp;&nbsp;';
					echo '<a href="logout.php" title="">Đăng xuất</a>';
					
				}
				elseif ($_SESSION['Position']!=null && $_SESSION['role']=="sv") {
					
					echo '<a href="logout.php" title="">Đăng xuất</a>';
				}
				else {
					echo '<a href="login.php" title="">Đăng Nhập</a>';
				}
			?>
		</div>
	</div>
</body>
</html>