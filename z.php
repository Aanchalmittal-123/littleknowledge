<?php
 $server="localhost";
 $username="root";
 $password="";
 $db="login";
 $con=mysqli_connect($server,$username,$password,$db);
 if(!$con){
  die("CONNECTION FAILED");
 }
 else
 {
  $username12=$_POST["fname"];
  $sql="select * from enter where name='$username12'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);
if($count==1){
header("Location: adminonly.html");
  exit();
  }
  else{
    echo "<script>alert('WRONG CREDENTIALS!!!!!');window.location = 'admin.html'</script>";
  }
 }
?>
