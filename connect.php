<?php
     $name = $_POST['$name'];
     $number = $_POST['$number'];
     $email = $_POST['$email'];
     $dt = $_POST['$dt'];
    //  database connection 
$conn =new mysqli('localhost', 'root','',law.in);
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
$stmt =$conn->prepare("insert into regestration (name , number , email, dt) 
values(?, ?, ?, ?)");
$stmt->bind_param("sisi",$name,$number,$email,$dt);
$stmt->execute();
echo"regestration successfully";
$stmt->close();
$stmt->close();

}
?>