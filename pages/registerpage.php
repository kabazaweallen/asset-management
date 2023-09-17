  <?php

  include_once('registeradmin.php');
  ?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgba(255, 255, 255, 0.5);
  background: url("univer.jpg"), #000;
}
.header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }
* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: 	#E6E6FA;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
  <header class="header">
    <a href="#" class="logo">Asset management system</a>
    <nav class="nav-items">
      <a href="allen.html">Home</a>
      <a href="login.html">ADIM</a>
      <a href="user.html">USER</a>
      <a href="campus.html" >Campus gate</a>|
      <a href="contant.html">CONTACT</a>
    </nav>
  </header>

<form action=""  method="POST">
  <div class="container">
    <h1>WELCOME TO MACHINE CHECKING SYSTEM </h1>
    <p>Please  create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" >
     <label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="Fname" id="firstname" >
     <label for="Lastname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="Lname" id="Lastname" >


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" >

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" >
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="register">Register</button>

  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
