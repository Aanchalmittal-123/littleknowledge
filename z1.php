<?php
    $host="localhost";
    $user="root";
    $passwordd="";
    $db="weddingvows";
    $con=mysqli_connect($host,$user,$passwordd,$db);
    $id=8;
    $name=" Bhavesh kumar";
    $emailid="bhavesh13@gmail.com";
    $contact="9874561236";
    $pass="bhavkumar";
    $sql = "INSERT INTO client_details (client_id, client_name, email_id, contact, password1) 
    VALUES ('$id','$name','$emailid','$contact',$pass)";
    if(!$con){
     die("query unsuccessful");
    }
    else{
    $result=mysqli_query($con,$sql);
    }
?>