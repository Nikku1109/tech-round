<?php
    $host = "localhost";
    $username="root";
    $password="";
    $database="form";

    $conn=new mysqli($host,$username,$password,$database);

    if($conn->connect_error){
        die("connection failed".$conn->connect_error);

    }
    function validateInput($data){
        return htmlspecialchars(trim($data));
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullName = validateInput($_POST['fullName']);
    $phoneNumber = validateInput($_POST['phoneNumber']);
    $email = validateInput($_POST['email']);
    $subject = validateInput($_POST['subject']);
    $message = validateInput($_POST['message']);
    $ipAddress=$_SERVER['REMOTE_ADDR'];
    $timestamp=date("Y-m-d h:i:s");
    $sql="INSERT INTO contact (name,phone,email,sub,msg,ip_address,timestamp) VALUES('$fullName','$phoneNumber','$email','$subject','$message','$ipAddress','$timestamp')";
    if($conn->query($sql)===true){
        $to = "nikitavyas625@gmail.com";
        $subjectEmail="New Data";
        $messageEmail="Full Name: $fullName \n Email :$email \n Phone No. :$phoneNumber \n Subject : $subject \n Message : $message";
        $header="From:nikitavyas1109@gmail.com";
        mail($to,$subjectEmail,$messageEmail,$header);
        echo "Submited";
    }
    else{
        echo "Not";
    }
    }
    $conn->close();
    
?>