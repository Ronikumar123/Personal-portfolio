<?php
 //Database connection
 $conn = mysqli_connect('localhost','root');
 if($conn){
    echo"Connection Successful";
 }else{
  echo"No Connection";
 }
 mysqli_select_db($conn, 'test');
 $Name = $_POST['Name'];
 $Email = $_POST['Email'];
 $message = $_POST['Message'];

 $query=" insert into tb_test(Name,Email,Message)
 values ('$Name','$Email','$message')";

 mysqli_query($conn, $query);

header('location: index.html')


?>