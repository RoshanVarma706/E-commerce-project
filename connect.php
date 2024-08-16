<?php
  $username = $_POST['username'];
  $phoneNumber = $_POST['phoneNumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];
 

  //Database Connection//
  conn = new mysqli('sql311.infinityfree.com','if0_36942416','XVGKE0mDso','if0_36942416_db');
  if($conn->connect_error){
      die('Connection Failed ! :' $conn->connect_error);
  } else{
    $stmt = $conn->prepare("insert into signup(username,phoneNumber,email,password) 
         value(?,?,?,?)");
    $stmt->bind_param("siss", $username,$phoneNumber,$email,$password);
    $stmt->execute();
    echo "Registration sucessfully !!"  ;
    $stmt->close();
    $conn->close();   
  }

?>