<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $re_password=$_POST['re_password'];
    $Occupation=$_POST['Occupation'];
   

    $conn = new mysqli('localhost','root','','registration');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("inerst into aef(tname,email,username,password,re_password,Occupation,) 
        values(?,?,?,?,?,?) ");
        $stmt->bind_param("ssssss",$name,$email,$username,$password,$re_password,$Occupation);
        $stmt->execute(); 
        echo "Registration Successfull Go Back to login..........";
        $stmt->close();
        $conn->close();
    }

?>
