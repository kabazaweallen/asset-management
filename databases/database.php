<?php
$host='localhost';
$user='root';
$password='';
$dbname='';
//connect to the server
//1.mysql procedural,2.mysql 3.PDO (oop)
$conn=mysqli_connect('localhost','root','','');
if(!$conn)
{
die("Failed to connect to the server.".mysqli_connect_error());
}
//create database here.
$query="CREATE DATABASE MANAGEMENT";
//binding your query to localhost
$result=mysqli_query($conn,$query);
if($result)
{
    echo"Database created successfully!!";
}
else
{
    echo"Failed to create db::!!".mysqli_error($conn);
  
}