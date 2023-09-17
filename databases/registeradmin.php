<?php
include('databases/connection.php');
if(isset($_POST['register']))
{
   // var_dump($_POST);
   //print_r($_POST);
   $email=$_POST['email'];
   $fname=$_POST['Fname'];
   $lname=$_POST['Lname'];
   $pswd=password_hash($_POST['psw'],PASSWORD_BCRYPT);
   $psw=$_POST['psw-repeat'];

   
 /*  if(empty($email))
   {
    echo("<h2 style='color:red;'> Email is required!</h2>");
   }
   
   if(!filter_var($email,FILTER_VALIDATE_EMAIL))
   {
    echo("<h2 style='color:red;'> Email is invalid!</h2>");

   }
   if(!preg_match('/[A-Z]/i',$pswd))
   {
    echo("<h2 style='color:red;'> Password contain atleast upper case!</h2>");

   }
   if(strlen($pswd)<5)
   {
    echo("<h2 style='color:red;'> Password is weak!</h2>");

   }
   if( $pswd!==$psw)
   {
    echo("<h2 style='color:red;'> Password is different!</h2>");

   }
*/
   //insert  to your database.
  
  //check if email already used
   $select="SELECT * FROM admin WHERE email='$email'";
   $query=mysqli_query($conn,$select);
   if(mysqli_num_rows($query)>0)
   {
    echo("<script>alert('Your email alredy used,try again!')</script>");

   }
   else{
  
  
   $insert="INSERT INTO admin (email,firstname,lastname,password) VALUES('$email','$fname', '$lname','$pswd')";
if(mysqli_query($conn,$insert))
{
    echo("<script>alert('New admin is registered!')</script>");

    //redirect to login page;
    header('location:login.php');
}
else{
    echo"error::".mysqli_error($conn);
}

}

}