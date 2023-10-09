<?php
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $youremail=$_POST['youremail'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $title=$_POST['title'];
    $domain=$_POST['domain'];
    $members=$_POST['members'];
    $Address=$_POST['Patent'];
    $Website=$_POST['Website'];

    $conn = new mysqli('localhost','root','','Registration');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("inerst into aef(firstname,lastname,youremail,phone,username,password,tittle,domain,members,Address,Website) 
        values(?,?,?,?,?,?,?,?,?,?,?) ");
        $stmt->bind_param("sssissssiss",$firstname,$lastname,$youremail,$phone,$username,$password,$tittle,$domain,$members,$Address,$Website);
        $stmt->execute(); 
        echo "Registration Successfull Go Back to login..........";
        $stmt->close();
        $conn->close();
    }

?>
