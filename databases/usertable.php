<?php
$conn=mysqli_connect('localhost','root','','management');
if(!$conn)
{
    die('Backend error::'.mysqli_error($conn));
}
//create table heres
$table="CREATE TABLE student(id int(1) PRIMARY KEY AUTO_INCREMENT,name varchar(35),serialnumber NUMBER NOT NULL,email TEXT(45) NOT NULL,password varchar(255))";
//commit above query to database
$query=mysqli_query($conn,$table);
if($query)
{
    echo"Table admin created success !!";

}
else{
    echo"Table failed->".mysqli_connect_error();

}