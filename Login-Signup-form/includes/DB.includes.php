<?php

$serverName="localhost";
$dBUsername="root";
$dBPassword="";
$dBName= "Website-Proj";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if(!$conn){
  die("connection failed: ". mysqli_connect_error());
}
?>
