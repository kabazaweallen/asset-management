<?php
$conn=mysqli_connect('localhost','root','','management');
if(!$conn)
{
    die('Backend error::'.mysqli_error($conn));
}
//create table here
$table="CREATE TABLE admin(id int(11) PRIMARY KEY AUTO_INCREMENT,email varchar(125),firstname TEXT(45) NOT NULL,lastname TEXT(35),password varchar(255)     )";
//commit above query to database
$query=mysqli_query($conn,$table);
if($query)
{
    echo"Table admin created success !!";

}
else{
    echo"Table failed->".mysqli_connect_error();

}