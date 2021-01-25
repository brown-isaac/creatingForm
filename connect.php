<?php
    $firstName = $_POST['userName'];
    $passWord  = $_POST['passWord'];


    //Database connection

    $conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
 $stmt = $conn->prepare("insert into registration(userName, passWord)
values(?, ?)");
$stmt->blind_param("ss",$userName, $passWord);
$stmt->execute();
echo "login successfully...";
$stmt->close();
$conn->close();
}

?>