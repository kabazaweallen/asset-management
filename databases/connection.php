<?php

//connect to the server
$conn=mysqli_connect('localhost','root','','management');
if(!$conn)
{
die("Failed to connect to the server.".mysqli_connect_error());
}
echo"";