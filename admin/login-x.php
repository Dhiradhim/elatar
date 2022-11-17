<?php  
session_start();//session starts here   
include("../koneksi.php");  
  
if(isset($_POST['login']))  
{  
    $nip=$_POST['nip'];  
    $pass=md5($_POST['pass']);   
    $sql = "select *, count(*) as data from user WHERE nip='$nip' AND pass='$pass'";
    $run =  mysqli_query($con, $sql);  
	$xrun = mysqli_fetch_assoc($run);
    $count = $xrun['data'];
    $nipz = $xrun['nip'];

    if($count > 0)  
    {
        echo "<script>window.open('index.php','_self')</script>";  
  
        $_SESSION['nip']=$xrun['nip'];
  
    }  
    else  
    {  
      echo "<script>alert('Username atau Password SALAH!')</script>";
      echo "<script>window.history.back()</script>";  
    }  
}  
?>  