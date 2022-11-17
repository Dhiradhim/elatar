<?php
include "koneksi.php";
 $q=mysqli_query($con, "SELECT id_suara FROM detail ORDER BY id_suara DESC LIMIT 1") or die(mysqli_connect_error());
 $row = mysqli_fetch_assoc($q);
 $id_suara = $row['id_suara']+1;
$number = count($_POST["text"]);
 if($number > 0) { 
     $message = false;
     for($i=0; $i<$number; $i++) {
         if(trim($_POST["text"][$i] != '')) { 
             $sql = "INSERT INTO detail (pesan,id_suara) VALUES('".$_POST["text"][$i]."','$id_suara')";
             mysqli_query($con, $sql);
             $message = true;
         } else {
             echo "Mohon isi pesan anda!";
         }
     }
     if($message == true){
         echo "Berhasil disimpan!";
     }
 } else { 
     echo "Something are wrong!";  
 }
?>
