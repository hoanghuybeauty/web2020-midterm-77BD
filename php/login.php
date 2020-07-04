<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="login-form">
    <form action="xuli_DN.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="U_name" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="U_pass" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="radio" name="role" value="admin" required="required">Admin
            <input type="radio" name="role" value="gvcn" required="required">Giáo viên CN
            <input type="radio" name="role" value="sv" required="required">Sinh viên
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>      
    </form>
    
</div>
</body>
</html>