<?php session_start();
if(isset($_SESSION['id'])){header('Location:profile.php');}else{?>
<html>
	<head>
		<title>Welcome to limocius</title>
		<link rel='icon' type='image/ico' href='favicon.ico' />
		<link rel='stylesheet' type='text/css' href='css/site.css' />
		<link rel='stylesheet' type='text/css' href='css/index.css' />
	</head>
	<body>
		<div class='header'>
			<div class='option'>
				<?php if(!isset($_SESSION['id'])){ ?>
				<p class='bt'><a href='logup.php'>Login</a></p>
				<p class='bt'><a href='logup.php'>Create account</a></p>
				<?php } ?>
			</div>
			<div class='title'>
				<a href='http://www.limocius.com'><h1>Limocius</h1></a>
			</div>
		</div>
		<div class='info'>
			<p>Share your notes with friends</p>
		</div>
		<div class='main'>
			<div class='create_account'>
				<p>Create an account and start sharing</p>
				<form action='signup.php' method='POST'>
					<input type='text' name='f_name' class='f_name' placeholder='First name' />
					<input type='text' name='l_name' class='l_name' placeholder='Last name'/><br/>
					<input type='text' name='email' class='email' placeholder='Email'/><br />
					<input type='password' name='password' class='password' placeholder='Password'/><br /> 
					<input type='checkbox' name='toc' class='checkbox' />I accept <a href='toc'>terms and condition</a></br>
					<input type='submit' name='reg_submit' value='Sign up' class='submit' />
				</form>
			</div>
			<div class='about_info'>
				<div class='part'>
					<img src='./images/profile.png' class='profile' />
					<p>Create a profile</p>
				</div>
				<div class='part'>
					<img src='./images/notes.png' class='notes' />
					<p>Share notes and assignment with friends</p>
				</div>
				<div class='part'>
					<img src='./images/share.png' class='share' />
					<p>Discuss your notes with friends</p>
				</div>
			</div>
			<div class='footer'>
				<div class='link'>
					<a href='about.php'>About</a>
					<a href='logup.php'>Login or create an account</a>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
?>