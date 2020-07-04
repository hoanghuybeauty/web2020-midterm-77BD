
<?php 
    $con= mysqli_connect("localhost","root","","sinhvien");
    mysqli_set_charset($con, 'UTF8');
    if(isset($_GET['id'])){
        $sql = "DELETE FROM tblsinhvien WHERE id = '".$_GET["id"]."'";
        mysqli_query($con,$sql);
        header('Location: ttsv_gv.php');
    }else{
        die("không tồn tại");
    }
?>