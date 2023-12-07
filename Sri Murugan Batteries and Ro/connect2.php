<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$message = $_POST['message'];
$conn=new mysqli('localhost','root','','batteryandro');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact(name, email, phoneno, message)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$name, $email, $phoneno, $message);
    $stmt->execute();
    echo"submitted successfully...";
    $stmt->close();
    $conn->close(); 
}
?>