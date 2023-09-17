<?php
//link your files::use:1.include()2.include_once(),3.require(),4.require_once()
include('includes/userheader.php');
?>

		
		<div class="form-section">

			
			<div class="login-box">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele"
					placeholder="password">
				<button class="clkbtn">Login</button>
			</div>

		<form action="" method="POST">
			<div class="signup-box">
				<input type="text"
					class="name ele"
					placeholder="Enter your name">
                    <input type="text"
					class="name ele"
					placeholder="enter machine serial nummber">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele"
					placeholder="password">
				<input type="password"
					class="password ele"
					placeholder="Confirm password">
				<button class="clkbtn">Signup</button>
</form>

<?php
include('includes/userfooter.php');

?>