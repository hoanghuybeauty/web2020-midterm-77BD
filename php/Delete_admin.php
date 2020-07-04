
<?php 
	session_start();
    $con= mysqli_connect("localhost","root","","sinhvien");
    mysqli_set_charset($con, 'UTF8');
    if(isset($_GET['id'])){
        $sql = "DELETE FROM tblsinhvien WHERE id = '".$_GET["id"]."'";
        mysqli_query($con,$sql);
        header('Location: ttsv_admin.php?id='.$_SESSION['idd']);
    }else{
        die("không tồn tại");
    }
?>