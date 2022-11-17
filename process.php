<?php 
 $connect = mysqli_connect("localhost", "root", "", "test");
 $number = count($_POST["name"]);
 if($number > 0) { 
     $message = false;
     for($i=0; $i<$number; $i++) {
         if(trim($_POST["name"][$i] != '')) { 
             $sql = "INSERT INTO demo (name) VALUES('".$_POST["name"][$i]."')";
             mysqli_query($connect, $sql);
             $message = true;
         } else {
             echo "Please Enter Name";
         }
     }
     if($message == true){
         echo "Inserted Successfully!";
     }
 } else { 
     echo "Something we are wrong!";  
 }
?>