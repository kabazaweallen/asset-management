<?php
include('databases/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="registerpage.php">Add user</a>
    <table border='2'cellspacing='0' id="table">

<tr>
<th>Id</th>
<th>Email</th>
<th>First name</th>
<th>Last name</th>
<th>Password</th>
<th>Action</th>
</tr>
<?php
$select="SELECT * FROM admin";
$query=mysqli_query($conn,$select);
$result=mysqli_num_rows($query);


if($result)
{
while($rows=mysqli_fetch_assoc($query))
{
 
    
 echo "<tr><td>" .$rows['id']."</td><td>" .$rows['email']."</td><td>" .$rows['firstname'] 
 ."</td><td>" .$rows['lastname'] ."</td><td>".$rows['password']
 ."<td> <a href=update.php>Edit</a> </td>"."<td> <a href=delete.php>remove</a> </td>";

}
}

?>
    </table>


    <a href="userdashboard.php">Dashbord</a>
</body>
</html>
