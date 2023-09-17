<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width,
						initial-scale=1.0">
	<title>uesr form</title>
<style>

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
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

body {
	height: 100vh;
	width: 100vw;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	gap: 30px;
	background-color: rgb(231, 231, 231);
    background-image: url('university.jpg')
}

header {
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 8px;
}

.heading {
	color: green;
}

.title {
	font-weight: 400;
	letter-spacing: 1.5px;
}

.container {
	height: 600px;
	width: 500px;
	background-color: white;
	box-shadow: 8px 8px 20px rgb(128, 128, 128);
	position: relative;
	overflow: hidden;
}

.btn {
	height: 60px;
	width: 300px;
	margin: 20px auto;
	box-shadow: 10px 10px 30px rgb(254, 215, 188);
	border-radius: 50px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}

.login,
.signup {
	font-size: 22px;
	border: none;
	outline: none;
	background-color: transparent;
	position: relative;
	cursor: pointer;
}

.slider {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	background-image: linear-gradient(to right,
			rgb(255, 195, 110),
			rgb(255, 146, 91));
	position: absolute;
	top: 20px;
	left: 100px;
	transition: all 0.5s ease-in-out;
}

.moveslider {
	left: 250px;
}

.form-section {
	height: 500px;
	width: 1000px;
	padding: 20px 0;
	display: flex;
	position: relative;
	transition: all 0.5s ease-in-out;
	left: 0px;
}

.form-section-move {
	left: -500px;
}

.login-box,
.signup-box {
	height: 100%;
	width: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	padding: 0px 40px;
}

.login-box {
	gap: 50px;
}

.signup-box {
	gap: 30px;
}

.ele {
	height: 60px;
	width: 400px;
	outline: none;
	border: none;
	color: rgb(77, 77, 77);
	background-color: rgb(240, 240, 240);
	border-radius: 50px;
	padding-left: 30px;
	font-size: 18px;
}

.clkbtn {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	background-image: linear-gradient(to right,
			rgb(255, 195, 110),
			rgb(255, 146, 91));
	font-size: 22px;
	border: none;
	cursor: pointer;
}



@media screen and (max-width: 650px) {
	.container {
		height: 600px;
		width: 300px;
	}

	.title {
		font-size: 15px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 50px;
	}

	.moveslider {
		left: 150px;
	}

	.form-section {
		height: 500px;
		width: 600px;
	}

	.form-section-move {
		left: -300px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 300px;
	}

	.ele {
		height: 50px;
		width: 250px;
		font-size: 15px;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}

@media screen and (max-width: 320px) {
	.container {
		height: 600px;
		width: 250px;
	}

	.heading {
		font-size: 30px;
	}

	.title {
		font-size: 10px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 27px;
	}

	.moveslider {
		left: 127px;
	}

	.form-section {
		height: 500px;
		width: 500px;
	}

	.form-section-move {
		left: -250px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 250px;
	}

	.ele {
		height: 50px;
		width: 220px;
		font-size: 15px;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
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
			  <a href="contant">CONTACT</a>
			</nav>
		  
		<h1 class="heading">Login or register as a student</h1>
		<h3 class="title">welcome dear student</h3>

	</header>

	<div class="container">

		
			
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Signup</button>
		</div>
