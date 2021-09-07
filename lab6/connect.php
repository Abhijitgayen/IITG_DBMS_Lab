<?php
$servername="localhost";
$port_no=3306;
$username="root";
$password="root";
$myDb="graph";
 try{
      $conn= new PDO("mysql:host=$servername; port=$port_no, dpname=$myDb",$username,$password);
      //PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      echo "Connection Succesfully";
 }catch(PDOException $e){
      echo "Connection Faild :".$e->getMessage();
 }
?>