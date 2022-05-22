<?php
//create variables for different inputs
$name = $_POST['fullName'];
$email = $_POST['email'];
$password= $_POST['password'];
$cpassword = $_POST['cPasswprd'];

//Database connection
$conn = new mysqli('localhost','root','','user');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $statement = $conn->prepare("insert into user1(fullName,email,password,cPassword) 
    values ( ?,?,?,?)");
    $statement->bind_param("ssss",$name,$email, $password, $cpassword);
    $statement->execute();
    echo "Your Registration was successful....";
    $statement->close();
    $conn->close();
}


?>
