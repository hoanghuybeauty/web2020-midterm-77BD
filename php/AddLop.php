<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thêm Lớp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<form action="xulythemlop.php" method="POST">
	 		<div class="form-group row">
			 	<label class="col-sm-2 col-form-label">ID Lớp</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="idlop" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Tên Lớp</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="tenlop" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">GVCN</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="gvcn" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">User name</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="uname" required="required">
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Password</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="pass" required="required">			  		
		   		</div>
	  		</div>
	  		<div class="form-group row">
			 	<label  class="col-sm-2 col-form-label">Nghành</label>
			 	<div class="col-sm-10">
			  		<input type="text"  name="nghanh" required="required">
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